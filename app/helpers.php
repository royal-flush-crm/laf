<?php

if (!function_exists('autoload_controller')) {
    /**
     * autoload for controller.
     *
     * @param string $class
     */
    function autoload_controller($class)
    {
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        if ('Controller' !== substr($class, -10)) {
            return;
        }
        $class = str_replace('App\\', 'app\\', substr($class, 0, -10));

        $file = APP_ROOT.'\\'.$class.'.php';
        if (file_exists($file)) {
            Yaf\Loader::import($file);
        }
    }
}
