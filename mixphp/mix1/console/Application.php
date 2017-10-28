<?php

namespace mix\console;

use mix\base\Component;

/**
 * App类
 * @author 刘健 <coder.liu@qq.com>
 */
class Application extends \mix\base\Application
{

    /**
     * 执行功能 (CLI模式)
     */
    public function run()
    {
        if (PHP_SAPI != 'cli') {
            throw new \mix\exception\CommandException('Please run in CLI mode');
        }
        \Mix::app()->error->register();
        $method  = 'CLI';
        $action  = empty($GLOBALS['argv'][1]) ? '' : $GLOBALS['argv'][1];
        $content = $this->runAction($method, $action);
        \Mix::app()->response->setContent($content);
        \Mix::app()->response->send();
    }

    /**
     * 获取组件
     * @param  string $name
     */
    public function __get($name)
    {
        // 返回单例
        if (isset($this->_components->$name)) {
            // 返回对象
            return $this->_components->$name;
        }
        // 装载组件
        $this->loadComponent($name);
        // 修改状态
        $this->_components->$name->setStatus(Component::STATUS_RUNNING);
        // 返回对象
        return $this->_components->$name;
    }

    /**
     * 执行一个外部程序
     */
    public function exec($command)
    {
        exec($command, $output, $returnVar);
        if ($returnVar != 0) {
            throw new \mix\exception\CommandException('Command execute failure : ' . $command);
        }
        return $output;
    }

}
