<?php
namespace Countries;
use Felek\App\Core\AbstractDAO;
use PDO;
use Countries;
class CountriesDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Countries::class);
}
}
