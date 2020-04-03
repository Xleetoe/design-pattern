<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-03
 * Time: 10:29
 */

/**
 * Class Toy
 * 商品抽象出来的基类，具有子类的一些公共属性和方法
 */
class Animal
{
    public $name;
    public $price;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function description()
    {
        return 'my nam is ' . $this->getName() . '  ,我售卖' . $this->getPrice() . ' 元。';
    }


}