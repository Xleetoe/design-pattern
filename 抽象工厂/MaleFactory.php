<?php
include 'PersonInterface.php';
include "Male.php";
/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-04
 * Time: 21:59
 */
class MaleFactory implements PersonInterface
{

    public function createPerson()
    {
        // TODO: Implement createPerson() method.
        return new Male();
    }
}