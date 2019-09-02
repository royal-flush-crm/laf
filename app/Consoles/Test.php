<?php

class TestAction extends \Yaf\Action_Abstract
{
    /**
     * 命令主方法
     */
    public function execute()
    {
        $controller = $this->getController();
        $controller->before();
        echo 'success'.PHP_EOL;
        $controller->after();
    }
}
