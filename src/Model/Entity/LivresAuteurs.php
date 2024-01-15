<?php
namespace Felek\App\Classes;
class LivresAuteurs {
private ?int $idLivre;
private ?int $idAuteur;

public function __construct() {} 
public function getIdLivre() : int {
return $this -> idLivre;
}
public function setIdLivre(int $idLivre) : self {
$this -> idLivre = $idLivre;
return $this;
}
public function getIdAuteur() : int {
return $this -> idAuteur;
}
public function setIdAuteur(int $idAuteur) : self {
$this -> idAuteur = $idAuteur;
return $this;
}
}
