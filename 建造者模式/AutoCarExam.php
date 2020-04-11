<?php
include "CarExam.php";

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-11
 * Time: 22:58
 */
class AutoCarExam implements CarExam
{

    public function startCar()
    {
        // TODO: Implement startCar() method.
        print_r('自动挡启动' . PHP_EOL);
    }

    public function stopCar()
    {
        // TODO: Implement stopCar() method.
        print_r('自动挡停车' . PHP_EOL);
    }

    public function drive()
    {
        // TODO: Implement drive() method.
        print_r('自动挡自动变换档位行驶' . PHP_EOL);
    }

    public function astern()
    {
        // TODO: Implement astern() method.
        print_r('自动挡倒车入库' . PHP_EOL);
    }

    public function fixedParking()
    {
        // TODO: Implement fixedParking() method.
        print_r('自动挡侧方停车' . PHP_EOL);
    }

    public function changeLane()
    {
        // TODO: Implement changeLane() method.
        print_r('自动当改变车道' . PHP_EOL);
    }
}