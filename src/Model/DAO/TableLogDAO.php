<?php
namespace TableLog;
use Felek\App\Core\AbstractDAO;
use PDO;
use Table_log;
class TableLogDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, TableLog::class);
}
}
