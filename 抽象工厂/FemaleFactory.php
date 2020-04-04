<?php
include 'Female.php';
/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-04
 * Time: 22:01
 */
class FemaleFactory implements PersonInterface
{

    public function createPerson()
    {
        // TODO: Implement createPerson() method.
        return new Female();
    }
}