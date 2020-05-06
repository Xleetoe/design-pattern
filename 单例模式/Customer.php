<?php
include 'DB.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-05-06
 * Time: 11:19
 */
class Customer
{
    public function connect()
    {
        $db = DB::getInstance();
        $db->test();
    }

}

$c = new Customer();
$c->connect();