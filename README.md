# Eloquent UUID

A simple package to use universally unique identifiers (UUID) in Eloquent models.

## Installation

```
composer require edersoares/eloquent-uuid
```

## Usage

Replace in migrations files:

```php
// From
$table->increments('id');

// To
$table->uuid('uuid')->unique();
$table->primary('uuid')
```

After, use in your model the `Nix\Eloquent\Uuid\Uuid` trait:

```php
use Illuminate\Database\Eloquent\Model;
use Nix\Eloquent\Uuid\Uuid;

class SomeModel extends Model
{
    use Uuid;
}
```

## Credits

This package use:

- https://github.com/ramsey/uuid

And is based on:

- https://github.com/webpatser/laravel-uuid
- https://github.com/EmadAdly/laravel-uuid
