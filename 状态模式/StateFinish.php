<?php
include 'StateStop.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-13
 * Time: 11:26
 */
class StateFinish implements State
{

    public function handle(NginxService $nginxService)
    {
        // TODO: Implement handle() method.
        if ($nginxService->state == 'finish') {
            print_r('nginx服务完成' . PHP_EOL);
        } else {
            $nginxService->setStateObject(new StateStop());
            $nginxService->handle();
        }
    }
}