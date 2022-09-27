<?php

namespace Busarm\PhpMini\Interfaces\Bags;

/**
 * PHP Mini Framework
 *
 * @copyright busarm.com
 * @license https://github.com/Busarm/php-mini/blob/master/LICENSE (MIT License)
 * @codeCoverageIgnore
 */
interface AttributeBag
{
    /**
     * Set attribute
     *
     * @param string $name
     * @param mixed $value
     * @return bool
     */
    public function set(string $name, mixed $value): bool;
    /**
     * 
     * Checks if an attribute exists
     *
     * @param string $name
     * @return boolean
     */
    public function has(string $name): bool;
    /**
     * Get attribute
     *
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public function get(string $name, $default = null): mixed;
    /**
     * Pull attribute: Get and delete
     *
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public function pull(string $name, $default = null): mixed;
    /**
     * Get all attributes
     *
     * @return array
     */
    public function all(): array;
    /**
     * Set bulk attributes
     *
     * @param string $name
     * @return void
     */
    public function replace(array  $data);
    /**
     * Remove attribute
     *
     * @param string $name
     * @return void
     */
    public function remove(string $name);
    /**
     * Remove all attribute
     *
     * @return void
     */
    public function clear();
}
