
<html>
<head><title>index.php</title></head>
<body>
<?php

  // PostgreSQL 接続をオープンする
  $dbconn = pg_connect("port=5432 user=uycydaxapjtpqc password=c57ee137fc8bff8965bae9d035872dd33607a849a8345c23c92e3eb286a7b943 dbname=dfjra63p39v988");
  // SQL文の作成
 
print_r($_POST);
  // PostgreSQL 接続をクローズする
  pg_close($dbconn);

?>
</body>
</html>
