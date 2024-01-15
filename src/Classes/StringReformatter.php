<?php

namespace Felek\App\Classes;
class StringReformatter
{

    const MATCHING_TYPES = [
        "varchar" => "string",
        "char" => "string",
        "tinyint" => "bool",
        "smallint" => "int",
        "mediumint" => "int",
        "bigint" => "int",
        "int" => "int",
        "date" => "DateTime",
        "datetime" => "DateTime",
        "timestamp" => "DateTime",
        "decimal" => "float",
        "float" => "float",
        "double" => "float"
    ];

    const UNAUTHORIZED_DATABASES = [
        "information_schema",
        "mysql",
        "performance_schema",
        "sys"
    ];

    const REGEX_LETTER = "/^[a-zA-Z]$/";

    public static function firstLetterToUpperCase(string $s): string
    {
        return ucfirst($s);
    }

    public static function firstLetterToLowerCase(string $s): string
    {
        return lcfirst($s);
    }

    public static function isALetter(string $c): int|bool
    {
        return preg_match(self::REGEX_LETTER, $c);
    }

    public static function removeSpecialCharacters(string $s): string
    {
        $finalString = "";

        foreach (str_split($s) as $char) {
            $result = self::isALetter($char);
            $finalString .= match ($result) {
                1 => $char,
                0 => ""
            };
        }
        return $finalString;
    }

    public static function snakeToCamelCase(string $name): string
    {
        $nameParts = explode("_", $name);
        $camel = array_shift($nameParts);
        $nameParts = array_map(function ($item) {
            return ucfirst($item);
        }, $nameParts);

        return $camel . implode("", $nameParts);
    }

    public static function camelToSnakeCase(string $name): string
    {
        $pattern = "/([a-z])([A-Z])/";
        return preg_replace_callback(
            $pattern,
            function ($matches) {
                return $matches[1] . "_" . lcfirst($matches[2]);
            },
            $name
        );
    }
}