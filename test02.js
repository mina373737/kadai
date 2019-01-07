//課題1:jQueryオブジェクトを削除するメソッドを調べ、<h2>を非表示(hide)ではなく、削除してみましょう。
(function($, window) {
  $(function() {
    // この中に処理を書きます
    $('h2').show();
    $('#index').find('li').eq(0).remove()
;
});
})(jQuery, window);


//課題2:#indexにtext()メソッドとhtml()メソッド(ともにパラメータ無し)を実行して、その違いについて比べてみましょう。
//text()の場合
(function($, window) {
  $(function() {
    // この中に処理を書きます
    var title=$('#index').text();
    alert(title);
  });
})(jQuery, window);


//html()の場合
(function($, window) {
  $(function() {
    // この中に処理を書きます
    var title=$('#index').html();
    alert(title);
  });
})(jQuery, window);

//text()とhtml()の違い：
// ポップアップで表示される文章の内容が違う。

//課題3
// 子要素を追加するappendというメソッドについて調べ、ul#indexの最後に<li>メソッド</li>を追加してみましょう。
($function($,window)){
  $(function(){
    $("ul#index").append("<li>追加</li>");
  });
})(jQuery, window);


//課題4:
// ul#indexの子要素<li>それぞれ文字列の長さをalertしてみましょう。
(function($, window) {
  $(function() {
    // この中に処理を書きます
    var mojiretsu = $('ul#index').li();
    alert('mojiretsu.length+"文字です!"');
  });
})(jQuery, window);


//課題5
// 4.でalertではなく、各文字列の最後にその長さを追加してみましょう。例：jQueryのはじめ方[11文字]
(function($, window) {
  $(function() {
    // この中に処理を書きます
    var mojiretsu = $('ul#index').li();
    CHAR_LENGTH('mojiretsu.length');
  });
})(jQuery, window);
