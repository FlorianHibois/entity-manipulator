<?php
namespace Felek\App\Classes;
class Employees {
private ?int $employeeId;
private ?string $firstName;
private ?string $lastName;
private ?string $email;
private ?string $phoneNumber;
private ?DateTime $hireDate;
private ?int $jobId;
private ?float $salary;
private ?int $managerId;
private ?int $departmentId;

public function __construct() {} 
public function getEmployeeId() : int {
return $this -> employeeId;
}
public function setEmployeeId(int $employeeId) : self {
$this -> employeeId = $employeeId;
return $this;
}
public function getFirstName() : string {
return $this -> firstName;
}
public function setFirstName(string $firstName) : self {
$this -> firstName = $firstName;
return $this;
}
public function getLastName() : string {
return $this -> lastName;
}
public function setLastName(string $lastName) : self {
$this -> lastName = $lastName;
return $this;
}
public function getEmail() : string {
return $this -> email;
}
public function setEmail(string $email) : self {
$this -> email = $email;
return $this;
}
public function getPhoneNumber() : string {
return $this -> phoneNumber;
}
public function setPhoneNumber(string $phoneNumber) : self {
$this -> phoneNumber = $phoneNumber;
return $this;
}
public function getHireDate() : DateTime {
return $this -> hireDate;
}
public function setHireDate(DateTime $hireDate) : self {
$this -> hireDate = $hireDate;
return $this;
}
public function getJobId() : int {
return $this -> jobId;
}
public function setJobId(int $jobId) : self {
$this -> jobId = $jobId;
return $this;
}
public function getSalary() : float {
return $this -> salary;
}
public function setSalary(float $salary) : self {
$this -> salary = $salary;
return $this;
}
public function getManagerId() : int {
return $this -> managerId;
}
public function setManagerId(int $managerId) : self {
$this -> managerId = $managerId;
return $this;
}
public function getDepartmentId() : int {
return $this -> departmentId;
}
public function setDepartmentId(int $departmentId) : self {
$this -> departmentId = $departmentId;
return $this;
}
}
