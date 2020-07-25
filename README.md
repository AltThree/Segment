![Alt Three Segment](https://user-images.githubusercontent.com/2829600/71490849-0de16e00-2825-11ea-87a6-ddada0f35224.png)

<p align="center">
<a href="https://github.com/AltThree/Segment/actions?query=workflow%3ATests"><img src="https://img.shields.io/github/workflow/status/AltThree/Segment/Tests?label=Tests&style=flat-square" alt="Build Status"></img></a>
<a href="https://github.styleci.io/repos/38056197"><img src="https://github.styleci.io/repos/38056197/shield" alt="StyleCI Status"></img></a>
<a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen?style=flat-square" alt="Software License"></img></a>
<a href="https://packagist.org/packages/alt-three/segment"><img src="https://img.shields.io/packagist/dt/alt-three/segment?style=flat-square" alt="Packagist Downloads"></img></a>
<a href="https://github.com/AltThree/Segment/releases"><img src="https://img.shields.io/github/release/AltThree/Segment?style=flat-square" alt="Latest Version"></img></a>
</p>


## Installation

Alt Three Segment is a [Segment](https://segment.com/) bridge for Laravel. This version requires [PHP](https://php.net) 7.1-7.4, and supports Laravel 5.5-8. Simply require the package using [Composer](https://getcomposer.org):

```bash
$ composer require alt-three/segment:^3.5
```

Once installed, if you are not using automatic package discovery, then you need to register the  `AltThree\Segment\SegmentServiceProvider` service provider in your `config/app.php`.


## Configuration

Alt Three Segment requires configuration.

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish
```

This will create a `config/segment.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.


## Usage

Once you've set your `write_key` value in the configuration, you're ready to go! For the most part you can follow [Segments own instructions](https://segment.com/docs/libraries/php/quickstart) however, you'll want to replace the `Analytics` classname with `Segment` - plus, you don't need to call `class_alias`.

### Identify the user

```php
Segment::identify([
    'userId' => '12345abcde',
    'traits' => [
        'name' => 'James Brooks',
        'email' => 'test@test.com',
    ],
]);
```

### Track actions

```php
Segment::track([
    'userId' => '12345abcde',
    'event' => 'Did something',
    'properties' => [
        'was_awesome' => true,
    ],
]);
```


## Security

Our full security policy is available to read [here](https://github.com/AltThree/Segment/security/policy).


## License

Alt Three Segment is licensed under [The MIT License (MIT)](LICENSE).
