<?php
namespace Genres;
use Felek\App\Core\AbstractDAO;
use PDO;
use Genres;
class GenresDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Genres::class);
}
}
