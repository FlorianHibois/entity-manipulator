<?php
namespace Cities;
use Felek\App\Core\AbstractDAO;
use PDO;
use Cities;
class CitiesDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Cities::class);
}
}
