<?php
session_start();
include("connection.php");
?>
<html>
<head>
<title>VITAL EVENT REGISTRATION INFORMATION MANEGMENT SYSTEM</title>
<link  href="mystyles.css" rel="stylesheet" type="text/css"  />
</head>

<body id="bockground">
<div id="all">
<?php

if(isset($_SESSION['sun'])&&isset($_SESSION['spw']))
{
?>
<table>
<div id="divHeader">
<?php
require("header.php");

?>
</div>
<div id="divNav">
<?php
require("kebeleregistrarmenu.php");
?></div>
<tr><td><div id="divSideContentLeft">

<?php
require("kebelemenu2.php");
?>

 
        </div>

</td>
<td>
<div id="divContentCenter">
	 <?php	
	
	$u="select * from birthtable";
			$view=mysql_query($u,$con);
					$rowCheck = mysql_num_rows($view);
if($rowCheck<1)
{
echo'<p><font color="red">currently has no registerd baby!!</font></p>';
echo' <meta content="5;countkebelebirth.php" http-equiv="refresh" />';
}
else
{

	echo"<font face='Times New Roman' size='3' color='black'><h2>currently Ethiopa register:<font color='green'>".$rowCheck.'</font> total birth baby</h2></font>';

	}
	
	
?>
</div></td>
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

	
</div>
</td>
</tr>

<tr><td><div id="divFooter"><?php
require("footer.php");

?></div></td></tr>

</table>
<?php
}
else
{
header("location:home.php");
}
?>
</div>
</body>
</html>
