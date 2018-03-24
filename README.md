# Prophecy Extensions

## FluidPromise

Provides a simple prophecy promise of a fluid interface.

Despite being somewhat against fluid interfaces I built this library as a project I'm working on uses them. Before committing to using fluid interfaces in your code I strongly urge you to read up on the numerous cons that I believe outweigh the small pro of _readability_. Here's one source  https://ocramius.github.io/blog/fluent-interfaces-are-evil/

### Usage

```php
use Crellbar\ProphecyExtensions\FluidPromise as Fluid;

/** @var ObjectProphecy $prophecy */
...

$prophecy->myMethod(Argument::any())->will(new Fluid());
```

### Install via composer
TODO, once properly set up on github w/ composer.json etc
