<?php
namespace Felek\App\Classes;
class Communes {
private ?int $communeId;
private ?string $codeInsee;
private ?string $codePostal;
private ?string $commune;
private ?int $departementId;

public function __construct() {} 
public function getCommuneId() : int {
return $this -> communeId;
}
public function setCommuneId(int $communeId) : self {
$this -> communeId = $communeId;
return $this;
}
public function getCodeInsee() : string {
return $this -> codeInsee;
}
public function setCodeInsee(string $codeInsee) : self {
$this -> codeInsee = $codeInsee;
return $this;
}
public function getCodePostal() : string {
return $this -> codePostal;
}
public function setCodePostal(string $codePostal) : self {
$this -> codePostal = $codePostal;
return $this;
}
public function getCommune() : string {
return $this -> commune;
}
public function setCommune(string $commune) : self {
$this -> commune = $commune;
return $this;
}
public function getDepartementId() : int {
return $this -> departementId;
}
public function setDepartementId(int $departementId) : self {
$this -> departementId = $departementId;
return $this;
}
}
