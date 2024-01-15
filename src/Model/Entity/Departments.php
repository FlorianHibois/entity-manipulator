<?php
namespace Felek\App\Classes;
class Departments {
private ?int $departmentId;
private ?string $departmentName;
private ?int $locationId;

public function __construct() {} 
public function getDepartmentId() : int {
return $this -> departmentId;
}
public function setDepartmentId(int $departmentId) : self {
$this -> departmentId = $departmentId;
return $this;
}
public function getDepartmentName() : string {
return $this -> departmentName;
}
public function setDepartmentName(string $departmentName) : self {
$this -> departmentName = $departmentName;
return $this;
}
public function getLocationId() : int {
return $this -> locationId;
}
public function setLocationId(int $locationId) : self {
$this -> locationId = $locationId;
return $this;
}
}
