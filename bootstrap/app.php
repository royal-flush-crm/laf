<?php

use App\Plugins\Module;
use Library\Box;
use Yaf\Bootstrap_Abstract;
use Yaf\Dispatcher;
use Yaf\Registry;
use Yaf\Application;
use Yaf\Loader;

class Bootstrap extends Bootstrap_Abstract
{
    private $_config;

    public function _initConfig()
    {
        $this->_config = Application::app()->getConfig();
        Registry::set('config', $this->_config);
    }

    /**
     * composer autoload
     *
     * @param Dispatcher $dispatcher
     */
    public function _initAutoload(Dispatcher $dispatcher)
    {
        $autoload = APP_ROOT . '/vendor/autoload.php';
        if (file_exists($autoload)) {
            Loader::import($autoload);
        }
        spl_autoload_register('autoload_controller');
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
