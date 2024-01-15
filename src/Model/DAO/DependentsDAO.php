<?php
namespace Dependents;
use Felek\App\Core\AbstractDAO;
use PDO;
use Dependents;
class DependentsDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Dependents::class);
}
}
