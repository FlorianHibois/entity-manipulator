<?php

use DI\Container;
use DI\DependencyException;
use DI\NotFoundException;
use Dotenv\Dotenv;
use Felek\App\Classes\DAOGenerator;
use Felek\App\Classes\EntityGenerator;
use Felek\App\Classes\StringReformatter;
use Psr\Container\ContainerInterface;

require(dirname(__DIR__) . "/vendor/autoload.php");

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$container = new Container();
$container->set("pdo", function (ContainerInterface $c) {
	return new PDO(
		$_ENV["DSN"],
		$_ENV["DB_USER"],
		$_ENV["DB_PASS"],
		[
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
		]
	);
});

try {
	$pdo = $container->get("pdo");
} catch (DependencyException|NotFoundException $e) {
	echo $e->getMessage();
	exit;
}

foreach (($pdo->query("SHOW DATABASES"))->fetchAll() as $database) {
	if (isset($entityManipulator)) {
		unset($entityManipulator);
	}
	if (in_array($database[0], StringReformatter::UNAUTHORIZED_DATABASES)) {
		continue;
	}
	$pdo->query("USE {$database[0]}");
	foreach (($pdo->query("SHOW FULL TABLES WHERE `Table_Type` != 'VIEW'"))->fetchAll() as $table) {
		$namespacePathInArray = explode("\\", EntityGenerator::class);
		array_pop($namespacePathInArray);
		$namespacePathInArray = implode("\\", $namespacePathInArray);
		$DAOGenerator = new DAOGenerator(
			StringReformatter::firstLetterToUpperCase(StringReformatter::snakeToCamelCase($table[0])),
			"");
		$DAOGenerator->addUses("use " . StringReformatter::firstLetterToUpperCase($table[0]) . ";");
		$entityGenerator = new EntityGenerator(
			StringReformatter::firstLetterToUpperCase(StringReformatter::snakeToCamelCase($table[0])),
			$namespacePathInArray
		);
		foreach (($pdo->query("SELECT COLUMN_NAME, DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '$database[0]' AND TABLE_NAME = '$table[0]'"))->fetchAll() as $column) {
			$entityGenerator->addField(
				StringReformatter::snakeToCamelCase($column[0]),
				StringReformatter::MATCHING_TYPES[$column[1]]);
		}
		$entityGenerator->saveFileCode(dirname(__DIR__) . "/src/Model/Entity/");
		$DAOGenerator->setNamespace($entityGenerator->getEntityName());
		$DAOGenerator->saveFileCode(dirname(__DIR__) . "/src/Model/DAO/");
	}
}