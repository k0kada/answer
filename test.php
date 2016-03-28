//https://paiza.jp/learning/sort-number


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

    //数字の総数は削除
    unset($input_array[0]);
    //ソート
    sort($input_array);

    foreach ($input_array as $i => $num) {
        echo $num ."\n";
    }
    echo "\n";
?>
