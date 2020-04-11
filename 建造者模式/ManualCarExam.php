<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-11
 * Time: 22:58
 */
class ManualCarExam implements CarExam
{

    public function startCar()
    {
        // TODO: Implement startCar() method.
        print_r('手动挡启动' . PHP_EOL);
    }

    public function stopCar()
    {
        // TODO: Implement stopCar() method.
        print_r('手动挡停车' . PHP_EOL);
    }

    public function drive()
    {
        // TODO: Implement drive() method.
        print_r('手动挡手动从1档换5档驾驶' . PHP_EOL);
    }

    public function astern()
    {
        // TODO: Implement astern() method.
        print_r('手动挡倒车' . PHP_EOL);
    }

    public function fixedParking()
    {
        // TODO: Implement fixedParking() method.
        print_r('手动挡侧边停车' . PHP_EOL);
    }

    public function changeLane()
    {
        // TODO: Implement changeLane() method.
        print_r('手动挡换车道' . PHP_EOL);
    }
}