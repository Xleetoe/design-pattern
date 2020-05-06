<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-05-06
 * Time: 17:44
 */
class BackUp
{
    public $blood;

    public $energy;

    public function __construct($blood, $energy)
    {
        $this->energy = $energy;
        $this->blood = $blood;
    }

    /**
     * @return mixed
     */
    public function getBlood()
    {
        return $this->blood;
    }

    /**
     * @param mixed $blood
     */
    public function setBlood($blood)
    {
        $this->blood = $blood;
    }

    /**
     * @return mixed
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * @param mixed $energy
     */
    public function setEnergy($energy)
    {
        $this->energy = $energy;
    }
}