<?php
include 'Direct.php';
include 'AutoCarExam.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-11
 * Time: 22:50
 */
class BenzDirect extends Direct
{

    public function exam()
    {
        // TODO: Implement exam() method.
        $autoCarExam = new AutoCarExam();
        $autoCarExam->startCar();
        $autoCarExam->drive();
        $autoCarExam->changeLane();
        $autoCarExam->astern();
        $autoCarExam->fixedParking();
        $autoCarExam->stopCar();
    }
}