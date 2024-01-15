<?php
namespace Felek\App\Classes;
class PizzaIngredients {
private ?int $id;
private ?int $idPizza;
private ?int $idIngredients;
private ?int $quantity;

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
public function getIdIngredients() : int {
return $this -> idIngredients;
}
public function setIdIngredients(int $idIngredients) : self {
$this -> idIngredients = $idIngredients;
return $this;
}
public function getQuantity() : int {
return $this -> quantity;
}
public function setQuantity(int $quantity) : self {
$this -> quantity = $quantity;
return $this;
}
}
