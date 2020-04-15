<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-15
 * Time: 14:26
 */
abstract class ElectronicProduct
{
    public $name;
    public $voltage;

    /**
     * @return mixed
     */
    public function getVoltage()
    {
        return $this->voltage;
    }

    /**
     * @param mixed $voltage
     */
    public function setVoltage($voltage)
    {
        $this->voltage = $voltage;
    }

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

    public abstract function charge();
}