<?php
include 'Decoration.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-07
 * Time: 11:45
 */
class Active extends Decoration
{

    public function show()
    {
        print_r('活泼的');
        parent::show();
    }
}