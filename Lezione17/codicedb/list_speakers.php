<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

require 'connessionedb.php';

//seleziona tutti gli speaker dove la company è zend

/* $sql = 'SELECT * FROM speakers WHERE company=:company';
$sth = $db->prepare($sql);*/


$sql = 'SELECT * FROM speakers';
$sth = $db->prepare($sql);
$data = [ ':company' => 'Zend Technologies' ]; 
if (! $sth->execute($data)) {
    throw new Exception(sprintf(
        "Error PDO exec: %s", implode(',', $db->errorInfo())
    ));
}
echo "<table border=2>";


while ($row = $sth->fetch(PDO::FETCH_OBJ)) {
    echo '<tr >';
    echo '<td>'.  $row->title. '</td>';
    echo '<td>'. $row->name  .  '</td>';
    echo '<td>'  . $row->company  . '</td>' ;
    echo '<td> <a href="update_speaker.php?id='.   $row->id .'">aggiorna </a></td>'  ;
    echo '<td> <a href="delete_by_id.php?id='.   $row->id .'">cancella </a></td>'  ;
    echo '<td> <a href="delete_by_id.php?id='.   $row->id .'">view </a></td>'  ;
    echo '</tr>';
    //var_dump($row);
}
echo "</table>";