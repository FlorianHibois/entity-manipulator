<?php
namespace Jobs;
use Felek\App\Core\AbstractDAO;
use PDO;
use Jobs;
class JobsDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Jobs::class);
}
}
