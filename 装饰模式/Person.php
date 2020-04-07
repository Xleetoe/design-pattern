<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-07
 * Time: 11:33
 */


/**
 * Interface Person
 * 很多设计模式中，接口和抽象类都是可以互相替换的，本设计模式中也可以将person声明为抽象类，show为抽象方法
 */
interface Person
{

    public function show();
}