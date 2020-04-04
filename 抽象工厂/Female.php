<?php
/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-04
 * Time: 21:54
 */
class Female extends Person
{

    public function getSex()
    {
        // TODO: Implement getSex() method.
        print_r(parent::getSex() . 'is female。' . PHP_EOL);
    }

    public function getName()
    {
        // TODO: Implement getName() method.
        print_r(parent::getName() . 'is girl,');
    }
}