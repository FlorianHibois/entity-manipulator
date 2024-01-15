<?php
namespace Livres;
use Felek\App\Core\AbstractDAO;
use PDO;
use Livres;
class LivresDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Livres::class);
}
}
