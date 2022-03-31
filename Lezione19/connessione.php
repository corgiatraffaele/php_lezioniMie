<?php

require 'vendor/autoload.php'; //carica tutte le librerie che ci servono

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


try {

$db = new PDO('mysql:host='.$_ENV['servername'].
';dbname='.$_ENV['database'].';charset=utf8mb4',
 $_ENV['username'],
 $_ENV['password']);

} catch (PDOException $e) {
throw new Exception(sprintf(
"PDO connection failed: %s\n", $e->getMessage()
)); }
var_dump($db);

//$ composer require vlucas/phpdotenv
//per installare la libreria