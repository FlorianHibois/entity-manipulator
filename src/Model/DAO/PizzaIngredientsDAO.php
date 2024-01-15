<?php
namespace PizzaIngredients;
use Felek\App\Core\AbstractDAO;
use PDO;
use Pizza_ingredients;
class PizzaIngredientsDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, PizzaIngredients::class);
}
}
