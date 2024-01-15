<?php
namespace PizzaSize;
use Felek\App\Core\AbstractDAO;
use PDO;
use Pizza_size;
class PizzaSizeDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, PizzaSize::class);
}
}
