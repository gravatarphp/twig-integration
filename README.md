# Gravatar Twig Integration

[![Latest Version](https://img.shields.io/github/release/gravatarphp/twig-integration.svg?style=flat-square)](https://github.com/gravatarphp/twig-integration/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://img.shields.io/travis/gravatarphp/twig-integration.svg?style=flat-square)](https://travis-ci.org/gravatarphp/twig-integration)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/gravatarphp/twig-integration.svg?style=flat-square)](https://scrutinizer-ci.com/g/gravatarphp/twig-integration)
[![Quality Score](https://img.shields.io/scrutinizer/g/gravatarphp/twig-integration.svg?style=flat-square)](https://scrutinizer-ci.com/g/gravatarphp/twig-integration)
[![Total Downloads](https://img.shields.io/packagist/dt/gravatarphp/twig-integration.svg?style=flat-square)](https://packagist.org/packages/gravatarphp/twig-integration)

**Integrates Gravatar into Twig templating engine.**


## Install

Via Composer

``` bash
$ composer require gravatarphp/twig-integration
```


## Usage

``` php
use Gravatar\Gravatar;
use Gravatar\Twig\GravatarExtension;

$extension = new GravatarExtension(new Gravatar());

$environment->addExtension($extension);
```

Use it in a twig template:

``` html
<a href="{{ 'user@domain.com'|gravatar_avatar }}">Avatar</a>
<a href="{{ 'user@domain.com'|gravatar_profile }}">Profile</a>
<a href="{{ 'user@domain.com'|gravatar_vcard }}">vCard</a>
<a href="{{ 'user@domain.com'|gravatar_qrCode }}">QR Code</a>
```


## Testing

``` bash
$ composer test
```


## Credits

- [Márk Sági-Kazár](https://github.com/sagikazarmark)
- [All Contributors](https://github.com/gravatarphp/twig-integration/contributors)


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
