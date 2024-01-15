<?php
namespace Felek\App\Classes;
class Locations {
private ?int $locationId;
private ?string $streetAddress;
private ?string $postalCode;
private ?string $city;
private ?string $stateProvince;
private ?string $countryId;

public function __construct() {} 
public function getLocationId() : int {
return $this -> locationId;
}
public function setLocationId(int $locationId) : self {
$this -> locationId = $locationId;
return $this;
}
public function getStreetAddress() : string {
return $this -> streetAddress;
}
public function setStreetAddress(string $streetAddress) : self {
$this -> streetAddress = $streetAddress;
return $this;
}
public function getPostalCode() : string {
return $this -> postalCode;
}
public function setPostalCode(string $postalCode) : self {
$this -> postalCode = $postalCode;
return $this;
}
public function getCity() : string {
return $this -> city;
}
public function setCity(string $city) : self {
$this -> city = $city;
return $this;
}
public function getStateProvince() : string {
return $this -> stateProvince;
}
public function setStateProvince(string $stateProvince) : self {
$this -> stateProvince = $stateProvince;
return $this;
}
public function getCountryId() : string {
return $this -> countryId;
}
public function setCountryId(string $countryId) : self {
$this -> countryId = $countryId;
return $this;
}
}
