<?php
include 'Car.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-10
 * Time: 14:05
 */
class Benz extends Car
{

    public function run()
    {
        // TODO: Implement run() method.
        print_r('速度非常快，140迈');
        print_r(PHP_EOL);
    }
}