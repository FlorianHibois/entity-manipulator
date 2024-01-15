<?php
namespace Felek\App\Classes;
class Dependents {
private ?int $dependentId;
private ?string $firstName;
private ?string $lastName;
private ?string $relationship;
private ?int $employeeId;

public function __construct() {} 
public function getDependentId() : int {
return $this -> dependentId;
}
public function setDependentId(int $dependentId) : self {
$this -> dependentId = $dependentId;
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
public function getRelationship() : string {
return $this -> relationship;
}
public function setRelationship(string $relationship) : self {
$this -> relationship = $relationship;
return $this;
}
public function getEmployeeId() : int {
return $this -> employeeId;
}
public function setEmployeeId(int $employeeId) : self {
$this -> employeeId = $employeeId;
return $this;
}
}
