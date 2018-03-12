# Eloquent UUID

A simple package to use universally unique identifiers (UUID) as primary key of the Eloquent models.

This package uses [Uuid](https://github.com/ramsey/uuid) library utilized in [Laravel](https://laravel.com) Framework to generate UUIDs.

## Installation

```
composer require edersoares/eloquent-uuid
```

## Usage

- Replace in migrations files:

```php
// From
$table->increments('id');

// To
$table->uuid('uuid')->unique();
$table->primary('uuid')
```

- After, use in your model the `Nix\Eloquent\Uuid\Uuid` trait:

```php
use Illuminate\Database\Eloquent\Model;
use Nix\Eloquent\Uuid\Uuid;

class SomeModel extends Model
{
    use Uuid;
}
```

## Credits

This package uses:

- [https://github.com/ramsey/uuid](https://github.com/ramsey/uuid)

And is based on:

- [https://github.com/webpatser/laravel-uuid](https://github.com/webpatser/laravel-uuid)
- [https://github.com/EmadAdly/laravel-uuid](https://github.com/EmadAdly/laravel-uuid)
