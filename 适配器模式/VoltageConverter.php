<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-15
 * Time: 14:26
 */
class VoltageConverter
{
    public $chinaPhone;

    /**
     * @return mixed
     */
    public function getChinaPhone()
    {
        return $this->chinaPhone;
    }

    /**
     * @param mixed $chinaPhone
     */
    public function setChinaPhone($chinaPhone)
    {
        $this->chinaPhone = $chinaPhone;
    }

    public function charge()
    {
        $this->chinaPhone->convertCharge();
    }
}