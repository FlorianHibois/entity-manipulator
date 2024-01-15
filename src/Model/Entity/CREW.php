<?php
namespace Felek\App\Classes;
class CREW {
private ?int $id;
private ?string $name;
private ?DateTime $creationDate;
private ?DateTime $modificationDate;
private ?bool $active;

public function __construct() {} 
public function getId() : int {
return $this -> id;
}
public function setId(int $id) : self {
$this -> id = $id;
return $this;
}
public function getName() : string {
return $this -> name;
}
public function setName(string $name) : self {
$this -> name = $name;
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
public function getActive() : bool {
return $this -> active;
}
public function setActive(bool $active) : self {
$this -> active = $active;
return $this;
}
}
