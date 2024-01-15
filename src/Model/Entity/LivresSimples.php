<?php
namespace Felek\App\Classes;
class LivresSimples {
private ?int $id;
private ?string $titre;
private ?float $prix;
private ?string $auteur;
private ?string $editeur;
private ?string $genre;
private ?DateTime $datePublication;
private ?string $nationaliteAuteur;
private ?string $langue;
private ?string $auteurPrenom;
private ?string $auteurNom;

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
public function getPrix() : float {
return $this -> prix;
}
public function setPrix(float $prix) : self {
$this -> prix = $prix;
return $this;
}
public function getAuteur() : string {
return $this -> auteur;
}
public function setAuteur(string $auteur) : self {
$this -> auteur = $auteur;
return $this;
}
public function getEditeur() : string {
return $this -> editeur;
}
public function setEditeur(string $editeur) : self {
$this -> editeur = $editeur;
return $this;
}
public function getGenre() : string {
return $this -> genre;
}
public function setGenre(string $genre) : self {
$this -> genre = $genre;
return $this;
}
public function getDatePublication() : DateTime {
return $this -> datePublication;
}
public function setDatePublication(DateTime $datePublication) : self {
$this -> datePublication = $datePublication;
return $this;
}
public function getNationaliteAuteur() : string {
return $this -> nationaliteAuteur;
}
public function setNationaliteAuteur(string $nationaliteAuteur) : self {
$this -> nationaliteAuteur = $nationaliteAuteur;
return $this;
}
public function getLangue() : string {
return $this -> langue;
}
public function setLangue(string $langue) : self {
$this -> langue = $langue;
return $this;
}
public function getAuteurPrenom() : string {
return $this -> auteurPrenom;
}
public function setAuteurPrenom(string $auteurPrenom) : self {
$this -> auteurPrenom = $auteurPrenom;
return $this;
}
public function getAuteurNom() : string {
return $this -> auteurNom;
}
public function setAuteurNom(string $auteurNom) : self {
$this -> auteurNom = $auteurNom;
return $this;
}
}
