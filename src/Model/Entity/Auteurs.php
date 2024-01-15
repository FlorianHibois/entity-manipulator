<?php
namespace Felek\App\Classes;
class Auteurs {
private ?int $id;
private ?string $auteur;

public function __construct() {} 
public function getId() : int {
return $this -> id;
}
public function setId(int $id) : self {
$this -> id = $id;
return $this;
}
public function getAuteur() : string {
return $this -> auteur;
}
public function setAuteur(string $auteur) : self {
$this -> auteur = $auteur;
return $this;
}
}
