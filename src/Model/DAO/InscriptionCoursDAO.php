<?php
namespace InscriptionCours;
use Felek\App\Core\AbstractDAO;
use PDO;
use Inscription_cours;
class InscriptionCoursDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, InscriptionCours::class);
}
}
