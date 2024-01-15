<?php
namespace Size;
use Felek\App\Core\AbstractDAO;
use PDO;
use Size;
class SizeDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Size::class);
}
}
