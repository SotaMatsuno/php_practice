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
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        $arr[0] > $arr[1];
    }
    return $max_number;
}

//下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください

//strip_tags 文字列からHTMLタグを取り除く
$str = "<h1>strip_tags関数</h1>"
  . "<p>タグ取り除く</p>";
echo strip_tags($str) ."\n";


//array_push 1つ以上の要素を配列の最後に追加する
$fruits = ["apple", "orange", "melon"];

//array_pushを使用して要素を追加する
array_push($fruits, "banana", "pineapple");

print_r($fruits);


//array_merge 配列の要素の最後にひとつまたは複数の配列を結合する
$items1 = ["item1", "item2", "item3"];
$items2 = ["item4", "item5"];
$items3 = ["item6", "item7"];

//配列を結合する
$item_merge = array_merge($items1, $items2, $items3);

print_r($item_merge);


//time 日付や時刻をサーバーから取得する
echo time();

//mktime 指定した日時からUnixタイムスタンプを取得するサンプルコード
/* 2011年11月11日11時11分11秒のUnixタイムスタンプ */
$tm = mktime( 11, 11, 11, 11, 11, 2011);
var_dump($tm);
 
/* 確認 */
echo date('Y年m月d日 H時m分s秒', $tm) .'\n&';


//date 日付、時刻、曜日を表示する
echo date("Y/m/d H:i:s", time()) . "\n";
echo date("Y/m/d H:i:s P l") . "\n";
