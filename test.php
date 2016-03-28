<!--https://paiza.jp/learning/word-count-->


<?php
  $input = explode(' ', fgets(STDIN));
  $result = array();
  foreach ($input as $name){
      //空白削除
      $name = trim($name);

     if (is_null($result[$name])) {
       //配列に追加
       $result[$name] = 1;
     } elseif ($result[$name] >= 1) {
       //カウントを増やす
       $result[$name] += 1;
     }
  }
  
  foreach ($result as $key => $atom) {
    echo $key. " ". $atom. "\n"; 
  }
?>
