<?php
namespace Commandes;
use Felek\App\Core\AbstractDAO;
use PDO;
use Commandes;
class CommandesDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Commandes::class);
}
}
