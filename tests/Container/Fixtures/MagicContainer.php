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
use Bluz\Container\Container;
use Bluz\Container\JsonSerialize;
use Bluz\Container\MagicAccess;
use Bluz\Container\RegularAccess;

/**
 * Concrete class with Container trait
 *
 * @package  Bluz\Tests\Common
 *
 * @author   Anton Shevchuk
 */
class MagicContainer
{
    use Container;
    use MagicAccess;
}
