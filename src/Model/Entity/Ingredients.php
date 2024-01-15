<?php
namespace Felek\App\Classes;
class Ingredients {
private ?int $id;
private ?string $nom;
private ?float $unitPrice;

public function __construct() {} 
public function getId() : int {
return $this -> id;
}
public function setId(int $id) : self {
$this -> id = $id;
return $this;
}
public function getNom() : string {
return $this -> nom;
}
public function setNom(string $nom) : self {
$this -> nom = $nom;
return $this;
}
public function getUnitPrice() : float {
return $this -> unitPrice;
}
public function setUnitPrice(float $unitPrice) : self {
$this -> unitPrice = $unitPrice;
return $this;
}
}
