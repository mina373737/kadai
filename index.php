<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
?>
Something is wrong with the XAMPP installation :-(




<?php
//課題１
 $name=赤石美波;
 if($name=赤石美波){
	 echo "私の名前は$nameです"
 }else{
	 echo "あなたの名前ではありません";
  }

  //課題２

	for($i=0; $i<=10000; $i++){
		 $total += $i;
	 } echo $total;

	//課題３

	  $fruits=array("orange","banana","grape","apple","mango")
		foreach($fruits as $fruit){
			 echo "要素は".$fruits;
			 echo "\n"; }

	//課題４

	 $start=0; $end=100;
	 for($i=$start; $i<=$end; $i++){
		  if($i%5===0){
				echo $i
			}
		}

		?>

	/*いただいたアドバイス
・一番頭にphpの開始タグがない
→開始タグ<?phpを追加しました。


・セミコロンがついてない箇所がある
→課題1)にセミコロン忘れを発見し、追加しました。
echo "あなたの名前ではありません";←ここの部分を追加


・for文のところ、iではなく1になっている
→確かに誤字でした。iに修正しました。


・foreachのところ、as $fruitsではなく、as$fruitにする必要がある
→単数形as$fruitに修正しました。



・$i=<$endのところ=と<が逆になっている
→確かに教科書を見返したら逆になっていました。
$i<=$endへ修正しました。

*/
