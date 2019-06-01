<?php

namespace Library;

use ReflectionException;

class Box
{
    protected static $bind = [];

    protected static $newInstance;

    private static $prefix = 'Laf_Box_';

    /**
     * @param string $class
     * @param array  $args
     *
     * @throws ReflectionException
     *
     * @return mixed
     */
    protected static function bind(string $class, array $args = [])
    {
        if (empty($args)) {
            $name = self::$prefix.$class;
            self::$bind[$name] = new $class();
        } else {
            $name = self::$prefix.$class.serialize($args);

            $reflect = new \ReflectionClass($class);
            self::$bind[$name] = $reflect->newInstanceArgs($args);
        }

        return self::$bind[$name];
    }

    /**
     * get instance.
     *
     * @param string $class
     * @param array  $args
     * @param bool   $newInstance
     *
     * @throws ReflectionException
     *
     * @return mixed
     */
    public static function get(string $class, array $args = [], bool $newInstance = false)
    {
        if ($newInstance) {
            return self::bind($class, $args);
        }

        $name = empty($args) ? self::$prefix.$class : self::$prefix.$class.serialize($args);

        return self::$bind[$name] ?? self::bind($class, $args);
    }
}
