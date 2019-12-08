<?php
session_start();
include("connection.php");
?>
<html>
<head>
<title>VITAL EVENT REGISTRATION INFORMATION MANEGMENT SYSTEM</title>
<link  href="mystyles.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="../js/ja.js">
</script></head>
<body id="bockground">
<?php

if(isset($_SESSION['sun'])&&isset($_SESSION['spw']))
{
?>
<div id="all">
<table>
<div id="divHeader">
<?php
require("header.php");

?>
</div>
<div id="divNav">
<?php
require("staticianmenu.php");
?></div>
<tr><td><div id="divSideContentLeft">


  
        </div>

</td>


<?php
     if(isset($_POST['register']))
     {
		$uid=$_POST['uid'];
		$role=$_POST['role'];
		$username=$_POST['username'];
		$comment=($_POST['comment']);
		
		$date=$_POST['dates'];
		 
	//insert data in to the table
$sql="INSERT INTO feedback(feedback_id,user_type,user_name,comment,date) VALUES('$uid','$role','$username','$comment','$date')";
  mysql_query($sql) or die(mysql_error());
		echo '<script type="text/javascript">alert("your feedback  successfully sent!!!");</script>';
		
	}
		
 
		
	
  ?>

<td>
	<div id="divContentCenter" >
	<fieldset style="border-radius:5px;">
        <legend>feed back form</legend>
	<form action="" method="post">
<table bgcolor="#F0F8FF">
      <tr><td width="140px" height="40px" style="font-size:19px;">feedback ID</td><td width="140px">
		<input type="text" name="uid" pattern="[A-Za-z0-9]+"  placeholder="Enter id " required="" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;"> 
		</td><td width="140px" ></td></tr>
		<tr><td width="140px" height="40px"  style="font-size:19px;">user type</td><td width="140px">
		<select name="role" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;">
		<option>--Select Role--</option>
		<option value="Admin">Admin</option>
		<option value="federaloficer">federaloficer</option>
		<option value="statician">statician</option>
		<option value="kebeleofficer">kebeleofficer</option>
		<option value="woredaofficer">woredaofficer</option>
		<option value="zonaloffice">zonaloffice</option>
		</select></tr>
      <tr><td width="140px" height="40px"  style="font-size:19px;">User_name</td><td width="140px" >
	  <input type="text" name="username" pattern="[A-Za-z0-9]+" placeholder="Enter username" required="" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;">
		</td><td width="140px" ></td></tr>
		
		
	<tr><td>comment</td><td> 
		<input type="textarea" name="comment" pattern="[A-Za-z0-9 ]+" placeholder="comment" >
		</td></tr>
		<td width="140px" ></td>
		<tr><td width="140px" height="40px"  style="font-size:19px;">date</td><td width="140px">
		<input type="text" name="dates" value=""> 
		</td><td width="140px"></td></tr>
		
		
		
		<tr><td width="140px" height="40px"></td><td>
	     <input type='submit' name='register' value='Save' style="border-radius:5px;background:#808675; width:60px; font-size:12pt;border:1px solid #336600;padding:2px; color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type='reset'  value='Clear' style="border-radius:5px;font-size:12pt;border:1px solid #336600;padding:2px;color:white; background:#808675;;width:60px;"></td></tr>
		 </table>
		 </form>
		 </fieldset>
		
	 </div>
	 </td>
	
	<td>
	<div id="divSideContentRight">
	<img src="image/login.jpg">
	
	
</div>
</td>
</tr>
<tr><td><div id="divFooter"><?php
require("footer.php");

?></div></td></tr>
</table>
</div>
<?php
}
else
{
header("location:home.php");
}
?>
</body>
</html>

