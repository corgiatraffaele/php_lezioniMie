<?php



function list_generate($frutti){
    
    echo'<ul>';
    for($i=0; $i<count($frutti); $i++){
    echo'<li>'.$frutti[$i].'</li>';}
    echo'</ul>';
}

