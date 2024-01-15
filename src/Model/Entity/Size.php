<?php
namespace Felek\App\Classes;
class Size {
private ?int $id;
private ?int $idCoefficient;
private ?string $description;
private ?bool $active;

public function __construct() {} 
public function getId() : int {
return $this -> id;
}
public function setId(int $id) : self {
$this -> id = $id;
return $this;
}
public function getIdCoefficient() : int {
return $this -> idCoefficient;
}
public function setIdCoefficient(int $idCoefficient) : self {
$this -> idCoefficient = $idCoefficient;
return $this;
}
public function getDescription() : string {
return $this -> description;
}
public function setDescription(string $description) : self {
$this -> description = $description;
return $this;
}
public function getActive() : bool {
return $this -> active;
}
public function setActive(bool $active) : self {
$this -> active = $active;
return $this;
}
}
