<?php

/**
 * @copyright Bluz PHP Team
 * @link      https://github.com/bluzphp/framework
 */

/**
 * @namespace
 */

namespace Bluz\Tests\Container\Fixtures;

use Bluz\Container\ArrayAccess;
use Bluz\Container\JsonSerialize;
use Bluz\Container\MagicAccess;
use Bluz\Container\RegularAccess;

/**
 * Concrete class with all traits
 *
 * @package  Bluz\Tests\Common
 *
 * @author   Anton Shevchuk
 */
class ComplexContainer implements \ArrayAccess, \JsonSerializable
{
    use ArrayAccess;
    use JsonSerialize;
    use MagicAccess;
    use RegularAccess;
}
