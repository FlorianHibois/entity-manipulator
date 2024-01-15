<?php
namespace Felek\App\Classes;
class Utilisateur {
private ?int $id;
private ?string $login;
private ?string $password;
private ?string $email;
private ?string $role;

public function __construct() {} 
public function getId() : int {
return $this -> id;
}
public function setId(int $id) : self {
$this -> id = $id;
return $this;
}
public function getLogin() : string {
return $this -> login;
}
public function setLogin(string $login) : self {
$this -> login = $login;
return $this;
}
public function getPassword() : string {
return $this -> password;
}
public function setPassword(string $password) : self {
$this -> password = $password;
return $this;
}
public function getEmail() : string {
return $this -> email;
}
public function setEmail(string $email) : self {
$this -> email = $email;
return $this;
}
public function getRole() : string {
return $this -> role;
}
public function setRole(string $role) : self {
$this -> role = $role;
return $this;
}
}
