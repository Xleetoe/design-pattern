<?php
require 'CatFactory.php';
require 'DogFactory.php';

/**
 * Created by PhpStorm->
 * User: woniu
 * Date: 2020-04-03
 * Time: 10:31
 */
class Customer
{
    public function buy()
    {
        $toyCat = CatFactory::createAnimal();
        $toyCat->setName('南北');
        $toyCat->setPrice("1000000");
        $toyCat->setAction("我会爬树");

        $toyDog = DogFactory::createAnimal();
        $toyDog->setName("旺财");
        $toyDog->setPrice("2000000");
        $toyDog->setSwim("我是百米游泳冠军");


        print_r($toyCat->description() . PHP_EOL);
        print_r($toyDog->description());
    }
}

$c = new Customer();
$c->buy();




