<?php
namespace Departements;
use Felek\App\Core\AbstractDAO;
use PDO;
use Departements;
class DepartementsDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Departements::class);
}
}
