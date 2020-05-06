<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-05-06
 * Time: 11:19
 */
class DB
{
    private static $instance;

    public $host;
    public $port;

    //外部类不能通过new方式创建db对象
    private function __construct()
    {

    }

    //外部类不能通过clone方式clone对象
    private function __clone()
    {

    }

    //提供一个公开方法，用来提供Db实例的访问
    public static function getInstance()
    {
        if (!self::$instance || !self::$instance instanceof DB) {
            self::$instance = new DB();
            self::$instance->host = '127.0.0.1';
            self::$instance->port = '3306';
        }

        return self::$instance;

    }

    public function test()
    {
        print_r('请求连接数据库' . self::$instance->host . '端口：' . self::$instance->port);
    }
}