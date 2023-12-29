<?php

// $name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
// もし違ったら「あなたの名前ではありません」と表示するように実装してください

// for文を使って、1から10000までの合計の値を表示してください

// $fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください

// 【応用】下記のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください

$name = "SotaMatsuno";

if ($name = "SotaMatsuno") {
    echo "私は あなたの名前 です";
} else {
    echo "あなたの名前ではありません";
}
echo "\n";


$total = 0;
echo $total;
echo "\n";

for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";


$fruits = array("orange","apple","grape","lemon","cherry");

foreach($fruits as $fruits){
    echo "要素は" . $fruits;
    echo "\n";
}

//* for文の始めの値を定義する //
$start = 0;

for($i = 1; $i <= 100; $i++){
    $start = $i;
  // 5で割り切れたら{}内を実行する
  if($start % 5 === 0){
    echo $start;
    echo "\n";
  }
}