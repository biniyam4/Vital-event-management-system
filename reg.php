<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>VITAL EVENT REGISTRATION INFORMATION MANEGMENT SYSTEM</title>
<style type="text/css">
<!--
body {
	background-color: #99CCFF;
}
-->
</style>
</head>

<body>
<?php

   include "../db/main.php";
$id=$_REQUEST['id'];
$name=$_REQUEST['nam'];
 $pass=$_REQUEST['pw1'];
    
 $pw1=$_REQUEST['pw2'];


		 
		 $fname=$_FILES['file']['name'];
		 $size=$_FILES['file']['size'];
		 $tmpname=$_FILES['file']['tmp_name'];
		  $ftype=$_FILES['file']['type'];
		   move_uploaded_file($_FILES['file']['tmp_name'],"../upload/".$_FILES['file']['name']);
		    $location="upload/".$_FILES['file']['name'];
			$photo=$location;
			 $sql="insert into account (username,password,photo,status)values('$name', '$pass','$photo','1')";
		 mysql_query($sql)or die(mysql_error());
		 if($sql){
			 echo '<p> <font clor=white>account is created sucessfully</font></p>';
		 }
		 
else{
	echo mysql_error();
}
		    
		  
		 
      ?>


</body>
</html>
