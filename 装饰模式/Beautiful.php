<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-07
 * Time: 11:45
 */
class Beautiful extends Decoration
{
    public function show()
    {
        print_r('漂亮的');
        parent::show();
    }
}