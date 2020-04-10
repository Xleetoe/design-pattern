<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-10
 * Time: 15:20
 */
abstract class  Subscription
{
    public $name;

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

    public abstract function update($message);

}