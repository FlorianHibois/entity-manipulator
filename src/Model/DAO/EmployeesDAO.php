<?php
namespace Employees;
use Felek\App\Core\AbstractDAO;
use PDO;
use Employees;
class EmployeesDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Employees::class);
}
}
