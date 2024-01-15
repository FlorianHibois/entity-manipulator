<?php
namespace CREW;
use Felek\App\Core\AbstractDAO;
use PDO;
use CREW;
class CREWDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, CREW::class);
}
}
