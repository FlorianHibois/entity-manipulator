<?php
namespace Locations;
use Felek\App\Core\AbstractDAO;
use PDO;
use Locations;
class LocationsDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Locations::class);
}
}
