<?php
header('Content-type: image/png');

print file_get_contents('images/out.png');


$data = array(
    date('Y-m-d H:i:s'),
    $_SERVER['HTTP_USER_AGENT'],
    $_SERVER['QUERY_STRING'],
    $_SERVER['REMOTE_ADDR'],
);


file_put_contents('log/cache_http_request.tsv' ,implode("\t", $data)."\n", FILE_APPEND);


