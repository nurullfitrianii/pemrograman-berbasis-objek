<?php
class Employee {
    private $first_name;
    private $last_name;
    private $age;
 
    // Constructor untuk inisialisasi properti
    public function __construct($first_name, $last_name, $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }
 
    // Getter methods
    public function getFirstName()
    {
        return $this->first_name;
    }
 
    public function getLastName()
    {
        return $this->last_name;
    }
 
    public function getAge()
    {
        return $this->age;
    }
}
 
// Instansiasi dan Pemanggilan Method
$objEmployeeOne = new Employee('Bob', 'Smith', 30);
 
echo $objEmployeeOne->getFirstName();
echo $objEmployeeOne->getLastName();
echo $objEmployeeOne->getAge();
 
$objEmployeeTwo = new Employee('John', 'Smith', 34);
 
echo $objEmployeeTwo->getFirstName();
echo $objEmployeeTwo->getLastName();
echo $objEmployeeTwo->getAge();
?>