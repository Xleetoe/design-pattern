<?php
/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-03
 * Time: 10:31
 */

/**
 * Class Dog
 * 实现了基类，拥有基类的public方法以及属性，同时有自己的特性
 */
class Dog extends Animal
{

    public $swim;

    /**
     * @return mixed
     */
    public function getSwim()
    {
        return $this->swim;
    }

    /**
     * @param mixed $swim
     */
    public function setSwim($swim)
    {
        $this->swim = $swim;
    }

    public function description()
    {
        return parent::description() . $this->getSwim();
    }
}