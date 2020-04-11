<?php
include 'BenzDirect.php';
include 'BmwDirect.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-11
 * Time: 22:49
 */
class Customer
{
    public function exam()
    {

        /**
         * 学员A自动挡考试
         */
        $studentA = new BenzDirect();
        $studentA->exam();
        print_r(PHP_EOL);

        /**
         * 学员B手动挡考试
         */
        $studentB = new BmwDirect();
        $studentB->exam();
    }
}

$c = new Customer();
$c->exam();