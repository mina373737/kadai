<?php

//問題1
//for文を使って、$arrayの中に1~100の数字を入れて下さい。
$array=array();

for($a=1; $a<=100; $a++){
  $array[]=$a;
}



//問題2
// for文を使って、$arrayの中に1~100のまでで２の倍数のものを入れて下さい。2,4,6,8,......

//まずはfor文が始まる前に定義しておく
$result=array();
//$aは1から始まり、100まで、1ずつ増える
for($a=1; $a<=100; $a++){

  //$aが2で割り切れたら、$a結果として返す
  if(($a%2)==0){
//結果として$aを返す
  $result[]=$a;
}
}
//確かに「 }」が足りなかったので、一つ増やしました。



// 問題3
// $nを引数に持ち、for文を使って、1~nまでの数字を入れる関数を作って下さい。関数名はなんでも大丈夫です。

function box($n){
  //まずは空の配列を作成する
  $result=array();
//$nは1から始まり、nまでの間、1ずつ増え続ける
for($i=1; $i<=$n; $i++){
//配列に追加していくので[]=を使う
  $result[]=$i;
}
return $result;
}




// 問題4
// $xを引数に持ち、xが100以上なら「100以上」、100未満なら「100未満」とechoで表示する関数を作成して下さい。
// 関数名は「compare_to_100」でお願いします。
function compare_to_100($x){
  if($x<=100){
    echo "100以上";
  }else if($x<100){
    echo "100未満";
  }
}



// 問題5
// 2で割り切れる数かどうか、3で割り切れる数かどうか、を調べることができる関数を自由に作って下さい。
function numbar($num){
if($num%2==0){
  $num+=2-($num%6);
}
  elseif($num%3==0){
  $num+=3-($num%3);
  }
}


// 問題6
// 税込み価格を計算してくれる関数を自由に作成して下さい。
function tax_include($price){
  //floorは、引数で指定された値を小数点以下で切り捨てる関数
  $price=floor($price*1.08);
  return $price;
}


// 問題7
// (1,3,5,7,9)のような配列を渡すと配列の中身を全てechoする関数を作成して下さい。関数名:echo_all 引数:$array
function echo_all($array){
  $array=array(1,3,5,7,9);
  echo $array[];
}


// 問題8
// (1,3,5,7,9)のような配列を渡すと偶数番目の要素を全てechoする関数を作成して下さい。関数名:echo_even_numbers 引数:$array
function echo_even_numbers($array){
  $array=array(1,3,5,7,9);
  if($array%2==0){
    echo $array[];
  }
}
