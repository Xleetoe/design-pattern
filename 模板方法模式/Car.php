<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-10
 * Time: 14:05
 */
abstract class Car
{
    public abstract function run();

    public function start()
    {
        print_r('车子启动');
        print_r(PHP_EOL);
    }

    public function stop()
    {
        print_r('停车');
        print_r(PHP_EOL);
    }
}