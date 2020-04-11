<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-11
 * Time: 21:50
 */
class MedicineFundFacade extends Facade
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
        // TODO: Implement buy() method.
        $this->technologyStock->buy();
        $this->medicineStock->buy();
    }

    public function sold()
    {
        // TODO: Implement sold() method.
        $this->technologyStock->sold();
    }
}