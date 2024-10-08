<?php

/**
 * Bluz Framework Component
 *
 * @copyright Bluz PHP Team
 * @link      https://github.com/bluzphp/framework
 */

declare(strict_types=1);

namespace Bluz\Container;

/**
 * Container implements JsonSerializable interface
 *
 * @package  Bluz\Common
 * @author   Anton Shevchuk
 * @see      JsonSerializable
 */
trait JsonSerialize
{
    use Container;

    /**
     * Specify data which should be serialized to JSON
     *
     * @return array
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
