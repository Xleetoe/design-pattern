<?php
include 'Math.php';
include 'LiteratureQuote.php';
include 'Algorithm.php';

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-09
 * Time: 22:45
 */
class Customer
{
    public function buy()
    {
        //先生成一本数学书
        $mathBook = new Math();
        $mathBook->setAuthor('数学老师');
        $mathBook->setCategory('1,2,3,4');
        $mathBook->setContent('1+1=2');

        $quote = new LiteratureQuote();
        $quote->setAuthor('数学老师');
        $quote->setName('高等数学');

        $mathBook->setQuote($quote);

        //使用clone克隆出一本数学书
        $copyMathBook = clone $mathBook;
        $mathBook->quote->setAuthor('AAA');
        print_r($mathBook);
        print_r(PHP_EOL);
        print_r($copyMathBook);


        $algorithmBook = new Algorithm();
        $algorithmBook->setAuthor('算法老师');
        $algorithmBook->setCategory('冒泡，快排');
        $algorithmBook->setContent('排序算法');

        $algorithmQuote = new LiteratureQuote();
        $algorithmQuote->setAuthor('算法老师');
        $algorithmQuote->setName('算法');
        $algorithmBook->setQuote($algorithmQuote);

        $copyAlgorithmBook = clone $algorithmBook;
        $copyAlgorithmBook->setAuthor('AAA');

        print_r($algorithmBook);
        print_r(PHP_EOL);
        print_r($copyAlgorithmBook);

    }
}

$c = new Customer();
$c->buy();