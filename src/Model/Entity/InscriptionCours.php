<?php
namespace Felek\App\Classes;
class InscriptionCours {
private ?int $id;
private ?int $idCours;
private ?int $idPersonne;
private ?DateTime $inscriptionDate;
private ?DateTime $resiliationDate;

public function __construct() {} 
public function getId() : int {
return $this -> id;
}
public function setId(int $id) : self {
$this -> id = $id;
return $this;
}
public function getIdCours() : int {
return $this -> idCours;
}
public function setIdCours(int $idCours) : self {
$this -> idCours = $idCours;
return $this;
}
public function getIdPersonne() : int {
return $this -> idPersonne;
}
public function setIdPersonne(int $idPersonne) : self {
$this -> idPersonne = $idPersonne;
return $this;
}
public function getInscriptionDate() : DateTime {
return $this -> inscriptionDate;
}
public function setInscriptionDate(DateTime $inscriptionDate) : self {
$this -> inscriptionDate = $inscriptionDate;
return $this;
}
public function getResiliationDate() : DateTime {
return $this -> resiliationDate;
}
public function setResiliationDate(DateTime $resiliationDate) : self {
$this -> resiliationDate = $resiliationDate;
return $this;
}
}
