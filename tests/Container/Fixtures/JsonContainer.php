<?php

/**
 * @copyright Bluz PHP Team
 * @link      https://github.com/bluzphp/framework
 */

/**
 * @namespace
 */

namespace Bluz\Tests\Container\Fixtures;

use Bluz\Container\JsonSerialize;

/**
 * Concrete class with JsonSerialize trait
 *
 * @package  Bluz\Tests\Common
 *
 * @author   Anton Shevchuk
 */
class JsonContainer implements \JsonSerializable
{
    use JsonSerialize;
}
