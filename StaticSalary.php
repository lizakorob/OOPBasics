<?php

class StaticSalary implements SalaryInterface
{
    private $money;

    public function __construct(float $money)
    {
        $this->money = $money;
    }

    public function getSalary()
    {
        return $this->money;
    }
}