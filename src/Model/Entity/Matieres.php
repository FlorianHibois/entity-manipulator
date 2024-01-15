<?php
namespace Felek\App\Classes;
class Matieres {
private ?int $matiereId;
private ?string $matiere;

public function __construct() {} 
public function getMatiereId() : int {
return $this -> matiereId;
}
public function setMatiereId(int $matiereId) : self {
$this -> matiereId = $matiereId;
return $this;
}
public function getMatiere() : string {
return $this -> matiere;
}
public function setMatiere(string $matiere) : self {
$this -> matiere = $matiere;
return $this;
}
}
