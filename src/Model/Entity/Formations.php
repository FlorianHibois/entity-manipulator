<?php
namespace Felek\App\Classes;
class Formations {
private ?int $formationId;
private ?string $formationLibelle;
private ?bool $formationNiveau;

public function __construct() {} 
public function getFormationId() : int {
return $this -> formationId;
}
public function setFormationId(int $formationId) : self {
$this -> formationId = $formationId;
return $this;
}
public function getFormationLibelle() : string {
return $this -> formationLibelle;
}
public function setFormationLibelle(string $formationLibelle) : self {
$this -> formationLibelle = $formationLibelle;
return $this;
}
public function getFormationNiveau() : bool {
return $this -> formationNiveau;
}
public function setFormationNiveau(bool $formationNiveau) : self {
$this -> formationNiveau = $formationNiveau;
return $this;
}
}
