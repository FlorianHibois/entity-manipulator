<?php
namespace Matieres;
use Felek\App\Core\AbstractDAO;
use PDO;
use Matieres;
class MatieresDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Matieres::class);
}
}
