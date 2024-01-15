<?php
namespace Felek\App\Classes;
class Regions {
private ?int $regionId;
private ?string $regionName;

public function __construct() {} 
public function getRegionId() : int {
return $this -> regionId;
}
public function setRegionId(int $regionId) : self {
$this -> regionId = $regionId;
return $this;
}
public function getRegionName() : string {
return $this -> regionName;
}
public function setRegionName(string $regionName) : self {
$this -> regionName = $regionName;
return $this;
}
}
