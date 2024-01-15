<?php
namespace Felek\App\Classes;
class Livres {
private ?int $id;
private ?string $titre;
private ?int $idGenre;
private ?int $idEditeur;
private ?float $prix;

public function __construct() {} 
public function getId() : int {
return $this -> id;
}
public function setId(int $id) : self {
$this -> id = $id;
return $this;
}
public function getTitre() : string {
return $this -> titre;
}
public function setTitre(string $titre) : self {
$this -> titre = $titre;
return $this;
}
public function getIdGenre() : int {
return $this -> idGenre;
}
public function setIdGenre(int $idGenre) : self {
$this -> idGenre = $idGenre;
return $this;
}
public function getIdEditeur() : int {
return $this -> idEditeur;
}
public function setIdEditeur(int $idEditeur) : self {
$this -> idEditeur = $idEditeur;
return $this;
}
public function getPrix() : float {
return $this -> prix;
}
public function setPrix(float $prix) : self {
$this -> prix = $prix;
return $this;
}
}
