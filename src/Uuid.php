<?php

namespace Nix\Eloquent\Uuid;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait Uuid
{
    /**
     * Change model primary key.
     *
     * @see Model::bootIfNotBooted()
     *
     * @return void
     */
    protected function bootIfNotBooted()
    {
        parent::bootIfNotBooted();

        $this->primaryKey = 'uuid';
        $this->keyType = 'string';
        $this->incrementing = false;
    }

    /**
     * Boot UUID trait.
     *
     * @return void
     */
    public static function bootUuid()
    {
        self::creating(function ($model) {
            $model->{$model->getKeyName()} = $model->generateUuid();
        });
    }

    /**
     * Generate a new UUID.
     *
     * @return string
     */
    public function generateUuid()
    {
        return (string) Str::uuid();
    }
}
