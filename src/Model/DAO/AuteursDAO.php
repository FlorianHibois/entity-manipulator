<?php
namespace Auteurs;
use Felek\App\Core\AbstractDAO;
use PDO;
use Auteurs;
class AuteursDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Auteurs::class);
}
}
