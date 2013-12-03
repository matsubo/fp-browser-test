<?php
$current = (int)@$_REQUEST['num'] ?: 15;
?><!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>FP Page cache test</title>
    <meta name="author" content="Yuki Matsukura">
  </head>
  <body>
<h1>FP表示テスト</h1>

<ul>
<li>This page is encoded with UTF-8. Please report if you have any difficulties reading following sentence.</li>
<li><a href="cache.php">ブラウザキャッシュの容量を検証</a></li>
<li><a href="emoji.php">auのUTF8対応を検証</a></li>
</ul>


<h1>環境変数</h1>

<dl>
<?php
foreach ($_SERVER as $key => $value) {
    print sprintf("<dt>%s</dt><dd>%s</dd>", $key, $value);
}
?>
</dl>


  </body>
</html>

