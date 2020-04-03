<?php
include "ToyCat.php";
include "ToyDog.php";

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-03
 * Time: 10:28
 */

/**
 * Class Factory
 * 工厂类，根据不同的参数，去实例化不同的商品子类
 */
class Factory
{
    public function getToy($name)
    {
        switch ($name) {
            case 'cat':
                return new ToyCat();
                break;
            case 'dog':
                return new ToyDog();
                break;
            default:
                return null;
                break;
        }
    }
}