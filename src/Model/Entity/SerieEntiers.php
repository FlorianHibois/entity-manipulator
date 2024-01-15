<?php
namespace Felek\App\Classes;
class SerieEntiers {
private ?int $serieId;

public function __construct() {} 
public function getSerieId() : int {
return $this -> serieId;
}
public function setSerieId(int $serieId) : self {
$this -> serieId = $serieId;
return $this;
}
}
