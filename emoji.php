<? xml version="1.0" encoding="Shift_JIS" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <title>絵文字検証</title>
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


<?php
$data = array(
    date('Y-m-d H:i:s'),
    $_SERVER['HTTP_USER_AGENT'],
    $_SERVER['QUERY_STRING'],
    json_encode(@$_GET),
    json_encode(@$_POST),
    @$_REQUEST['text'],
);


file_put_contents('log/emoji_request.tsv' ,implode("\t", $data)."\n", FILE_APPEND);




