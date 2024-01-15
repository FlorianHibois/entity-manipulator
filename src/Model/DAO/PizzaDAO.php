<?php
namespace Pizza;
use Felek\App\Core\AbstractDAO;
use PDO;
use Pizza;
class PizzaDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Pizza::class);
}
}
