<?php declare(strict_types=1);

function gandakanString(string $s, int $n){
    $i = 0;
    while ($i < $n){
        echo $s;
        $i++;
    }
}

gandakanString("Hello", 3);

?>