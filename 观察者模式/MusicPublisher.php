<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-10
 * Time: 15:33
 */
class MusicPublisher extends Publisher
{

    //添加订阅者
    public function addListener(Subscription $listener)
    {
        // TODO: Implement addListener() method.
        array_push($this->listeners, $listener);
    }

    //移除订阅者
    public function removeListener(Subscription $listener)
    {
        // TODO: Implement removeListener() method.
        if (!in_array($listener, $this->listeners)) {
            throw new Exception('订阅者不存在');
            return;
        }

        array_splice($this->listeners, 0, 1);
    }

    public function notify()
    {
        // TODO: Implement notify() method.
        if (!empty($this->listeners)) {
            foreach ($this->listeners as $listener) {
                $listener->update('音乐电台提醒：新歌上线，火速围观');
            }
        }
    }
}