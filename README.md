# ProphecyFluidInterface
Provides a simple prophecy promise of a fluid interface.

Despite being slightly on the side against fluid interfaces I built this library as the team I'm working with on a project liked to us them. Before committing to fluid interfaces I strongly urge you to read up on the numerous cons that come for the small pro of _readability_. Here's one source  https://ocramius.github.io/blog/fluent-interfaces-are-evil/

## Usage

```php
$obj->setProperty(Argument::any())->will(new FluidInterfacePromise());
```

## Install via composer
TODO, once properly set up on github w/ composer.json etc
