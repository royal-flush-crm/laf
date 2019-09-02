<?php

class ConsoleController extends BaseController
{
    /**
     * 命令定义
     *
     * @var array 虚拟方法名 映射命令文件
     */
    public $actions = [
        'test' => 'Consoles/Test.php',
    ];

    public function before()
    {
        echo sprintf("[%s]正在处理...\n", date('Y-m-d H:i:s'));
    }

    public function after()
    {
        echo sprintf("[%s]处理完成!\n", date('Y-m-d H:i:s'));
    }
}
