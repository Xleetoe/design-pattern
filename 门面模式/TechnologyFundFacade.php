<?php
include 'Facade.php';
include 'TechnologyStock.php';
include 'MedicineStock.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-11
 * Time: 21:36
 */
class TechnologyFundFacade extends Facade
{
    public $technologyStock;
    public $medicineStock;

    public function __construct()
    {
        $this->technologyStock = new TechnologyStock();
        $this->medicineStock = new MedicineStock();
    }

    public function buy()
    {
        $this->technologyStock->buy();
        $this->medicineStock->buy();
    }

    public function sold()
    {
        $this->technologyStock->sold();
        $this->medicineStock->sold();
    }
}