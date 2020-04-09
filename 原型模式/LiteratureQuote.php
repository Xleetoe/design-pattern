<?php
/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-09
 * Time: 23:10
 */

/**
 * 文献引用类，每本书队友对象的文献引用
 */
class LiteratureQuote
{
    public $name;

    public $author;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
}