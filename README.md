# Container Component
## Achievements

[![PHP >= 8.2+](https://img.shields.io/packagist/php-v/bluzphp/container.svg?style=flat)](https://php.net/)

[![Latest Stable Version](https://img.shields.io/packagist/v/bluzphp/container.svg?label=version&style=flat)](https://packagist.org/packages/bluzphp/container)

[![Build Status](https://img.shields.io/scrutinizer/build/g/bluzphp/container)](https://scrutinizer-ci.com/g/bluzphp/container/build-status/master)

[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/bluzphp/container.svg?style=flat)](https://scrutinizer-ci.com/g/bluzphp/container/)

[![Total Downloads](https://img.shields.io/packagist/dt/bluzphp/container.svg?style=flat)](https://packagist.org/packages/bluzphp/container)

[![License](https://img.shields.io/packagist/l/bluzphp/container.svg?style=flat)](https://packagist.org/packages/bluzphp/container)

## Usage

Example of the Registry class:

```
namespace Bluz\Registry;

use Bluz\Container;

class Registry {
    use Container\Container;
    use Container\JsonSerialize;
    use Container\RegularAccess;
}
```

### Methods

Public methods of the `Container\Container`:

* `setFromArray(array $data)`
* `toArray()`
* `resetArray()`
* 
Protected methods of the `Container\Container`:

* `doSetContainer(string $key, mixed $value)` - set the `value` by the `key`
* `doGetContainer(string $key)` – if the container has the `key`, then it returns the `value`, otherwise `null`
* `doContainsContainer(string $key)` - check the container for the `key`
* `doDeleteContainer(string $key)` - remove the `value` by the `key`

Methods of the `Container\ArrayAccess` (implementation of the interface `ArrayAccess`):
* `offsetSet($offset, $value)`
* `offsetExists($offset)`
* `offsetUnset($offset)`
* `offsetGet($offset)`

Methods of the  `Container\MagicAccess`:
* `__set($key, $value)`
* `__get($key)`
* `__isset($key)`
* `__unset($key)`

Methods of the `Container\RegularAccess`:
* `set($key, $value)`
* `get($key)`
* `has($key)`
* `remove($key)`

Methods of the `Container\JsonSerialize`
* `jsonSerialize()` - implementation of the interface `JsonSerializable`
