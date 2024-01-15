<?php
namespace Cours;
use Felek\App\Core\AbstractDAO;
use PDO;
use Cours;
class CoursDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Cours::class);
}
}
