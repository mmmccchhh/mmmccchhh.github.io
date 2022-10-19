<?php
$name = htmlspecialchars($_POST["namae"],ENT_QUOTES);
$mail = htmlspecialchars($_POST["email"],ENT_QUOTES);
$tel = htmlspecialchars($_POST["tel"],ENT_QUOTES);
$item = $_POST["item"];
$message = htmlspecialchars($_POST["message"],ENT_QUOTES);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="【オーガニックオイルズ公式】オーガニックオイルズの公式サイトのお問い合わせの入力内容確認ページです。オーガニックオイルズは、マッサージ用オイルの専門店です。当社のオイルは、天然の美容成分のみで精製したお肌に優しい植物性オイルです。本社1Fサロンでは、このオイルを使用したエステティックサロンを併設しています。オーガニックコスメ">
	<meta name="format-detection" content="telephone=no">
	<title>Organic oils official site / Confirm</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/style.css">
<link rel="shortcut icon" href="../favicon.png">
<link rel="apple-touch-icon" sizes="192x192" href="../touch-icon.png">

</head>
<body class="confirm-page">
<header>
<h1>Confirm page</h1>
<p id="ham-btn" ><span></span></p>
<nav class="g-nav">
<ul class="nav">
	<li><a href="../index.html" >Top</a></li>
	<li><a href="../products/index.html">Products</a></li>
	<li><a href="#" class="current">Information</a></li>
</ul><!-- /.g-nav -->
<ul class="sns">
	<li><a href="#"><img src="../img/instagram-icon-color.svg" alt="ig-icon"></a></li>
	<li><a href="#"><img src="../img/twitter-icon-color.svg" alt="tw-icon"></a></li>
</ul><!-- /.sns -->
</nav>
</header>

<ul class="step">
	<li data-num="1">入力</li>
	<li class="current" data-num="2">確認</li>
	<li data-num="3">完了</li>
</ul>

<form id="g-form" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfD40qw5Rkssp5MWu6a0N3iEnsvc03OwvG4fxEHo6GCOCu3gQ/formResponse" method="post">
<div class="form-wrapper">
<div class="form-list-3">
<p>お名前：<?php echo $name; ?></p>
<p>メールアドレス：<?php echo $mail; ?></p>
<p>電話番号：<?php echo $tel; ?></p>
<p>お問い合わせ項目</p>
<p><?php echo $item; ?></p>
<p>お問い合わせ内容：<?php echo $message; ?></p>
</div><!-- /.form-list-3 -->
</div><!-- /.content-wrapper -->


<!-- Googleにデータを送信 -->
<input type="hidden" value="<?php echo $name; ?>" name="entry.159121158">
<input type="hidden" value="<?php echo $mail; ?>" name="entry.123174837">
<input type="hidden" value="<?php echo $tel; ?>" name="entry.1038370090">
<input type="hidden" value="<?php echo $item; ?>" name="entry.546206917">
<input type="hidden" value="<?php echo $message; ?>" name="entry.1020483763">


<div class="form-btn-2">
<input type="submit" value="送信">
<input type="button" onclick="history.back();" value="入力画面に戻る">
</div><!-- /.form-btn -->
</form>

<footer>
<nav class="footer-nav">
<ul class="nav">
	<li><a href="../index.html">Top</a></li>
	<li><a href="../products/index.html">Products</a></li>
	<li><a href="#" class="current">Information</a></li>
</ul>
<ul class="sns">
	<li><a href="#"><img src="../img/instagram-icon.svg" alt="ig-icon"></a></li>
	<li><a href="#"><img src="../img/twitter-icon.svg" alt="tw-icon"></a></li>
</ul>
</nav>
<p><small>&copy; 2010 - 2022 Organic oils Co., Ltd</small></p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$(function(){
$('#g-form').submit(function (event) {
var formData = $('#g-form').serialize();
$.ajax({
  url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLSfD40qw5Rkssp5MWu6a0N3iEnsvc03OwvG4fxEHo6GCOCu3gQ/formResponse",
  data: formData,
  type: "POST",
  dataType: "xml",
  statusCode: {
    0: function(){
      window.location.href = "thanks.html";
      },
    200: function(){
     //失敗したときの処理
      }
    }
  });
//googleformへのページ遷移をキャンセル
event.preventDefault();
});

$('#ham-btn').on('click', function(){
$(this).toggleClass('click');
$('.g-nav').toggleClass('click');
});
});
</script>
</body>
</html>