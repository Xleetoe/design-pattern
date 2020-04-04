<?php
include 'MaleFactory.php';
include 'FemaleFactory.php';
include 'RobotFactory.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-04
 * Time: 22:04
 */
class Customer
{
    public function buy()
    {
        $maleFactory = new MaleFactory();
        $maleFactory->createPerson()->getName();
        $maleFactory->createPerson()->getSex();

        $femaleFactory = new FemaleFactory();
        $femaleFactory->createPerson()->getName();
        $femaleFactory->createPerson()->getSex();

        $robotFactory = new RobotFactory();
        $robotFactory->createPerson()->getName();
        $robotFactory->createPerson()->getSex();
    }
}

$c = new Customer();
$c->buy();