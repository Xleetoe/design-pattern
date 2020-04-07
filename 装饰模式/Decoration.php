<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-07
 * Time: 11:37
 */

/**
 * Class Decoration
 * 装饰的基类
 */
class Decoration implements Person
{
    public $component;

    public function setComponent(Person $person)
    {
        $this->component = $person;
    }

    public function show()
    {
        // TODO: Implement show() method.
        if ($this->component != null) {
            $this->component->show();
        }
    }
}