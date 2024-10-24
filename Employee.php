<?php
class Employee {
    public $firstName;
    public $lastName;
    public $salary;

    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getSalary() {
        return $this->salary;
    }
}
?>
