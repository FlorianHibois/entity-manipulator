<?php
namespace Felek\App\Classes;
class Book {
private ?int $id;
private ?string $title;
private ?string $author;
private ?int $price;

public function __construct() {} 
public function getId() : int {
return $this -> id;
}
public function setId(int $id) : self {
$this -> id = $id;
return $this;
}
public function getTitle() : string {
return $this -> title;
}
public function setTitle(string $title) : self {
$this -> title = $title;
return $this;
}
public function getAuthor() : string {
return $this -> author;
}
public function setAuthor(string $author) : self {
$this -> author = $author;
return $this;
}
public function getPrice() : int {
return $this -> price;
}
public function setPrice(int $price) : self {
$this -> price = $price;
return $this;
}
}
