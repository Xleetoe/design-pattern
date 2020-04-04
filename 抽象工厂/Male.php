<?php
include 'Person.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-04
 * Time: 21:52
 */
class Male extends Person
{

    public function getSex()
    {
        // TODO: Implement getSex() method.
        print_r(parent::getSex() . 'is male。' . PHP_EOL);
    }

    public function getName()
    {
        // TODO: Implement getName() method.
        print_r(parent::getName() . 'is boy,');
    }
}