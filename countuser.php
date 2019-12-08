<?php
	//Include the PS_Pagination id
		//include('ps_pagination.php');
	
	//Connect to mysql db
	$conn = mysql_connect('localhost','root','');
	if(!$conn) die("Failed to connect to database!");
	$status = mysql_select_db('veradb', $conn);
	if(!$status) die("Failed to select database!");
?>                                         
<form method="post" action="" name="form1" id="form1">   

<br />
<p align="center" style="color: #2773d8;font-family: time new romans;font-size: 17;">Number of record:<?php include 'connections.php'; $count_item=mysql_query("select * from user " ) or die(mysql_error());
$count=mysql_num_rows($count_item);
echo"<font color='red'>".($count)."</font>"; ?></p>