<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-13
 * Time: 11:23
 */
interface State
{
    public function handle(NginxService $nginxService);
}