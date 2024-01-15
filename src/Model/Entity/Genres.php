<?php
namespace Felek\App\Classes;
class Genres {
private ?int $id;
private ?string $genre;

public function __construct() {} 
public function getId() : int {
return $this -> id;
}
public function setId(int $id) : self {
$this -> id = $id;
return $this;
}
public function getGenre() : string {
return $this -> genre;
}
public function setGenre(string $genre) : self {
$this -> genre = $genre;
return $this;
}
}
