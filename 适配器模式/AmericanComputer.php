<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-15
 * Time: 14:29
 */
class AmericanComputer extends ElectronicProduct
{

    public function charge()
    {
        // TODO: Implement charge() method.
        print_r('美国电脑直接使用' . $this->voltage->showVoltage() . '充电' . PHP_EOL);
    }
}
