<?php

class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->setSalary($salary); 
    }

    // Encapsulating salary with validation
    public function setSalary($salary) {
        if ($salary > 0) {
            $this->salary = $salary;
        } else {
            echo "Invalid salary value!";
        }
    }

    public function getSalary() {
        return $this->salary;
    }

    public function getEmployeeInfo() {
        return "Employee: {$this->name}, Salary: {$this->getSalary()}";
    }
}


$employee = new Employee("John Doe", 5000);
echo $employee->getEmployeeInfo() . "\n"; 

$employee->setSalary(6000);
echo $employee->getEmployeeInfo() . "\n"; 

$employee->setSalary(-1000); 
?>
