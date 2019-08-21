<?php

use Yaf\Application;
use Yaf\Bootstrap_Abstract;
use Yaf\Dispatcher;
use Yaf\Loader;
use Yaf\Registry;

class Bootstrap extends Bootstrap_Abstract
{
    private $_config;

    public function _initConfig()
    {
        $this->_config = Application::app()->getConfig();
        Registry::set('config', $this->_config);
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
