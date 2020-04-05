<?php
include 'MaleFactory.php';

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
        try {
            $reflect = new ReflectionClass($name);
        } catch (ReflectionException $e) {
            print_r('class:' . $name . '不存在');
            die();
        }

        if (!$reflect->isInstantiable()) {
            print_r("类不可以被实例化");
            die();
        }

        $factory = $reflect->newInstance();
        $factory->createPerson()->getName();
        $factory->createPerson()->getSex();
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
    fwrite(STDOUT, '请输入想要使用的工厂名称：');
    $name = trim(fgets($stdin));
}

if ($name != null && $stdin != null) {
    fclose($stdin);
}
$c = new CustomerReflection();
$c->buy($name);