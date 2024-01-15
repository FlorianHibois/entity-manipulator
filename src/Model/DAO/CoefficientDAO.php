<?php
namespace Coefficient;
use Felek\App\Core\AbstractDAO;
use PDO;
use Coefficient;
class CoefficientDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Coefficient::class);
}
}
