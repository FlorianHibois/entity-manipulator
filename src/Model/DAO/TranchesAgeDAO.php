<?php
namespace TranchesAge;
use Felek\App\Core\AbstractDAO;
use PDO;
use Tranches_age;
class TranchesAgeDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, TranchesAge::class);
}
}
