<?php
namespace Felek\App\Classes;
class Pizza {
private ?int $id;
private ?int $idTypePizza;
private ?string $name;

public function __construct() {} 
public function getId() : int {
return $this -> id;
}
public function setId(int $id) : self {
$this -> id = $id;
return $this;
}
public function getIdTypePizza() : int {
return $this -> idTypePizza;
}
public function setIdTypePizza(int $idTypePizza) : self {
$this -> idTypePizza = $idTypePizza;
return $this;
}
public function getName() : string {
return $this -> name;
}
public function setName(string $name) : self {
$this -> name = $name;
return $this;
}
}
