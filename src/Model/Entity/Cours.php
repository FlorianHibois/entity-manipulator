<?php
namespace Felek\App\Classes;
class Cours {
private ?int $id;
private ?string $titre;
private ?bool $actif;
private ?DateTime $creationDate;
private ?DateTime $modificationDate;

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
public function getActif() : bool {
return $this -> actif;
}
public function setActif(bool $actif) : self {
$this -> actif = $actif;
return $this;
}
public function getCreationDate() : DateTime {
return $this -> creationDate;
}
public function setCreationDate(DateTime $creationDate) : self {
$this -> creationDate = $creationDate;
return $this;
}
public function getModificationDate() : DateTime {
return $this -> modificationDate;
}
public function setModificationDate(DateTime $modificationDate) : self {
$this -> modificationDate = $modificationDate;
return $this;
}
}
