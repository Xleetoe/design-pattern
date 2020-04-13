<?php
include 'NginxService.php';
include 'StateReady.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-13
 * Time: 13:44
 */
class Customer
{
    public function view()
    {
        $service = new NginxService();
        $service->setState('asdasd');
        $service->setStateObject(new StateReady());
        $service->handle();
        print_r(PHP_EOL);

        $service->setState('stop');
        $service->handle();
    }

}

$c = new Customer();
$c->view();