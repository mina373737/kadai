<?php
// 【再挑戦】

//課題１
// 引数に数値を指定して実行すると、数値を2倍にして返す関数
function kakeru2($hikisuu){
  return $hikisuu*2;
}

// 課題２
// $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function sum($a,$b){
  $total=$a+$b;

  return $total;
}

//課題3
// $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。

function multiply_all($arr){
  $result=1;

  foreach($arr as $number);
    $result=$result*$number;
}
return $result;
$number=multiply_all(array(1,3,5,7,9));

// 課題４
// 配列の中で一番大きい値を返す max_array という関数を実装
function max_array($arr){
  $max_number=$arr[0];
  foreach($arr as $a){
    $result=$a;
  }
return $max_number;
}
