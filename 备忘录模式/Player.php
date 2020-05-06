<?php
include 'BackUp.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-05-06
 * Time: 17:43
 */
class Player
{
    public $energy;

    public $blood;

    /**
     * @return mixed
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * @param mixed $energy
     */
    public function setEnergy($energy)
    {
        $this->energy = $energy;
    }

    /**
     * @return mixed
     */
    public function getBlood()
    {
        return $this->blood;
    }

    /**
     * @param mixed $blood
     */
    public function setBlood($blood)
    {
        $this->blood = $blood;
    }

    public function fighting()
    {
        $this->energy = '已空';
        $this->blood = '已空';
    }


    public function show()
    {
        print_r('血条' . $this->blood);
        print_r(PHP_EOL);
        print_r('能量' . $this->energy);
    }

    //备份
    public function backUp()
    {
        return new BackUp($this->blood, $this->energy);
    }

    //恢复备份
    public function recover(BackUp $b)
    {
        $this->blood = $b->blood;
        $this->energy = $b->energy;

    }
}