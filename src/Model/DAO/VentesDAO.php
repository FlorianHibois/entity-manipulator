<?php
namespace Ventes;
use Felek\App\Core\AbstractDAO;
use PDO;
use Ventes;
class VentesDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Ventes::class);
}
}
