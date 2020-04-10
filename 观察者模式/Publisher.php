<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-10
 * Time: 15:20
 */
abstract class Publisher
{
    /**
     * @var array
     * 定义一个空数组用来保存订阅者
     */
    public $listeners = [];

    public abstract function addListener(Subscription $listener);

    public abstract function removeListener(Subscription $listener);

    public abstract function notify();
}