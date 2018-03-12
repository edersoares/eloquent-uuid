<?php

namespace Nix\Eloquent\Uuid\Tests;

use Illuminate\Database\Eloquent\Model;
use Nix\Eloquent\Uuid\Uuid;
use PHPUnit\Framework\TestCase;

class UuidTest extends TestCase
{
    public function testUsingUuid()
    {
        $model = new class extends Model {
            use Uuid;
        };

        $this->assertEquals('uuid', $model->getKeyName());
        $this->assertEquals('string', $model->getKeyType());
        $this->assertFalse($model->incrementing);
    }
}
