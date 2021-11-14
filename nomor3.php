<?php

function prima($bil){
    $n=0;
    for($i=2;$i<$bil;$i++){
        if($bil%$i==0){
            $n++;
        }
    }
    if($n==0&&$bil!=1){
        echo "$bil<br>";
    }
}

echo "Bilangan Prima dari 1 - 50 adalah : <br>";
for($i=1;$i<=50;$i++){
    prima($i);
}

?>