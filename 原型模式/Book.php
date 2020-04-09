<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-09
 * Time: 22:46
 */

/**
 * Class Book
 * Book的category，author，content字段都是值类型，克隆的时候会直接复制一份一样的在内存中，在内存中的地址和原地址是不一样的
 * quote字段是引用类型，在复制的时候，只会将quote的地址复制一份到新生成的克隆对象中，在内存中两个对象的quote字段内存地址是一样的
 * 可以通过修改__clone方法实现深复制
 */
abstract class Book
{

    //书的目录
    public $category;

    //书的作者
    public $author;

    //书的内容
    public $content;

    //文献引用
    public $quote;

    /**
     * @return mixed
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @param mixed $quote
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;
    }
    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

}