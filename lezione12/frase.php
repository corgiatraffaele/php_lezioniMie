<?php
require('function.php');

$articles=['il','lo','la','i','gli','le'];

$names=['cane','gatto','mela','pera','arrosto','città'];

session_start();
if(!isset($_SESSION['phrase'])){
    $_SESSION['phrase']=' ';
}

?>


<table>
    <tr>
        <td>Articoli</td>
        <td>Sostantivi</td>
    </tr>

    <td><?= print_list(($articles))?></td>

<tr>
   
<td><?= print_list(($names))?></td>
  
</tr>

</table>

<p> <?php echo 'frase composta :'.$_SESSION['phrase'] ?> </p>