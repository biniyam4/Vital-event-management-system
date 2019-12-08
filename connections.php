<!--<?php
$server="localhost";
$dbuser="root";
$dbpass="";
$dbname="veradb";
mysql_connect($server,$dbuser,$dbpass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());
?>-->
<?php 
$con=mysql_connect("localhost","root","") or die("unable to connect");
mysql_select_db('veradb,$con');
 ?>