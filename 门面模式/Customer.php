<?php
include 'TechnologyFundFacade.php';
include 'MedicineFundFacade.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-11
 * Time: 21:32
 */
class Customer
{
    public function buy()
    {
        /**
         * 外部类与具体的子系统的交互过程，并不直接交互
         * 而是通过门面间接的访问子系统
         */
        $technologyFundFacade = new TechnologyFundFacade();
        $medicineFundFacade = new MedicineFundFacade();

        $technologyFundFacade->buy();
        $technologyFundFacade->sold();
        print_r(PHP_EOL);

        $medicineFundFacade->buy();
        $medicineFundFacade->sold();

    }

}

$c = new Customer();
$c->buy();
