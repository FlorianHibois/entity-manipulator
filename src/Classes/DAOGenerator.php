<?php

namespace Felek\App\Classes;

use Felek\App\Core\AbstractDAO;

class DAOGenerator
{
    private string $entityName;
    private array $uses = [];
    private string $namespace;

    public function __construct(string $entityName, string $namespace = null)
    {
        $this -> entityName = $entityName;
        $this -> namespace = $namespace;
        $this->addUses("use " . AbstractDAO::class . ";")->addUses("use PDO;");
    }

    public function addUses(string $fieldName) : self
    {
        $this->uses[] = $fieldName;
        return $this;
    }

    public function generateConstruct() : string
    {
        return "public function __construct(PDO \$pdo, string \$table) { \n
        parent::__construct(\$pdo, \$table, " . StringReformatter::firstLetterToUpperCase($this->entityName) . "::class);\n}\n";
    }


    private function generatePHPTag() : string
    {
        return "<?php\n";
    }

    private function generateNamespace() : string
    {
//        return $this -> namespace ? "namespace Felek\App\Model\DAO;\n" : "";
        return $this -> namespace ? "namespace {$this -> getNamespace()};\n" : "";
    }

    public function generateClassName() : string
    {
        return "class " . StringReformatter::firstLetterToUpperCase($this -> getEntityName()) . "DAO";
    }

    public function generateUses() : string
    {
        $output = "";
        foreach ($this->uses as $use) {
            $output .= $use . "\n";
        }
        return $output;
    }

    public function generateExtends() : string
    {
        return " extends AbstractDAO {\n";
    }
    public function generateClassCode() : string
    {
        $output = $this -> generatePHPTag();
        $output .= $this -> generateNamespace();
        $output .= $this -> generateUses();
        $output .= $this -> generateClassName();
        $output .= $this -> generateExtends();
        $output .= $this -> generateConstruct();
        $output .= "}\n";

        return $output;
    }

    public function getEntityName() : string
    {
        return $this -> entityName;
    }

    public function getNamespace() : string
    {
        return $this -> namespace;
    }

    public function setNamespace(string $namespace) : self
    {
        $this -> namespace = $namespace;
        return $this;
    }

    public function saveFileCode(string $filePath) : int
    {

        if (!file_exists($filePath)) {
            mkdir($filePath, 0777, true);
        }

        return file_put_contents($filePath . StringReformatter::firstLetterToUpperCase($this -> getEntityName()) . 'DAO.php', $this -> generateClassCode());
    }
}
