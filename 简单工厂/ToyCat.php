<?php
include "Toy.php";

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-03
 * Time: 10:31
 */

/**
 * Class ToyCat
 * 实现了基类，拥有基类的public方法以及属性，同时有自己的特性
 */
class ToyCat extends Toy
{

    public $action;

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    public function description()
    {
        return parent::description() . $this->getAction();
    }


}