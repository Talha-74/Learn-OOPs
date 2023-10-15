<?php
// Calculate The Employee Salary

class Employee
{
    public $id;
    public $name;
    public $workingHoursPerDay = 8;
    public $hourlyRate = 15;
    public $totalLeaveTaken;
    public $workingDays;

    function getSalaryAmount($totalDays): int
    {
        $this->workingDays = $totalDays - $this->totalLeaveTaken;
        $salary = $this->workingDays * $this->hourlyRate;
        return $salary;
    }

}

$emp1 = new Employee();
$emp1->id = 101;
$emp1->name = 'John Smith';
$emp1->totalLeaveTaken = 5;
$salary = $emp1->getSalaryAmount(22);

echo "".$emp1->name ." has worked for ".$emp1->workingDays. " and taken total leaves ".$emp1->totalLeaveTaken; 

echo " ".$emp1->name ." Salary is ".$salary;
