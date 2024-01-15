<?php
namespace Communes;
use Felek\App\Core\AbstractDAO;
use PDO;
use Communes;
class CommunesDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Communes::class);
}
}
