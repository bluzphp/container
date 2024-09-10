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

/**
 * Concrete class with ArrayAccess trait
 *
 * @package  Bluz\Tests\Common
 *
 * @author   Anton Shevchuk
 */
class ArrayContainer implements \ArrayAccess
{
    use ArrayAccess;
}
