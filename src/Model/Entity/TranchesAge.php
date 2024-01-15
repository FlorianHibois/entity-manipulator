<?php
namespace Felek\App\Classes;
class TranchesAge {
private ?int $min;
private ?int $max;
private ?string $tranche;

public function __construct() {} 
public function getMin() : int {
return $this -> min;
}
public function setMin(int $min) : self {
$this -> min = $min;
return $this;
}
public function getMax() : int {
return $this -> max;
}
public function setMax(int $max) : self {
$this -> max = $max;
return $this;
}
public function getTranche() : string {
return $this -> tranche;
}
public function setTranche(string $tranche) : self {
$this -> tranche = $tranche;
return $this;
}
}
