<?php
namespace Felek\App\Classes;
class Editeurs {
private ?int $id;
private ?string $editeur;

public function __construct() {} 
public function getId() : int {
return $this -> id;
}
public function setId(int $id) : self {
$this -> id = $id;
return $this;
}
public function getEditeur() : string {
return $this -> editeur;
}
public function setEditeur(string $editeur) : self {
$this -> editeur = $editeur;
return $this;
}
}
