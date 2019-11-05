
<html>
<head><title>index.php</title></head>
<body>
<?php

  // PostgreSQL 接続をオープンする
  $dbconn = pg_connect("port=5432 user=uycydaxapjtpqc password=c57ee137fc8bff8965bae9d035872dd33607a849a8345c23c92e3eb286a7b943 dbname=dfjra63p39v988");
  // SQL文の作成
  $sql = "SELECT FirstName, LastName, Email FROM lead;
  // SQLとパラメータを分割して実行
  $result = pg_query_params($dbconn, $sql, array($_POST['product_name']));
  
  // SQL実行結果の行数を返す
  $cnt = pg_numrows($result);
  print("$cnt 件ヒットしました。<br />");
  
  for ($i = 0; $i < $cnt; $i++) {
    // 実行結果のi行目の行情報を取り出す
    $row = pg_fetch_row($result, $i);
    print("FirstName：$row[0] LastName：$row[1] Email：$row[2]");
  }

  // PostgreSQL 接続をクローズする
  pg_close($dbconn);

?>
</body>
</html>
