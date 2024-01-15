<?php
namespace Ingredients;
use Felek\App\Core\AbstractDAO;
use PDO;
use Ingredients;
class IngredientsDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Ingredients::class);
}
}
