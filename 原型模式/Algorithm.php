<?php
/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-09
 * Time: 23:19
 */
class Algorithm extends Book
{
    public function __clone()
    {
        /**
         * quote字段是引用类型，在复制的时候，对引用类型字段做特殊处理，重新生成一个对象赋值给克隆出来对象的quote属性
         * 这种情况,克隆对象和原对象的quote属性在内存中的地址就是不一样的了
         */
        $this->quote = new LiteratureQuote();
    }
}