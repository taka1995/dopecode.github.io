
<html>
<head><title>index.php</title></head>
<body>
<?php

  // PostgreSQL 接続をオープンする
  $conn = pg_connect("port=5432 user=uycydaxapjtpqc password=c57ee137fc8bff8965bae9d035872dd33607a849a8345c23c92e3eb286a7b943 dbname=dfjra63p39v988");
  // SQL文の作成
 $link = pg_connect($conn);
if (!$link) {
    die('接続失敗です。'.pg_last_error());
}

print('接続に成功しました。<br>');

// PostgreSQLに対する処理

$close_flag = pg_close($link);

if ($close_flag){
    print('切断に成功しました。<br>');
}

?>
</body>
</html>
