 <?php
		session_start();
		include("connection.php");

		?>
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>VITAL EVENT REGISTRATION INFORMATION MANEGMENT SYSTEM</title>
	<link  href="mystyles.css" rel="stylesheet" type="text/css"  />
	</head>

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
	require("adminmenu.php");
	?>
	</div>
	<tr><td>


	<div id="divSideContentLeft">
		
	</div>
	</td>
	<td>
		<div id="divContentCenter" >
		<form action="" method="post" name="frm">
  <table><tr><td><p>Enter ID Number:
    <input name="upd" type="text" /></td></tr></table>
    <center><input name="submit" type="submit" value="Delete" /></center>
</p>
  <p>&nbsp;  </p>
</form>

<?php
 
if (isset($_POST["submit"]))
 {
  
    $id=$_POST['upd'];
	  $sql="delete *from user where uid='$id'";
	 $c=mysql_query($sql).mysql_error($con);
	 if($c){
	 	
	
	 echo "data delet"; }
 }
?>
	</div>
	</td>
	<td>
		<div id="divSideContentRight">
		
		 <p>calander</p>
					<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Display Date and Time in Javascript</title>
        <script type="text/javascript" src="date_time.js"></script>
    </head>
    <body>
            <span id="date_time"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>
    </body>
</html>
					<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Javascript Calendar</title>
        <link rel="stylesheet" media="screen, print, handheld" type="text/css" href="calendar.css" />
        <script type="text/javascript" src="calendar.js"></script>
    </head>
    <body>
        <script type="text/javascript">
            calendar();
        </script>
    </body>
</html>
<div id="dmu">
Additional Site<br/>		
<ul>
			<li><a href="http://www.dmu.edu.et/"  id="style1"target="content"><img src="image/a.jpeg" width="25"height="20"/> <strong><font >DMU</font></strong></a><br/></li>
					</ul>
					</div>

	</div></td></tr>
	<tr><td><div id="divFooter">
	<?php
	require("footer.php");

	?>
		
	</div></td></tr>
	</table></div>
		<?php
}
else
{
header("location:home.php");
}
?>
	</body>
	</html>









		
		
	