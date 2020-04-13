<?php
include 'StateFinish.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-13
 * Time: 11:25
 */
class StateRunning implements State
{

    public function handle(NginxService $nginxService)
    {
        // TODO: Implement handle() method.
        if ($nginxService->state == 'running') {
            print_r('nginx服务运行中' . PHP_EOL);
        } else {
            $nginxService->setStateObject(new StateFinish());
            $nginxService->handle();
        }
    }
}
