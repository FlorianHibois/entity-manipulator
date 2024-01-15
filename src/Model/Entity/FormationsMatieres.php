<?php
namespace Felek\App\Classes;
class FormationsMatieres {
private ?int $formationId;
private ?int $matiereId;
private ?bool $coefficient;

public function __construct() {} 
public function getFormationId() : int {
return $this -> formationId;
}
public function setFormationId(int $formationId) : self {
$this -> formationId = $formationId;
return $this;
}
public function getMatiereId() : int {
return $this -> matiereId;
}
public function setMatiereId(int $matiereId) : self {
$this -> matiereId = $matiereId;
return $this;
}
public function getCoefficient() : bool {
return $this -> coefficient;
}
public function setCoefficient(bool $coefficient) : self {
$this -> coefficient = $coefficient;
return $this;
}
}
