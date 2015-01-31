# Gravatar Twig Integration

[![Latest Version](https://img.shields.io/github/release/gravatarphp/twig-integration.svg?style=flat-square)](https://github.com/gravatarphp/twig-integration/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://img.shields.io/travis/gravatarphp/twig-integration.svg?style=flat-square)](https://travis-ci.org/gravatarphp/twig-integration)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/gravatarphp/twig-integration.svg?style=flat-square)](https://scrutinizer-ci.com/g/gravatarphp/twig-integration)
[![Quality Score](https://img.shields.io/scrutinizer/g/gravatarphp/twig-integration.svg?style=flat-square)](https://scrutinizer-ci.com/g/gravatarphp/twig-integration)
[![HHVM Status](https://img.shields.io/hhvm/gravatarphp/twig-integration.svg?style=flat-square)](http://hhvm.h4cc.de/package/gravatarphp/twig-integration)
[![Total Downloads](https://img.shields.io/packagist/dt/gravatarphp/twig-integration.svg?style=flat-square)](https://packagist.org/packages/gravatarphp/twig-integration)
[![Dependency Status](https://img.shields.io/versioneye/d/php/gravatarphp:twig-integration.svg?style=flat-square)](https://www.versioneye.com/php/gravatarphp:twig-integration)

**Integrates Gravatar into Twig templating engine.**


## Install

Via Composer

``` bash
$ composer require gravatarphp/twig-integration
```


## Usage

``` php
use Gravatar\UrlBuilder;
use Gravatar\Twig\Extension;

$extension = new Extension(new UrlBuilder);

$environment->addExtension($extension);
```

Use it in a twig template:

``` twig
'user@domain.com'|avatar
'user@domain.com'|profile
'user@domain.com'|vcard
'user@domain.com'|qrCode
```


## Testing

``` bash
$ phpunit
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## Credits

- [Márk Sági-Kazár](https://github.com/sagikazarmark)
- [All Contributors](https://github.com/gravatarphp/twig-integration/contributors)


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
