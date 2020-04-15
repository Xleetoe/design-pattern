<?php
include 'Voltage.php';
include 'ChinaPhone.php';
include 'AmericanComputer.php';
include 'VoltageConverter.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-15
 * Time: 14:33
 */
class Customer
{
    public function charge()
    {
        $voltage = new Voltage();
        $phone = new ChinaPhone();
        $computer = new AmericanComputer();
        $voltageConverter = new VoltageConverter();

        $phone->setVoltage($voltage);
        $computer->setVoltage($voltage);
        $voltageConverter->setChinaPhone($phone);

        $phone->charge();
        $computer->charge();
        $voltageConverter->charge();

    }
}

$c = new Customer();
$c->charge();