<!--https://paiza.jp/learning/word-count-->


<?php
  $result = array();
  $n = 0;  //席の数
  $m = 0;  //グループ数

  while(true) {
    $input = trim(fgets(STDIN));
    $input_array = explode(" ", $input);
    
    if ($n === 0) {  //最初の入力の場合
      $n = $input_array[0];
      $m = $input_array[1];
      //要素数を席の数にする
      $result = array_fill(0, $input_array[0], null);
      
    } elseif ($input !== '') {  //何かしら入力されていて、２回目以降の入力だったら
       if (checkSeat($result, $n, $input_array[0], $input_array[1])) {
         $result = sit($result, $n, $input_array[0], $input_array[1]);
       }
    }

    //入力が終了したら
    if ($input === '') {
      $sit_num = 0; //座っている人数
      foreach ($result as $atom) {
        $sit_num += $atom;
      }
      echo $sit_num. "\n";
        break;
    }
  }

  /**
   * 座れるかを判定
   * @param type $result
   * @param type $n 席の数
   * @param type $a 来店人数
   * @param type $b 座る席のスタート場所
   * @return boolean
   */
  function checkSeat($result, $n, $a, $b) {
    for ($i = $b - 1; $i < $a + ($b - 1); $i++) {
      $index = $i % $n;

      if ($result[$index] === 1) {
        return false;
            
      }
    }
    return true;
  }

  /**
   * 人を座らせる
   * @param int $result
   * @param type $n 席の数
   * @param type $a 来店人数
   * @param type $b 座る席のスタート場所
   * @return int
   */
  function sit($result, $n, $a, $b) {
    
    for ($i = $b - 1; $i < $a + ($b - 1); $i++) {
      $index = $i % $n;
      $result[$index] = 1;
    }
    return $result;
  }
  
?>
