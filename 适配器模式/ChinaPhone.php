<?php
include 'ElectronicProduct.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-15
 * Time: 14:30
 */
class ChinaPhone extends ElectronicProduct
{

    public function charge()
    {
        print_r('中国手机不能直接使用' . $this->voltage->showVoltage() . '充电' . PHP_EOL);
        // TODO: Implement charge() method.
    }

    public function convertCharge()
    {
        print_r('中国手机使用转接头可以使用' . $this->voltage->showVoltage() . '充电' . PHP_EOL);
    }
}