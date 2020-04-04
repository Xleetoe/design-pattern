<?php
include 'Robot.php';
/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-04
 * Time: 22:04
 */
class RobotFactory implements PersonInterface
{

    public function createPerson()
    {
        // TODO: Implement createPerson() method.
        return new Robot();
    }
}