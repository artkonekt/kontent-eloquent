# Kontent CMF Eloquent ORM Integration Package

## Installation

### Composer

Add the dependency to composer: `composer require konekt/kontent-eloquent`

### Register The Provider

In the `config/app.php` configuration file, add to the provider array:

```php
'providers' => [
    // Other Service Providers

    Konekt\Kontent\Laravel\KontentServiceProvider::class,
],
```
