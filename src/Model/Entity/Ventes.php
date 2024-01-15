<?php
namespace Felek\App\Classes;
class Ventes {
private ?int $venteId;
private ?DateTime $dateVente;
private ?float $montant;
private ?int $departementId;
private ?int $vendeurId;

public function __construct() {} 
public function getVenteId() : int {
return $this -> venteId;
}
public function setVenteId(int $venteId) : self {
$this -> venteId = $venteId;
return $this;
}
public function getDateVente() : DateTime {
return $this -> dateVente;
}
public function setDateVente(DateTime $dateVente) : self {
$this -> dateVente = $dateVente;
return $this;
}
public function getMontant() : float {
return $this -> montant;
}
public function setMontant(float $montant) : self {
$this -> montant = $montant;
return $this;
}
public function getDepartementId() : int {
return $this -> departementId;
}
public function setDepartementId(int $departementId) : self {
$this -> departementId = $departementId;
return $this;
}
public function getVendeurId() : int {
return $this -> vendeurId;
}
public function setVendeurId(int $vendeurId) : self {
$this -> vendeurId = $vendeurId;
return $this;
}
}
