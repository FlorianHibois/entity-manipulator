<?php
namespace Felek\App\Classes;
class InscriptionFormation {
private ?int $personneId;
private ?int $formationId;

public function __construct() {} 
public function getPersonneId() : int {
return $this -> personneId;
}
public function setPersonneId(int $personneId) : self {
$this -> personneId = $personneId;
return $this;
}
public function getFormationId() : int {
return $this -> formationId;
}
public function setFormationId(int $formationId) : self {
$this -> formationId = $formationId;
return $this;
}
}
