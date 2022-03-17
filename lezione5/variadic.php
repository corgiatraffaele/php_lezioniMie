<?php

function width(string ... $words){ //... operatore variadic
        $width=[];

        foreach ($words as $word){
        
            $widths[]=strlen($word);
        };

        return $widths;
};

$widths= width('hello','ciao','bonjour');
 print_r($widths);




 echo '<br>';
 //senza operatore variadic:

 function width2(array $words){ //... operatore variadic
    $width=[];

    foreach ($words as $word){
    
        $widths[]=strlen($word);
    };

    return $widths;
};
$widths= width2(['hello','ciao','bonjour']);

print_r($widths);