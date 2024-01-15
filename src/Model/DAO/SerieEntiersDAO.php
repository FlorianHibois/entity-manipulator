<?php
namespace SerieEntiers;
use Felek\App\Core\AbstractDAO;
use PDO;
use Serie_entiers;
class SerieEntiersDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, SerieEntiers::class);
}
}
