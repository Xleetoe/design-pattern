<?php
/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-04
 * Time: 22:02
 */
class Robot extends Person
{

    public function getSex()
    {
        // TODO: Implement getSex() method.
        print_r('I have no sex' . PHP_EOL);
    }

    public function getName()
    {
        // TODO: Implement getName() method.
        print_r(parent::getName() . 'is robot,');
    }
}