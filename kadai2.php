<?php

$name = "midori";
if ($name = "midori"){
    echo "私はmidoriです。";
} else {
    echo "midoriではありません。";
}

for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

$fruits = array("apple","grapefruit","pear","mikan","grape");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}