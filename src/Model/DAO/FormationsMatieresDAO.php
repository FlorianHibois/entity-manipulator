<?php
namespace FormationsMatieres;
use Felek\App\Core\AbstractDAO;
use PDO;
use Formations_matieres;
class FormationsMatieresDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, FormationsMatieres::class);
}
}
