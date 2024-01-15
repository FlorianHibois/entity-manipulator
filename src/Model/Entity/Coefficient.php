<?php
namespace Felek\App\Classes;
class Coefficient {
private ?int $id;
private ?float $rate;

public function __construct() {} 
public function getId() : int {
return $this -> id;
}
public function setId(int $id) : self {
$this -> id = $id;
return $this;
}
public function getRate() : float {
return $this -> rate;
}
public function setRate(float $rate) : self {
$this -> rate = $rate;
return $this;
}
}
