<?php
namespace TypePizza;
use Felek\App\Core\AbstractDAO;
use PDO;
use Type_pizza;
class TypePizzaDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, TypePizza::class);
}
}
