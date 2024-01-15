<?php
namespace Editeurs;
use Felek\App\Core\AbstractDAO;
use PDO;
use Editeurs;
class EditeursDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Editeurs::class);
}
}
