<?php
namespace LivresAuteurs;
use Felek\App\Core\AbstractDAO;
use PDO;
use Livres_auteurs;
class LivresAuteursDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, LivresAuteurs::class);
}
}
