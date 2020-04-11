<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-11
 * Time: 22:51
 */

/**
 * Interface CarExam
 * 抽象的驾校考试
 */
interface CarExam
{
    /**
     * @return mixed
     * 启动汽车
     */
    public function startCar();

    /**
     * @return mixed
     * 停车
     */
    public function stopCar();

    /**
     * @return mixed
     * 驾驶汽车
     */
    public function drive();

    /**
     * @return mixed
     * 倒车
     */
    public function astern();

    /**
     * @return mixed
     * 定点停车
     */
    public function fixedParking();

    /**
     * @return mixed
     * 变更车道
     */
    public function changeLane();


}