<?php
namespace Adresses;
use Felek\App\Core\AbstractDAO;
use PDO;
use Adresses;
class AdressesDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Adresses::class);
}
}
