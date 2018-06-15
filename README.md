# Picklock

Tiny package that allows direct access to any protected or private method of an object without reflection. For example for testing.


## Installing

The best way is to install this package via [composer](https://getcomposer.org):

```
composer require m0rtis/picklock
```

## How to use

It is very simple:

```
m0rtis\Picklock\Picklock::callMethod(object $object, string $methodName, [$argementOne[, $argumentTwo, ...]]);
```
**$object** - The object whose method you want to call

**$methodName** - Name of the method you want to call

**$arguments** - Any arguments you need to call your method

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://gitlab.com/m0rtis/picklock/tags). 

## Author

**Anton Fomichev** aka **m0rtis** - [mail@m0rtis.ru](mailto:mail@m0rtis.ru)


## License

This project is licensed under the Apache 2.0 license - see the [LICENSE](LICENSE) file for details

