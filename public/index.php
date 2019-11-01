

<?php
$con = pg_connect("dbname=postgres user=postgres password=postgres");
$contents = $_POST['contents'];
if ($contents) {
  $contents = pg_escape_string(htmlspecialchars($contents));
  pg_query($con, "insert into pgbbs1 values('$contents')");
}
$rs = pg_query($con, "select contents from pgbbs1");
while ($row = pg_fetch_array($rs)) {
  print $row['contents'] . "<br>\n";
}
pg_close($con);
?>
