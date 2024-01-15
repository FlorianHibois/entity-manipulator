<?php
namespace Felek\App\Classes;
class Adresses {
private ?int $adresseId;
private ?string $adresse;
private ?int $communeId;
private ?int $personneId;

public function __construct() {} 
public function getAdresseId() : int {
return $this -> adresseId;
}
public function setAdresseId(int $adresseId) : self {
$this -> adresseId = $adresseId;
return $this;
}
public function getAdresse() : string {
return $this -> adresse;
}
public function setAdresse(string $adresse) : self {
$this -> adresse = $adresse;
return $this;
}
public function getCommuneId() : int {
return $this -> communeId;
}
public function setCommuneId(int $communeId) : self {
$this -> communeId = $communeId;
return $this;
}
public function getPersonneId() : int {
return $this -> personneId;
}
public function setPersonneId(int $personneId) : self {
$this -> personneId = $personneId;
return $this;
}
}
