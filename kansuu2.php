<?php
// 課題４
// 配列の中で一番大きい値を返す max_array という関数を実装
function max_array($arr){
  $max_number=$arr[0];
  //$arrという箱から$aを取り出す
  foreach($arr as $a){
//$aは0から始まり、$arrよりも小さく、1ずつ増える
    for($a=0;$a<$arr;$a++);
    //もし$aが$arrという箱に入った数値よりも大きければ
}
    if($a<$arr){
//$max_number（最大値）を返す
  return $max_number
}


//再挑戦（課題4）

function max_array($arr){
  $max_number=$arr[0];
}
foreach($arr as $a){

if($a<$arr){
  return $max_number;
}
}

//再挑戦2回目（課題4）
function max_array($arr){
  $max_number=$arr[0];
}
foreach($arr as $a){
//もし$aという数字が$max_numberよりも大きかったら、$max_numberを更新していく
if($a>$max_number){
$max_number=$a;
}
return $max_number;
}

 ?>
