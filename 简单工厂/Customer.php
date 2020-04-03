<?php
include 'Factory.php';

/**
 * Created by PhpStorm->
 * User: woniu
 * Date: 2020-04-03
 * Time: 10:31
 */
class Customer
{
    public function buy($name)
    {
        //工厂根据不同的参数，实例话不同的具体商品对象，避免了在当前类里去实例话不同的具体商品
        $factory = new Factory();
        return $factory->getToy($name);
    }
}


$c = new Customer();
$toyCat = $c->buy('cat');
$toyDog = $c->buy('dog');


if ($toyCat != null) {
    $toyCat->setName('南北');
    $toyCat->setPrice("1000000");
    $toyCat->setAction("我会爬树");
}

if ($toyDog != null) {
    $toyDog->setName("旺财");
    $toyDog->setPrice("2000000");
    $toyDog->setSwim("我是百米游泳冠军");
}

print_r($toyCat->description() . PHP_EOL);
print_r($toyDog->description());



