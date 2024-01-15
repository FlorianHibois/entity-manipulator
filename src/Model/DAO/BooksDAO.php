<?php
namespace Books;
use Felek\App\Core\AbstractDAO;
use PDO;
use Books;
class BooksDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Books::class);
}
}
