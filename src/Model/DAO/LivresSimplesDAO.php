<?php
namespace LivresSimples;
use Felek\App\Core\AbstractDAO;
use PDO;
use Livres_simples;
class LivresSimplesDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, LivresSimples::class);
}
}
