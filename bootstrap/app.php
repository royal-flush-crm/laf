<?php

use Yaf\Bootstrap_Abstract;
use Yaf\Dispatcher;
use Yaf\Loader;
use Yaf\Registry;

class Bootstrap extends Bootstrap_Abstract
{
    public function _initConfig()
    {
        $const = new \Yaf\Config\Ini(APP_ROOT.'/config/const.ini');
        Registry::set('const_config', $const);
    }

    /**
     * composer autoload.
     */
    public function _initAutoload()
    {
        $autoload = APP_ROOT.'/vendor/autoload.php';
        if (file_exists($autoload)) {
            Loader::import($autoload);
        }
    }

    /**
     * disable view.
     *
     * @param Dispatcher $dispatcher
     */
    public function _initView(Dispatcher $dispatcher)
    {
        $dispatcher->getInstance()->disableView();
    }
}
