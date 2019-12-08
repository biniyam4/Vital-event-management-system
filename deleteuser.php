<?php
session_start();
include ("connections.php");
if($log != "log"){
	header ("Location: updateacc.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM user WHERE userid = '$ctrl'";
mysql_query($SQL);
mysql_close();

print "<script>location.href = 'updateacc.php'</script>";
?>