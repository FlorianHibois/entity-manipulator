<?php
namespace Invoices;
use Felek\App\Core\AbstractDAO;
use PDO;
use Invoices;
class InvoicesDAO extends AbstractDAO {
public function __construct(PDO $pdo, string $table) { 

        parent::__construct($pdo, $table, Invoices::class);
}
}
