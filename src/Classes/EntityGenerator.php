<?php

namespace Felek\App\Classes;

class EntityGenerator
{
    private string $entityName;
    private array $entityFields = [];
    private string $namespace;

    public function __construct(string $entityName, string $namespace = null)
    {
        $this -> entityName = $entityName;
        $this -> namespace = $namespace;
    }

    public function addField(string $fieldName, string $fieldType) : self
    {
        $this -> entityFields[] = [
            'name' => $fieldName,
            'type' => $fieldType
        ];
        return $this;
    }

    public function generateConstruct() : string
    {
        return "public function __construct() {} \n";
    }

    public function generateGetterSetter() : string
    {
        $output = '';
        foreach ($this -> entityFields as $field) {
            // Getters
            $output .= "public function get" . StringReformatter::firstLetterToUpperCase($field['name']) . "() : {$field['type']} {\n";
            $output .= "return \$this -> {$field['name']};\n}\n";

            // Setters
            $output .= "public function set" . StringReformatter::firstLetterToUpperCase($field['name']) . "({$field['type']} \${$field['name']}) : self {\n";
            $output .= "\$this -> {$field['name']} = \${$field['name']};\n";
            $output .= "return \$this;\n}\n";
        }

        return $output;
    }

    private function generatePHPTag() : string
    {
        return "<?php\n";
    }

    private function generateNamespace() : string
    {
        return $this -> namespace ? "namespace {$this -> getNamespace()};\n" : "";
    }

    public function generateClassName() : string
    {
        return "class {$this -> getEntityName()} {\n";
    }

    public function generateClassCode() : string
    {
        $output = $this -> generatePHPTag();
        $output .= $this -> generateNamespace();
        $output .= $this -> generateClassName();
        $output .= $this -> generateMembersDeclaration();
        $output .= $this -> generateConstruct();
        $output .= $this -> generateGetterSetter();
        $output .= "}\n";
        
        return $output;
    }

    public function getEntityName() : string
    {
        return $this -> entityName;
    }

    public function setEntityName(string $entityName) : self
    {
        $this -> entityName = $entityName;
        return $this;
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

    public function generateMembersDeclaration() : string 
    {
        $output = "";

        foreach ($this -> entityFields as $field) {
            $output .= "private ?{$field['type']} \${$field['name']};\n";
        }
        
        $output .= "\n";
        return $output;
    }

    public function saveFileCode(string $filePath) : int
    {
        
        if (!file_exists($filePath)) {
            mkdir($filePath, 0777, true);
        }
        
        return file_put_contents($filePath . $this -> getEntityName() . '.php', $this -> generateClassCode());
    }
}
