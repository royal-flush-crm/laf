<?php

use App\Plugins\Module;
use Library\Box;
use Yaf\Bootstrap_Abstract;
use Yaf\Dispatcher;
use Yaf\Registry;

class Bootstrap extends Bootstrap_Abstract
{
    private $_config;

    public function _initConfig()
    {
        $this->_config = Yaf_Application::app()->getConfig();
        Registry::set('config', $this->_config);
    }

    /**
     * init plugin
     *
     * @param Dispatcher $dispatcher
     * @throws ReflectionException
     */
    public function _initPlugins(Dispatcher $dispatcher)
    {
        $module = Box::get(Module::class);
        $dispatcher->registerPlugin($module);
    }
}
