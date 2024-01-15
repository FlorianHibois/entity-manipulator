<?php
namespace InscriptionFormation;
use Felek\App\Core\AbstractDAO;
use PDO;
use Inscription_formation;
class InscriptionFormationDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, InscriptionFormation::class);
}
}
