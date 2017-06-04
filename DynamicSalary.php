<?php

include ('SalaryInterface.php');

class DynamicSalary implements SalaryInterface
{
    private $money;
    private $hours;
    private $salary;

    public function __construct($money, $hours)
    {
        $this->money = $money;
        $this->hours = $hours;
        $this->salary = $money * $hours;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }
}