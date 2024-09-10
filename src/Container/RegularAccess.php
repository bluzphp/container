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
 * Implements regular access to container
 *
 * @package  Bluz\Common
 * @author   Anton Shevchuk
 */
trait RegularAccess
{
    use Container;

    /**
     * Set key/value pair
     *
     * @param string $key
     * @param  mixed  $value
     *
     * @return void
     */
    public function set(string $key, mixed $value): void
    {
        $this->doSetContainer($key, $value);
    }

    /**
     * Get value by key
     *
     * @param string $key
     *
     * @return mixed
     */
    public function get(string $key): mixed
    {
        return $this->doGetContainer($key);
    }

    /**
     * Check contains key in container
     *
     * @param string $key
     *
     * @return bool
     */
    public function has(string $key): bool
    {
        return $this->doContainsContainer($key);
    }

    /**
     * Delete value by key
     *
     * @param string $key
     *
     * @return void
     */
    public function delete(string $key): void
    {
        $this->doDeleteContainer($key);
    }
}
