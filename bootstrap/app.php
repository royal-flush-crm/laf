<?php

use App\Plugins\Module;
use Library\Box;
use Yaf_Bootstrap_Abstract as Bootstrap_Abstract;
use Yaf_Dispatcher as Dispatcher;
use Yaf_Registry as Registry;

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

    /**
     * disable view
     *
     * @param Dispatcher $dispatcher
     */
    public function _initView(Dispatcher $dispatcher)
    {
        $dispatcher->getInstance()->disableView();
    }
}
