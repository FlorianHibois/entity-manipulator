<?php
namespace RegionsDepartements;
use Felek\App\Core\AbstractDAO;
use PDO;
use Regions_departements;
class RegionsDepartementsDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, RegionsDepartements::class);
}
}
