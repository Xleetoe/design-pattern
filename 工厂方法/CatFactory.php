<?php
include "Cat.php";
include 'FactoryInterface.php';
/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-03
 * Time: 14:46
 */
class CatFactory implements FactoryInterface
{

    public static function createAnimal()
    {
        // TODO: Implement createToy() method.
        return new Cat();
    }
}