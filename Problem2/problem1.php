<?php
    $numbers = fgets(STDIN);
    $number = explode(" ",$numbers);

    $n = $number[0];
    $N = $number[1];

    $ass = fgets(STDIN);
    $as = explode(" ",$ass);

    $flag = 0;
    foreach($as as $as_val){
        if($n<$N && $N<$as_val){
            $flag = 1;
        }
        elseif($n>$N && $N>$as_val){
            $flag = 1;
        }
    }

    if($flag == 1){
        echo('Yes');
    }else{
        echo('No');
    }

?>