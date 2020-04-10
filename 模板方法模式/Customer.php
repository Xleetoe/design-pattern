<?php
include 'Benz.php';
include 'Bmw.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-10
 * Time: 14:04
 */
class Customer
{
    public function driver()
    {

        $benz = new Benz();
        $benz->start();
        $benz->run();
        $benz->stop();

        print_r('换车');
        print_r(PHP_EOL);

        $bmw = new Bmw();
        $bmw->start();
        $bmw->run();
        $bmw->stop();
    }
}

$c = new Customer();
$c->driver();