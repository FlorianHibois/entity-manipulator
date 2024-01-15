<?php
namespace Felek\App\Classes;
class Countries {
private ?string $countryId;
private ?string $countryName;
private ?int $regionId;

public function __construct() {} 
public function getCountryId() : string {
return $this -> countryId;
}
public function setCountryId(string $countryId) : self {
$this -> countryId = $countryId;
return $this;
}
public function getCountryName() : string {
return $this -> countryName;
}
public function setCountryName(string $countryName) : self {
$this -> countryName = $countryName;
return $this;
}
public function getRegionId() : int {
return $this -> regionId;
}
public function setRegionId(int $regionId) : self {
$this -> regionId = $regionId;
return $this;
}
}
