<?php

/**
 * Bluz Framework Component
 *
 * @copyright Bluz PHP Team
 * @link      https://github.com/bluzphp/framework
 */

declare(strict_types=1);

namespace Bluz\Container;

use InvalidArgumentException;

/**
 * Container implements ArrayAccess
 *
 * @package  Bluz\Common
 * @author   Anton Shevchuk
 * @see      ArrayAccess
 */
trait ArrayAccess
{
    use Container;

    /**
     * Offset to set
     *
     * @param  mixed $offset
     * @param  mixed $value
     *
     * @throws InvalidArgumentException
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (null === $offset) {
            throw new InvalidArgumentException('Class `Common\Container\ArrayAccess` support only associative arrays');
        }
        $this->doSetContainer($offset, $value);
    }

    /**
     * Offset to retrieve
     *
     * @param  mixed $offset
     *
     * @return mixed
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->doGetContainer($offset);
    }

    /**
     * Whether an offset exists
     *
     * @param  mixed $offset
     *
     * @return bool
     */
    public function offsetExists(mixed $offset): bool
    {
        return $this->doContainsContainer($offset);
    }

    /**
     * Offset to unset
     *
     * @param mixed $offset
     */
    public function offsetUnset(mixed $offset): void
    {
        $this->doDeleteContainer($offset);
    }
}
