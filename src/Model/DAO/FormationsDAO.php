<?php
namespace Formations;
use Felek\App\Core\AbstractDAO;
use PDO;
use Formations;
class FormationsDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Formations::class);
}
}
