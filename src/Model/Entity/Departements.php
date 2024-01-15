<?php
namespace Felek\App\Classes;
class Departements {
private ?int $departementId;
private ?string $codeDepartement;
private ?string $nomDepartement;

public function __construct() {} 
public function getDepartementId() : int {
return $this -> departementId;
}
public function setDepartementId(int $departementId) : self {
$this -> departementId = $departementId;
return $this;
}
public function getCodeDepartement() : string {
return $this -> codeDepartement;
}
public function setCodeDepartement(string $codeDepartement) : self {
$this -> codeDepartement = $codeDepartement;
return $this;
}
public function getNomDepartement() : string {
return $this -> nomDepartement;
}
public function setNomDepartement(string $nomDepartement) : self {
$this -> nomDepartement = $nomDepartement;
return $this;
}
}
