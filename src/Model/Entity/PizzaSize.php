<?php
namespace Felek\App\Classes;
class PizzaSize {
private ?int $id;
private ?int $idPizza;
private ?int $idSize;

public function __construct() {} 
public function getId() : int {
return $this -> id;
}
public function setId(int $id) : self {
$this -> id = $id;
return $this;
}
public function getIdPizza() : int {
return $this -> idPizza;
}
public function setIdPizza(int $idPizza) : self {
$this -> idPizza = $idPizza;
return $this;
}
public function getIdSize() : int {
return $this -> idSize;
}
public function setIdSize(int $idSize) : self {
$this -> idSize = $idSize;
return $this;
}
}
