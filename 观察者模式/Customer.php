<?php
include 'NovelPublisher.php';
include 'MusicPublisher.php';
include 'Student.php';
include 'Worker.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-10
 * Time: 15:19
 */
class Customer
{

    public function listen()
    {
        //实例化两个电台(发布者)
        $novelPublisher = new NovelPublisher();
        $musicPublisher = new MusicPublisher();

        $studentA = new Student();
        $studentA->setName('小明同学');
        $workerB = new Worker();
        $workerB->setName('老李同志');

        /**
         * 将2个订阅者分别加入到两个订阅者里
         */
        $novelPublisher->addListener($studentA);
        $novelPublisher->addListener($workerB);

        $musicPublisher->addListener($studentA);
        $musicPublisher->addListener($workerB);

        /**
         * 两个订阅者，向自己的发布者发送一条消息
         */
        $novelPublisher->notify();
        print_r(PHP_EOL);
        $musicPublisher->notify();

        print_r(PHP_EOL);
        $musicPublisher->removeListener($studentA);
        $musicPublisher->notify();

    }
}

$c = new Customer();
$c->listen();