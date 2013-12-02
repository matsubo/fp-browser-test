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
<h1>キャッシュテスト</h1>

<ul>
<li>This page is encoded with UTF-8. Please report if you have any difficulties reading following sentence.</li>
<li>1枚50.9KBです。10枚表示されれば500KB以上のコンテンツを表示出来るであると判断する。</li>
<li>画像はブラウザにキャッシュされないようにURLをユニークに生成しています。</li>
</ul>

<h1>表示枚数変更</h1>
<form action="?" method="get">
<select name="num">
<?php foreach (range(1, 100) as $i) { ?>
<option value="<?= $i ?>" <?php if ($current == $i) print 'selected="selected"'; ?>><?= $i ?></option>
<?php } ?>
</select>

<input type="submit" value="表示">

</form>

<h1>サンプル画像</h1>
<?php foreach (range(1, $current) as $i) { ?>
<div><?= $i ?>枚目↓</div>
<img src="out.png?<?php print mt_rand(0, 1000000); ?>">
<?php } ?>

  </body>
</html>

