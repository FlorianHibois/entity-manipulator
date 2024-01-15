<?php
namespace Felek\App\Classes;
class Invoices {
private ?int $id;
private ?int $amount;
private ?string $client;
private ?DateTime $createdAt;
private ?DateTime $dueAt;
private ?DateTime $paidAt;

public function __construct() {} 
public function getId() : int {
return $this -> id;
}
public function setId(int $id) : self {
$this -> id = $id;
return $this;
}
public function getAmount() : int {
return $this -> amount;
}
public function setAmount(int $amount) : self {
$this -> amount = $amount;
return $this;
}
public function getClient() : string {
return $this -> client;
}
public function setClient(string $client) : self {
$this -> client = $client;
return $this;
}
public function getCreatedAt() : DateTime {
return $this -> createdAt;
}
public function setCreatedAt(DateTime $createdAt) : self {
$this -> createdAt = $createdAt;
return $this;
}
public function getDueAt() : DateTime {
return $this -> dueAt;
}
public function setDueAt(DateTime $dueAt) : self {
$this -> dueAt = $dueAt;
return $this;
}
public function getPaidAt() : DateTime {
return $this -> paidAt;
}
public function setPaidAt(DateTime $paidAt) : self {
$this -> paidAt = $paidAt;
return $this;
}
}
