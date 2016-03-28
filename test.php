<?php
    $input_array = array();
    while(true) {
        $input = trim(fgets(STDIN));
        if ($input === '')
        {
            break;
        }
        $input_array[] = (int) $input;
    }

    //重複を削除
    $sorted = array_unique($input_array, SORT_NUMERIC);
    //昇順にソート
    sort($sorted);
    
    foreach ($sorted as $i => $num) {
        echo $num ."\n";
    }
    echo "\n";
?>
