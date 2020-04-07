<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-07
 * Time: 15:16
 */
class China implements InternetInterface
{
    public $website;

    public function __construct(Website $website)
    {
        $this->website = $website;
    }

    public function access()
    {
        // TODO: Implement access() method.
        print_r('访问' . $this->website->name . '成功');
    }
}