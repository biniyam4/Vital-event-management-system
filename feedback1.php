<?php 
session_start();
	 include("connection.php");
	$dd=$_SESSION['userid'];
	 $sql="select * from user WHERE userid='$dd'";
	 $q=mysql_query($sql);
	 $ret=mysql_fetch_array($q);
	 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>admin page</title>
 <link href="mystyles.css" rel="stylesheet" type="text/css" />
    <script src="jsImgSlider/themes/8/js-image-slider.js" type="text/javascript"></script>
    <link href="jsImgSlider/themes/8/tooltip.css" rel="stylesheet" type="text/css" />
    <script src="jsImgSlider/themes/8/tooltip.js" type="text/javascript"></script>
    <link href="jsImgSlider/generic.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="out.css">
    <script type="text/javascript">
        imageSlider.thumbnailPreview(function (thumbIndex) { return "<img src='images/thumb" + (thumbIndex + 1) + ".jpg' style='width:100px;height:60px;' />"; });
    </script>
<style type="text/css">
#m{
width:100px;
/*height:40px;*/
font-size: 17px;
font-family: elephant;
}
</style>

<link rel="stylesheet" href="style.css" />
   <style>
#applytoorg tr:nth-child(odd){
background: #5E6B75;
color: white;
}
#applytoorg tr:nth-child(even){
background:#adbbcc;
color: black;
}
</style>
</head>
<body id="background">
<center><table><tr><td>
<div id="divHeader">
<?php
require("header.php");

?>
</div></td></tr><tr><td>
<div id="divnav">
       <?php
require("adminmenu.php");

?>
</div></td></tr>
<tr><td>
<div id="divSideContentLeft">
     <div id="dmu">CALENDAR</div><br/>
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
        </div></td>
     
<?php
	//Include the PS_Pagination id
		include('ps_pagination.php');
	
	//Connect to mysql db
	$conn = mysql_connect('localhost','root','');
	if(!$conn) die("Failed to connect to database!");
	$status = mysql_select_db('veradb', $conn);
	if(!$status) die("Failed to select database!");
?>   <td><div id="divContentCenter">                                     
<form method="post" action="" name="form1" id="form1">   

<br />
<p style="font-size:18px; margin-left:100px;">Search feedback  <input type="text" autofocus="autofocus" name="search_file" id="search_file" style="width:230px; font-size:18px;" id="textboxid"placeholder="date" /> 
				<input type="submit"  id="btn btn-primary" name="submit" style="height: 30px;width: 100px;background-color: #4b80b4;" value="Filter"></p> 
</form>
<p align="center" style="color: #2773d8;font-family: time new romans;font-size: 17;">Number of record:<?php include 'connection.php'; $count_item=mysql_query("select * from feedback " ) or die(mysql_error());
$count=mysql_num_rows($count_item);
//$a=count($sql2);
echo"<font color='red'>".($count)."</font>"; ?></p>
<?php 
if (isset($_POST['submit']) and isset($_POST['search_file'])) {
	$search_file = $_POST['search_file'];
	
$sql="select * from feedback where  date like '%$search_file%'  Order by UID DESC";
$try=mysql_query($sql);


if(mysql_num_rows($try)>=1){
	 
	//Create a PS_Pagination object
	$pager = new PS_Pagination($conn, $sql, 8, 10);
  	//The paginate() function returns a mysql result set for the current page
	$rs = $pager->paginate();
		
	 ?>
<form name="frmUser" method="post" action="" id="frm1">
<table border="0"  width="800" cellpadding="1" id="applytoorg">
<tr >
<th colspan=12>View feedback</th></tr>
<tr>
<td>feedback Id</td>
<td>UserType</td>
<td>username</td>
<td>comment</td>
<td>date</td>

</tr>
<?php
$i=0;
while($row = mysql_fetch_array($rs)) {
//$semister1=mc_decrypt($row['Password'], ENCRYPTION_KEY);
?>
<tr>
<td><?php echo $row["fbid"]; ?></td>
<td><?php echo $row["role"]; ?></td>
<td><?php echo $row["user_name"]; ?></td>
<td><?php echo $row["Comment"]; ?></td>
<td><?php echo $row["date"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</form>
<?php
}
else{
	
echo '<script type="text/javascript">alert("no result found!!");window.location=\'feedback1.php\';</script>';

 }}
 else
 {
 	$sql = "SELECT * FROM feed_back  ORDER BY date DESC";
	 
	//Create a PS_Pagination object
	$pager = new PS_Pagination($conn, $sql, 7, 10);
 	//The paginate() function returns a mysql result set for the current page
	$rs = $pager->paginate();
 	

?>
<form name="frmUser" method="post" action="" id="frm1">
<table border="0" width="800px"cellpadding="1" id="applytoorg">
<tr >
<th colspan=12>View feedback</th></tr>
<tr>
<td>feedback Id</td>
<td>UserType</td>
<td>username</td>
<td>comment</td>
<td>date</td>
</tr>
</tr>
<?php
$i=0;
while($row = mysql_fetch_array($rs)) {
?>
<tr>
<td><?php echo $row["fbid"]; ?></td>
<td><?php echo $row["role"]; ?></td>
<td><?php echo $row["user_name"]; ?></td>
<td><?php echo $row["Comment"]; ?></td>
<td><?php echo $row["date"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</form>
<?php

	//Display the navigation
	//echo $pager->renderFullNav();
	echo '<div style="text-align:center">'.$pager->renderFullNav().'</div>';
	}
?>
<td>
<div id="divSideContentRight">
	<?php
require("login2.php");

?>
</div>
</td>
</tr>

<tr><td><div id="divFooter"><?php
require("footer.php");

?></div></td></tr></div>
</table
</table></center>
</body>
</html>

