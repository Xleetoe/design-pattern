<?php
include 'Subscription.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-10
 * Time: 15:45
 */
class Student extends Subscription
{

    public function update($message)
    {
        // TODO: Implement update() method.
        print_r($this->name . ',' . $message . PHP_EOL);
    }

}