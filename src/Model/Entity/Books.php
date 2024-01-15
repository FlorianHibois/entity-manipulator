<?php
namespace Felek\App\Classes;
class Books {
private ?int $id;
private ?string $title;
private ?string $author;
private ?DateTime $publishedAt;
private ?string $publisher;
private ?string $genre;
private ?float $price;
private ?string $language;

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
public function getPublishedAt() : DateTime {
return $this -> publishedAt;
}
public function setPublishedAt(DateTime $publishedAt) : self {
$this -> publishedAt = $publishedAt;
return $this;
}
public function getPublisher() : string {
return $this -> publisher;
}
public function setPublisher(string $publisher) : self {
$this -> publisher = $publisher;
return $this;
}
public function getGenre() : string {
return $this -> genre;
}
public function setGenre(string $genre) : self {
$this -> genre = $genre;
return $this;
}
public function getPrice() : float {
return $this -> price;
}
public function setPrice(float $price) : self {
$this -> price = $price;
return $this;
}
public function getLanguage() : string {
return $this -> language;
}
public function setLanguage(string $language) : self {
$this -> language = $language;
return $this;
}
}
