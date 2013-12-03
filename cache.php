<? xml version="1.0" encoding="Shift_JIS" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <title>キャッシュ容量検証</title>
    </head>
    <body>

<h1>キャッシュテスト</h1>

<ul>
<li>1枚50.9KBです。10枚表示されれば500KB以上のコンテンツを表示出来るであると判断します。</li>
<li>画像はブラウザにキャッシュされないようにURLをユニークに生成しています。</li>
</ul>

<h1>表示枚数変更</h1>

<?php
$current = (int)@$_REQUEST['num'] ?: 15;
?>


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
<img src="image.php?<?php print time().'_'.sprintf('%02d',$i).'_'.mt_rand(0, 1000000); ?>">
<?php } ?>

  </body>
</html>

