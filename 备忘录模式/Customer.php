<?php
include 'Player.php';
include 'BackUpManager.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-05-06
 * Time: 17:43
 */
class Customer
{
    public function start()
    {
        $xiaoming = new Player();
        $xiaoming->blood = '100%';
        $xiaoming->energy = '100%';
        $xiaoming->show();
        print_r(PHP_EOL);

        //开始备份
        $backUpManager = new BackUpManager();
        $backUpManager->backUp = $xiaoming->backUp();
        print_r('战斗结束' . PHP_EOL);
        $xiaoming->fighting();
        $xiaoming->show();
        print_r(PHP_EOL);
        print_r('恢复备份' . PHP_EOL);

        $xiaoming->recover($backUpManager->backUp);
        $xiaoming->show();

    }

}

$c = new Customer();
$c->start();