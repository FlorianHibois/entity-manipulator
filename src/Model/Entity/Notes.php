<?php
namespace Felek\App\Classes;
class Notes {
private ?int $personneId;
private ?int $matiereId;
private ?float $note;

public function __construct() {} 
public function getPersonneId() : int {
return $this -> personneId;
}
public function setPersonneId(int $personneId) : self {
$this -> personneId = $personneId;
return $this;
}
public function getMatiereId() : int {
return $this -> matiereId;
}
public function setMatiereId(int $matiereId) : self {
$this -> matiereId = $matiereId;
return $this;
}
public function getNote() : float {
return $this -> note;
}
public function setNote(float $note) : self {
$this -> note = $note;
return $this;
}
}
