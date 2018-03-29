# Prophecy Extensions

## Install via composer
php ./composer.phar require --dev crellbar/prophecy-extensions


## FluidPromise

Provides a simple prophecy promise of a fluid interface.

Despite being somewhat against fluid interfaces I built this library as the project team I'm contracting with uses them. Before committing to using fluid interfaces in your code I strongly urge you to read up on the numerous cons that I believe outweigh the small pro of _readability_. Here's one source  https://ocramius.github.io/blog/fluent-interfaces-are-evil/

### Usage

```php
use Crellbar\ProphecyExtensions\FluidPromise as Fluid;

/** @var ObjectProphecy $prophecy */
... // setup prophecy in the usual fashion for the test tool you're using

$prophecy->myMethod(Argument::any())->will(new Fluid());
```


## VoidPromise

### Usage
```php
use Crellbar\ProphecyExtensions\VoidPromise as VoidP;

/** @var ObjectProphecy $prophecy */
... // setup prophecy in the usual fashion for the test tool you're using

$prophecy->myMethod(Argument::any())->will(new VoidP());
```