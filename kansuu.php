<?php
$array=array(2,5,9,7,3,1,8,6,4);
asort($array);
print_r


//課題１
function *2($max)
$result=0;

for($i=1; $i<=max; $i++){
  $result+=$i;
}
return $result;

echo *2();

//課題２
function f($a,$b){
  sum
}
$result=f();

//課題３
$arr=array(1,3,5,7,9)
echo *($arr);

//課題４
function max_array($arr){
  $max_nunber=$all[0];
  foreach($all as $a){
mixed max(array $max_number)
  }
  return $max_number;
  echo max_number();
}

//課題５
1)strip_tags
意味：文字列からHTML及びPHPタグを取り除く

使用例：
$text='<p>Test paragraph.</p><!--Comment-->
<a href="#fragment">Other test</a>';
echo strip_tags($test,);
echo "\n";

echo strip_tags($test,'<p><a>');

2)array_push
意味：一つ以上の要素を配列の最後に追加する

使用例：
$stack=array("orange","banana");
array_push($stack,"apple","raspberry")
print_r($stack);

3)array_merge
意味：一つまたは複数の配列をマージ（合併）する

使用例：
$array1("color"=>"red",2,4);
$array2("a","b","color"=>"green","shape"=>"trapezoid",4);
$result=array_marge($array1,$array2);
print_r($result);

4)time()
意味：現在時刻をUnixタイムスタンプとして取得する。
Unixタイムスタンプとは、1970年1月1日00:00:00GMTからの経過秒数。
PHP内部での日付や時刻の処理は、Unizタイムスタンプで行われている。

使用例：
echo time()

mktime()
意味：指定した日時のUnixタイムスタンプを取得する

5)date
意味：ローカルの日付/時刻を書式化する
date()とmktime()の両方を使って、未来または過去の日付を知ることができる。

使用例：
$tomorrow=mktime(0,0,0,date("m"),date("d")+1,date("Y"));
$lastmonth=mktime(0,0,0,date("m")-1,date("d"),date("Y"));
$nextyear=mktime(0,0,0,date("m"),date("d"),date("Y")+1);

 ?>
