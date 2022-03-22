<?php

//contiene la stringa di connessione passando al costruttore il PDO.

try {
	$db = new PDO('mysql:host=127.0.0.1;dbname=lezione17;charset=utf8mb4', 'lezione17', 'lezione17');

	//fa visualizzare gli errori 
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
	throw new Exception(sprintf(
		"PDO connection failed: %s\n",
		$e->getMessage()
	));
}
//var_dump($db);
