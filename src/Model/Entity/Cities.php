<?php
namespace Felek\App\Classes;
class Cities {
private ?int $id;
private ?string $name;
private ?string $country;
private ?string $continent;

public function __construct() {} 
public function getId() : int {
return $this -> id;
}
public function setId(int $id) : self {
$this -> id = $id;
return $this;
}
public function getName() : string {
return $this -> name;
}
public function setName(string $name) : self {
$this -> name = $name;
return $this;
}
public function getCountry() : string {
return $this -> country;
}
public function setCountry(string $country) : self {
$this -> country = $country;
return $this;
}
public function getContinent() : string {
return $this -> continent;
}
public function setContinent(string $continent) : self {
$this -> continent = $continent;
return $this;
}
}
