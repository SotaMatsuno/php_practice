<?php

//引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function nibai($x){
    $x =2 * $x;
    return $x;
}
echo nibai(1);

//$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function add($a, $b){
    return $a + $b;
}
echo add(1, 2);

//$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
function kakeru($arr){
    $result = 1;
    foreach($arr as $ar){
        $result = $result * $ar;
    }
    return $result;
}
echo kakeru(array(1, 3, 5 ,7, 9));

//【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください

//下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください
