<?php
include 'InternetInterface.php';
include 'China.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-07
 * Time: 15:16
 */
class Hongkong implements InternetInterface
{
    public $realAddress;

    public function __construct(Website $website)
    {
        $this->realAddress = new China($website);
    }

    public function access()
    {
        // TODO: Implement access() method.
        $this->realAddress->access();
    }
}