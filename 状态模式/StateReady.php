<?php
include 'State.php';
include 'StateRunning.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-13
 * Time: 11:25
 */
class StateReady implements State
{

    public function handle(NginxService $nginxService)
    {
        if ($nginxService->state == 'ready') {
            print_r('nginx服务准备' . PHP_EOL);
        } else {
            $nginxService->setStateObject(new StateRunning());
            $nginxService->handle();
        }

    }
}