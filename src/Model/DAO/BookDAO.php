<?php
namespace Book;
use Felek\App\Core\AbstractDAO;
use PDO;
use Book;
class BookDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Book::class);
}
}
