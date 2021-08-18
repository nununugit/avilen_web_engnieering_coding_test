<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$obj = $_POST['pattern'];

// echo ($obj);

$arr = (json_decode($obj));

for($i = 1; $i <= 30; $i++){    
    $flag = 0;
    
    foreach((array)$arr->obj as $val){
        if($i%($val->num) == 0){
        echo $val->text;
        $flag = 1;
        }
    }

    if($flag == 0){
        echo $i;
    }
    echo(", ");
}

?>