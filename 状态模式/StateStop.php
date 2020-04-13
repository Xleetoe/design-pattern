<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-13
 * Time: 11:26
 */
class StateStop implements State
{

    public function handle(NginxService $nginxService)
    {
        // TODO: Implement handle() method.
        if ($nginxService->state == 'stop') {
            print_r('nginx服务停止' . PHP_EOL);
        } else {
            print_r('不正常状态');
        }
    }
}