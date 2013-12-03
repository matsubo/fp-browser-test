<? xml version="1.0" encoding="Shift_JIS" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <title>FP表示テスト用スクリプト</title>
    </head>
    <body>

        <h1>FPキャッシュ量テスト</h1>

        <ul>
            <li><a href="cache.php">ブラウザキャッシュの容量を検証</a></li>
            <li><a href="log/cache_http_request.tsv">画像のリクエストログ(tsv)</a></li>
        </ul>


        <h1>絵文字表示検証</h1>

        <ul>
            <li><a href="emoji.php">auのUTF8対応を検証</a></li>
            <li><a href="log/emoji_request.tsv">リクエストログ(tsv)</a></li>
        </ul>



<!--
        <h1>CSS対応状況検証</h1>

        <ul>
            <li><a href="css.php">CSSの対応状況を検証</a></li>
        </ul>
-->



        <h1>User-Agent</h1>
        <?= $_SERVER['HTTP_USER_AGENT'] ?>

  </body>
</html>

