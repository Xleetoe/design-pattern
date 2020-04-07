<?php
include 'Website.php';
include 'Hongkong.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-07
 * Time: 15:16
 */
class Customer
{
    public function access()
    {
        $youtube = new Website('Youtube');
        $proxy = new Hongkong($youtube);
        $proxy->access();

    }
}

$c = new Customer();
$c->access();
