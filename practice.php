<?php
$a = 3;
$b = 7;
$sum = $a + $b;
echo $sum;
echo "\n";

$array = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array[7];
echo "\n";

$hello = 'Hello';
$name = 'SotaMatsuno';
$world = 's World';
echo $hello.$name.$world;
echo "\n";

$tech_boost = 'tech';
$tech_boost .= 'boost';
echo $tech_boost;
echo "\n";

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];