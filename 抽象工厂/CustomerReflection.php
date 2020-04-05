<?php
include 'PersonCreate.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-04
 * Time: 22:29
 */
class CustomerReflection
{
    public function buy($name)
    {
        $personCreate = new PersonCreate();
        $person = $personCreate->createPerson($name);
        $person->getName();
        $person->getSex();

    }

}

/**
 * 使用反射方式通过传参的方式，避免直接实例化具体的类
 * 可以用于解耦，如果需要修改使用的类的话，直接修改传递参数就可以
 */
$name = null;
$stdin = null;
while ($name == null) {
    $stdin = fopen('php://stdin', 'r');
    fwrite(STDOUT, '请输入想要使用的类名称：');
    $name = trim(fgets($stdin));
}

if ($name != null && $stdin != null) {
    fclose($stdin);
}
$c = new CustomerReflection();
$c->buy($name);