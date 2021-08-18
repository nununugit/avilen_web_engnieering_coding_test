
<?php
    $numbers = fgets(STDIN);
    $number = explode(" ",$numbers);

    $T = $number[0];

    for($i=0 ; $i<$T ;$i++){
    $ass = fgets(STDIN);
    $as[] = explode(" ",$ass);
    }

    for($i=0 ; $i<$T ;$i++){
        //例外処理
        //1,3番目が1だった場合
        if($as[$i][0]==1 && $as[$i][2]==1){
            echo('-1');
        }

        //2番目が一番大きい場合または一番小さい場合
        elseif(($as[$i][0]<$as[$i][1] && $as[$i][2]<$as[$i][1])||($as[$i][0]>$as[$i][1] && $as[$i][2]>$as[$i][1] )){
            echo('0');
        }

        //1番目または3番目が1で、2番目が2の場合
        elseif(($as[$i][0]==1||$as[$i][2]==1)&& $as[$i][1]==2){
            echo('-1');
        }
        //全ての数字が等しい場合
        elseif($as[$i][0]==$as[$i][1] && $as[$i][1] == $as[$i][2] && $as[$i][0] == $as[$i][2]){
            //全ての数字が1の場合
            if($as[$i][0]==1||$as[$i][0]==2){
                echo('-1');
            }else{
                echo('3');
            }
            
        }
        else{
            //2番目との差の絶対値を比較
            $abs1 = abs($as[$i][0]-$as[$i][1]);
            $abs2 = abs($as[$i][2]-$as[$i][1]);
            if($abs1<$abs2){
                echo($abs1 + 1);
            }else{
                echo($abs2 + 1);
            }
        }
        print("\n");
    }
?>
