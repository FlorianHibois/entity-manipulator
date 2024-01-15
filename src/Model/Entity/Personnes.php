<?php
namespace Felek\App\Classes;
class Personnes {
private ?int $personneId;
private ?string $nom;
private ?string $prenom;
private ?DateTime $dateNaissance;
private ?int $idBoss;

public function __construct() {} 
public function getPersonneId() : int {
return $this -> personneId;
}
public function setPersonneId(int $personneId) : self {
$this -> personneId = $personneId;
return $this;
}
public function getNom() : string {
return $this -> nom;
}
public function setNom(string $nom) : self {
$this -> nom = $nom;
return $this;
}
public function getPrenom() : string {
return $this -> prenom;
}
public function setPrenom(string $prenom) : self {
$this -> prenom = $prenom;
return $this;
}
public function getDateNaissance() : DateTime {
return $this -> dateNaissance;
}
public function setDateNaissance(DateTime $dateNaissance) : self {
$this -> dateNaissance = $dateNaissance;
return $this;
}
public function getIdBoss() : int {
return $this -> idBoss;
}
public function setIdBoss(int $idBoss) : self {
$this -> idBoss = $idBoss;
return $this;
}
}
