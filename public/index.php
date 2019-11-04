
<?php

$hostname = "ec2-23-21-94-99.compute-1.amazonaws.com";
$uname = "uycydaxapjtpqc";
$upass = "c57ee137fc8bff8965bae9d035872dd33607a849a8345c23c92e3eb286a7b943";
$dbname = "dfjra63p39v988";
$tblname = "lead";

//PostgreSQL に接続する。
$connect_string = "host={$hostname} dbname={$dbname}";
$connect_string .= " port=5432 user={$uname} password={$upass}";

if( !$res_dbcon = pg_connect( $connect_string ) ){
	print "PostgreSQL への接続に失敗しました。";
	exit;
}

//ＳＱＬ文を実行し、結果のリソースを取得。
$res_result = pg_query( $res_dbcon, "SELECT * from {$tblname}" );

//問い合わせ結果を表示。
while( $row = pg_fetch_array( $res_result, NULL, PGSQL_ASSOC ) ){
	var_dump( $row );
}

//PostgreSQL への接続を切断する。
//この処理を行わなくてもプログラム終了時に自動的に切断される。
pg_close( $res_dbcon );

?>
