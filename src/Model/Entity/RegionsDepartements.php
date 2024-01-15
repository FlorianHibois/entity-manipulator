<?php
namespace Felek\App\Classes;
class RegionsDepartements {
private ?bool $regionId;
private ?int $departementId;

public function __construct() {} 
public function getRegionId() : bool {
return $this -> regionId;
}
public function setRegionId(bool $regionId) : self {
$this -> regionId = $regionId;
return $this;
}
public function getDepartementId() : int {
return $this -> departementId;
}
public function setDepartementId(int $departementId) : self {
$this -> departementId = $departementId;
return $this;
}
}
