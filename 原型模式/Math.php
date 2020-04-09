<?php
include 'Book.php';
/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-09
 * Time: 22:46
 */
class Math extends Book
{
    /**
     * 重写clone方法，可以对克隆操作做一些修改
     */
    public function __clone()
    {
        // TODO: Implement __clone() method.
        /**
         * category,content,author是值类型
         * 所以在复制的时候，其实是直接把值复制了一遍，在内存中的地址是不一样的
         */
        /*$this->category = '这是数学目录';
        $this->content = '1+1=2';
        $this->author = '人民出版社';*/
    }
}