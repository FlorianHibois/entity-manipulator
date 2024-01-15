<?php
namespace Regions;
use Felek\App\Core\AbstractDAO;
use PDO;
use Regions;
class RegionsDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Regions::class);
}
}
