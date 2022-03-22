<?php

/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */
require "connessionedb.php"; //collegamento alla connessione



$sql = 'INSERT INTO speakers (name, title, company, url, twitter) VALUES (:name, :title, :company, :url, :twitter)';


$sth = $db->prepare($sql);

$data = [
    'name' => 'Raffaele Corgiat',
    'title' => 'Junior Software Engineer',
    'company' => 'Zend Technologies',
    'url' => 'http://www.zimuel.it',
    'twitter' => '@raff'
];

if (!$sth->execute($data)) {
    throw new Exception(sprintf(
        "Error PDO exec: %s",
        implode(',', $db->errorInfo())
    ));
}
printf("Speaker added successfully!\n");
