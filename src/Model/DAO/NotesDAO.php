<?php
namespace Notes;
use Felek\App\Core\AbstractDAO;
use PDO;
use Notes;
class NotesDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Notes::class);
}
}
