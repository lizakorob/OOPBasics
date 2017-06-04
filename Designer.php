<?php

class Designer extends Worker
{
    public $position;
    public $salary;

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

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

    public function __construct($name, $position, SalaryInterface $salary)
    {
        parent::__construct($name);
        $this->position = $position;
        $this->salary = $salary;
    }

    public function getSalary(): float
    {
        $this->salary->getSalary();
    }
}