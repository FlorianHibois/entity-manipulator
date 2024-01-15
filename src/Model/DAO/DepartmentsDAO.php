<?php
namespace Departments;
use Felek\App\Core\AbstractDAO;
use PDO;
use Departments;
class DepartmentsDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Departments::class);
}
}
