<?php

abstract class Worker
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    abstract function getSalary();
}



