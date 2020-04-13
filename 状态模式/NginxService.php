<?php

/**
 * Created by PhpStorm.
 * User: woniu
 * Date: 2020-04-13
 * Time: 11:28
 */
class NginxService
{
    public $state;
    public $stateObject;

    /**
     * @return mixed
     */
    public function getStateObject()
    {
        return $this->stateObject;
    }

    /**
     * @param mixed $stateObject
     */
    public function setStateObject($stateObject)
    {
        $this->stateObject = $stateObject;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    public function handle()
    {
        $this->stateObject->handle($this);
    }


}