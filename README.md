# Alt Three Segment

A [Segment](https://segment.com/) bridge for Laravel 5.


## Installation

Either [PHP](https://php.net) 5.5+ or [HHVM](http://hhvm.com) 3.6+ are required.

To get the latest version of Alt Three Segment, simply require the project using [Composer](https://getcomposer.org):

```bash
$ composer require alt-three/segment
```

Instead, you may of course manually update your require block and run `composer update` if you so choose:

```json
{
    "require": {
        "alt-three/segment": "^1.0"
    }
}
```

Once Alt Three Segment is installed, you need to register the service provider. Open up `config/app.php` and add the `AltThree\Segment\SegmentServiceProvider` class to the `providers`.


## Configuration

Alt Three Segment requires configuration.

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish
```

This will create a `config/segement.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.


## Usage

Once you've set your `write_key` value in the configuration, you're ready to go! For the most part you can follow [Segments own instructions](https://segment.com/docs/libraries/php/quickstart) however, you'll want to replace the `Analytics` classname with `Segment` - plus, you don't need to call `class_alias`.

### Identify the user

```php
Segment::identify([
    "userId" => "12345abcde",
    "traits" => [
        "name"  => "James Brooks",
        "email" => "test@test.com",
    ]
]);
```

### Track actions

```php
Segment::track([
    "userId"     => "12345abcde",
    "event"      => "Did something",
    "properties" => [
        "was_awesome" => true,
    ]
]);
```


## Security

If you discover a security vulnerability within this package, please e-mail us at support@alt-three.com. All security vulnerabilities will be promptly addressed.


## License

Alt Three Segment is licensed under [The MIT License (MIT)](LICENSE).
