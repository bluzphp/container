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
 * Implements magic access to container
 *
 * @package  Bluz\Common
 * @author   Anton Shevchuk
 */
trait MagicAccess
{
    use Container;

    /**
     * Magic alias for set() regular method
     *
     * @param string $key
     * @param  mixed  $value
     *
     * @return void
     */
    public function __set(string $key, mixed $value): void
    {
        $this->doSetContainer($key, $value);
    }

    /**
     * Magic alias for get() regular method
     *
     * @param string $key
     *
     * @return mixed
     */
    public function __get(string $key): mixed
    {
        return $this->doGetContainer($key);
    }

    /**
     * Magic alias for contains() regular method
     *
     * @param string $key
     *
     * @return bool
     */
    public function __isset(string $key): bool
    {
        return $this->doContainsContainer($key);
    }

    /**
     * Magic alias for delete() regular method
     *
     * @param string $key
     *
     * @return void
     */
    public function __unset(string $key): void
    {
        $this->doDeleteContainer($key);
    }
}
