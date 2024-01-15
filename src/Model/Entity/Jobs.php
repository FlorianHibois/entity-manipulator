<?php
namespace Felek\App\Classes;
class Jobs {
private ?int $jobId;
private ?string $jobTitle;
private ?float $minSalary;
private ?float $maxSalary;

public function __construct() {} 
public function getJobId() : int {
return $this -> jobId;
}
public function setJobId(int $jobId) : self {
$this -> jobId = $jobId;
return $this;
}
public function getJobTitle() : string {
return $this -> jobTitle;
}
public function setJobTitle(string $jobTitle) : self {
$this -> jobTitle = $jobTitle;
return $this;
}
public function getMinSalary() : float {
return $this -> minSalary;
}
public function setMinSalary(float $minSalary) : self {
$this -> minSalary = $minSalary;
return $this;
}
public function getMaxSalary() : float {
return $this -> maxSalary;
}
public function setMaxSalary(float $maxSalary) : self {
$this -> maxSalary = $maxSalary;
return $this;
}
}
