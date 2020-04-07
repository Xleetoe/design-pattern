<?php
include 'Male.php';
include 'Active.php';
include 'Manly.php';
include 'Female.php';
include 'Lovely.php';
include 'Beautiful.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-07
 * Time: 11:32
 */
class Customer
{
    public function description()
    {
        $male = new Male();
        $active = new Active();
        $manly = new Manly();
        $manly->setComponent($male);
        $active->setComponent($manly);
        $active->show();

        print_r(PHP_EOL);

        $female = new Female();
        $activeGirl = new Active();
        $lovely = new Lovely();
        $beautiful = new Beautiful();
        $activeGirl->setComponent($female);
        $lovely->setComponent($activeGirl);
        $beautiful->setComponent($lovely);
        $beautiful->show();
    }
}

$c = new Customer();
$c->description();