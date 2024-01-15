<?php
namespace Felek\App\Classes;
class TableLog {
private ?int $tableLogId;
private ?DateTime $dateLog;
private ?string $operation;
private ?int $pk;
private ?string $nomTable;
private ?string $nomChamp;
private ?string $ancienneValeur;
private ?string $nouvelleValeur;

public function __construct() {} 
public function getTableLogId() : int {
return $this -> tableLogId;
}
public function setTableLogId(int $tableLogId) : self {
$this -> tableLogId = $tableLogId;
return $this;
}
public function getDateLog() : DateTime {
return $this -> dateLog;
}
public function setDateLog(DateTime $dateLog) : self {
$this -> dateLog = $dateLog;
return $this;
}
public function getOperation() : string {
return $this -> operation;
}
public function setOperation(string $operation) : self {
$this -> operation = $operation;
return $this;
}
public function getPk() : int {
return $this -> pk;
}
public function setPk(int $pk) : self {
$this -> pk = $pk;
return $this;
}
public function getNomTable() : string {
return $this -> nomTable;
}
public function setNomTable(string $nomTable) : self {
$this -> nomTable = $nomTable;
return $this;
}
public function getNomChamp() : string {
return $this -> nomChamp;
}
public function setNomChamp(string $nomChamp) : self {
$this -> nomChamp = $nomChamp;
return $this;
}
public function getAncienneValeur() : string {
return $this -> ancienneValeur;
}
public function setAncienneValeur(string $ancienneValeur) : self {
$this -> ancienneValeur = $ancienneValeur;
return $this;
}
public function getNouvelleValeur() : string {
return $this -> nouvelleValeur;
}
public function setNouvelleValeur(string $nouvelleValeur) : self {
$this -> nouvelleValeur = $nouvelleValeur;
return $this;
}
}
