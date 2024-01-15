<?php
namespace Personnes;
use Felek\App\Core\AbstractDAO;
use PDO;
use Personnes;
class PersonnesDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Personnes::class);
}
}
