<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>FP Page cache test</title>
    <meta name="author" content="Yuki Matsukura">
  </head>
  <body>
<h1>絵文字テスト</h1>
<p>
一部の機種で、サブミットすると文字化けするという報告があるので、絵文字を入力してページ遷移をするテスト
</p>

<h2>get</h2>
<form action="?" method="get">
<input type="text" value="<?= htmlspecialchars(@$_REQUEST['text']); ?>" name="text" ><input type="submit" value="送信">
</form>

<h2>post</h2>
<form action="?" method="post">
<input type="text" value="<?= htmlspecialchars(@$_REQUEST['text']); ?>" name="text" ><input type="submit" value="送信">
</form>


  </body>
</html>

