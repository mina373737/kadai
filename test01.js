//課題1:promptで入力した値から「正の数」「負の数」を判定してalertする処理を書いてください。

// alert('外部ファイル');
var answer=prompt('数字を入力してください');
if(answer=== +$i){
  alert('正の数');
}else{
  alert('負の数');
}

//課題2:1.で数値以外が入力された場合には「数値を入力してください」とalertする処理を追加してください。
if(isNaN(result)){
  console.log('数値ではありません');
}


//課題3:配列に'パンダ', 'ライオン', 'キリン'を定義し、while文ですべて表示する処理を書いてください。
var animals=['パンダ','ライオン','キリン']

var i=0;
while(true){
  if(i>=animals.length){
    break;
  }
  alert(animals[i]);
  i++;
}


//課題4:3.でwhile文より前にpromptでキー入力し、その入力した内容が'ライオン'の場合に処理を中断するように変更してください。

var answer=prompt('動物名を入力してください');
alert(answer);

var animals=['パンダ','ライオン','キリン']

var i=0;
while(true){
  if(i='ライオン'){
    break;
  }
}



//課題5:4.で中断したときの'ライオン'の添え字もalertするように変更してください。


var answer=prompt('動物名を入力してください');
alert(answer);

var animals=['パンダ','ライオン','キリン']

vae i=0;
while(true){
  if(i[1]='ライオン'){
    break;
  }
}


//課題6:オブジェクト変数の配列の形式で、動物と体重を表現してみましょう。例としてパンダは80(Kg)、ライオンは200(Kg)、キリンは300(Kg)としましょう。

var animals = [
  {'name': 'パンダ', 'weight': 80(kg)},  // 0番目のオブジェクト変数
  {'name': 'ライオン', 'price': 200(kg)},  // 1番目のオブジェクト変数
  {'name': 'キリン', 'price': 300(kg)}   // 2番目のオブジェクト変数
];

// 課題7:6.でpromptで入力した動物名の体重をalertするように変更してください。

var animals = [
  {'name': 'パンダ', 'weight': 80(kg)},  // 0番目のオブジェクト変数
  {'name': 'ライオン', 'weight': 200(kg)},  // 1番目のオブジェクト変数
  {'name': 'キリン', 'weight': 300(kg)}   // 2番目のオブジェクト変数
];
alert(animals[answer].weight);



//課題8:円の半径を入力するとその面積を返す関数をつくり、その結果をalertしましょう。円周率は3.14とします。

var answer = prompt('円の半径を入力してください');
alert(answer*answer*3.14);
