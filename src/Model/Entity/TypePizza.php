<?php
namespace Felek\App\Classes;
class TypePizza {
private ?int $id;
private ?bool $creamBased;
private ?bool $tomatoBased;
private ?bool $active;

public function __construct() {} 
public function getId() : int {
return $this -> id;
}
public function setId(int $id) : self {
$this -> id = $id;
return $this;
}
public function getCreamBased() : bool {
return $this -> creamBased;
}
public function setCreamBased(bool $creamBased) : self {
$this -> creamBased = $creamBased;
return $this;
}
public function getTomatoBased() : bool {
return $this -> tomatoBased;
}
public function setTomatoBased(bool $tomatoBased) : self {
$this -> tomatoBased = $tomatoBased;
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
