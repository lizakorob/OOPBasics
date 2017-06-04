<?php

include ('Developer.php');
include ('Designer.php');
include ('Coder.php');
include ('DynamicSalary.php');
include ('StaticSalary.php');

class Command
{
    private $commandName;
    private $participants;
    /**
     * @return string
     */
    public function getCommandName(): string
    {
        return $this->commandName;
    }

    /**
     * @param string $commandName
     */
    public function setCommandName(string $commandName)
    {
        $this->commandName = $commandName;
    }

    /**
     * @return array
     */
    public function getParticipants(): array
    {
        return $this->participants;
    }

    /**
     * @param array $participants
     */
    public function setParticipants(array $participants)
    {
        $this->participants = $participants;
    }

    public function __construct(string $commandName, array $participants)
    {
        $this->commandName = $commandName;
        $this->participants = $participants;
    }

    public function getCost()
    {
        $sum = 0;
        foreach ($this->participants as $participant) {
            $sum += $participant->salary->getSalary();
        }
        return $sum;
    }
}
$first = new Designer(
    'Ковалев Иван Иванович',
    'дизайнер',
    new StaticSalary(3000)
);
$second = new Developer(
    'Петров Николай Андреевич',
    'Senior Developer',
    new DynamicSalary(10, 60)
    );
$third = new Developer(
    'Синицин Олег Николаевич',
    'Middle Developer',
    new StaticSalary(1000)
    );
$fourth = new Developer(
    'Маринина Алена Сергеевна',
    'Middle Developer',
    new StaticSalary(1000)
    );
$fifth = new Coder(
    'Короб Елизавета Сергеевна',
    'верстальщик',
    new DynamicSalary(5, 120)
    );
$newCommand = new Command('X', [$first, $second, $third, $fourth, $fifth]);
echo 'Общая сумма, необходимая для выплаты зарплаты Команде ', $newCommand->getCommandName(),
    ': ', $newCommand->getCost();