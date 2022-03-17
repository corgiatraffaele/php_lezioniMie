<?php

//vogliamo stampare i link von una hot word che ha il nome del sito

//definire una struttura dati
//variabile che contiene un array di array associativi che hanno 2 chiavi.titolo e url

$links= [
    [
        "titolo"=>"la stampa",
        "url"=>"https://www.lastampa.it",
        "descrizione"=> "il sito de la stampa",
        "attributo"=>"tempo libero"
    ],


    [
    "titolo"=>"nasa ",
    "url"=>"https://www.nasa.com",
    "descrizione"=> "il sito de la nasa",
    "attributo"=>"tempo libero"
    ],

    [
        "titolo"=>"ibm",
    "url"=>"https://www.ibm.com",
    "descrizione"=> "il sito di ibm",
    "attributo"=>"lavoro"
    ]
    
];

 echo '<ul>';

foreach($links as $link){

echo '<li> <a href= "'. $link['url'] .'" >'. $link['titolo'].'</a></li>';


}
echo '</ul>';



echo '<hr>';

echo "<h1>Tabella Lavoro</h1>";
echo '<table border=1>';

foreach($links as $link){

    if($link['attributo'] == 'tempo libero' ){
     echo '<tr>';

            echo '<td>' .$link['titolo']. '</td>';
            echo '<td>'. $link['descrizione'] .'</td>';
            echo '<td>'.'<a href="' .$link['url'].'"> '.$link['url'].'</a></td>';
            echo '<td>'. $link['attributo'] .'</td>';
           echo '</tr>';
                        
        }
  }



echo "</table>"; 
echo '<br>'.'<hr>';
echo "<h1>Tabella Lavoro</h1>";

echo '<table border=1>';

foreach($links as $link){

    if($link['attributo'] == 'lavoro' ){
     echo '<tr>';

            echo '<td>' .$link['titolo']. '</td>';
            echo '<td>'. $link['descrizione'] .'</td>';
            echo '<td>'.'<a href="' .$link['url'].'"> '.$link['url'].'</a></td>';
            echo '<td>'. $link['attributo'] .'</td>';
           echo '</tr>';
                        
        }
  }

echo "</table>";

 
//voglio aggiungere un attributo classificandoli tra tempo libero e lavoro
//in modo da stampare due tabelle distinte una con tempo libero e lavoro


//strategia 2

$html='';

//



$html_l='';


echo '<br>'.'<hr>';
echo '<table border=1>';

foreach($links as $link){

    if($link['attributo'] == 'lavoro' ){
        $html='<tr>';

           $html_tl= '<td>' .$link['titolo']. '</td>';
           $html_tl='<td>'. $link['descrizione'] .'</td>';
           $html_tl= '<td>'.'<a href="' .$link['url'].'"> '.$link['url'].'</a></td>';
           $html_tl= '<td>'. $link['attributo'] .'</td>';
           $html_tl= '</tr>';
                       
        }elseif($link['attributo'] == 'lavoro' ) {
            $html='<tr>';

            $html_l= '<td>' .$link['titolo']. '</td>';
            $html_l='<td>'. $link['descrizione'] .'</td>';
            $html_l= '<td>'.'<a href="' .$link['url'].'"> '.$link['url'].'</a></td>';
            $html_l= '<td>'. $link['attributo'] .'</td>';
            $html_l= '</tr>';
                        
         
        
        }
  }

  $html= '</table>';
  echo $html_tl;
  echo $html_l;
