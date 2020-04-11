<?php
include 'ManualCarExam.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-11
 * Time: 22:50
 */
class BmwDirect extends Direct
{

    public function exam()
    {
        // TODO: Implement exam() method.
        $manualCarExam = new ManualCarExam();
        $manualCarExam->startCar();
        $manualCarExam->drive();
        $manualCarExam->changeLane();
        $manualCarExam->astern();
        $manualCarExam->fixedParking();
        $manualCarExam->stopCar();
    }
}