<?php
namespace Felek\App\Classes;
class Commandes {
private ?int $id;
private ?DateTime $dateCommande;
private ?float $montant;

public function __construct() {} 
public function getId() : int {
return $this -> id;
}
public function setId(int $id) : self {
$this -> id = $id;
return $this;
}
public function getDateCommande() : DateTime {
return $this -> dateCommande;
}
public function setDateCommande(DateTime $dateCommande) : self {
$this -> dateCommande = $dateCommande;
return $this;
}
public function getMontant() : float {
return $this -> montant;
}
public function setMontant(float $montant) : self {
$this -> montant = $montant;
return $this;
}
}
