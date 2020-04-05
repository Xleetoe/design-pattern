<?php
include "Male.php";
include 'Female.php';
include "Robot.php";

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-04
 * Time: 22:30
 */
class PersonCreateFactory
{
    public function createPerson($name)
    {
        $reflect = null;
        try {
            $reflect = new ReflectionClass($name);
        } catch (ReflectionException $e) {
            print_r('class:' . $name . '不存在');
            die();
        }

        if (!$reflect->isInstantiable()) {
            print_r('不能实例化对象');
            die();
        }

        return $reflect->newInstance();

    }

}