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
?><div id="all">
					<table id="tb">
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
			<div id="divContentCenter" >
			<?php
					if(isset($_POST['register']))
					{
					$uid=$_POST['feedbackid'];
					$role=$_POST['usertype'];
					$username=$_POST['username'];
					$comment=($_POST['comment']);

					$date=$_POST['dates'];

					//insert data in to the table
					$sql="INSERT INTO feedbacktable(feedbackid,usertype,username,comment,date) VALUES('$uid','$role','$username','$comment','$date')";
					mysql_query($sql) or die(mysql_error());
					echo "<h2>your feedback  successfully sent!!!</h2>";

					}




					?>

			<fieldset style="border-radius:5px;">
			<legend>feed back form</legend>
			<table bgcolor="#F0F8FF">
			<form action="" method="post">

			<tr>
			<td width="140px" height="40px" style="font-size:19px;">feedback ID
			</td>
			<td width="140px">
					<input type="text" name="feedbackid" pattern="[A-Za-z0-9]+"  placeholder="Enter id " required="" style="font-size:12pt;c                      olor:black;border:1px solid gray;padding:2px; width:230px;"> 
			</td>
			<td width="140px" >
				
		</td>
		</tr>
		<tr>
		<td width="140px" height="40px"  style="font-size:19px;">user type
		</td>
		<td width="140px">
		<select name="usertype" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;">
					<option>--Select Role--</option>
					<option value="Admin">Admin</option>
					<option value="federaloficer">federaloficer</option>
					<option value="statician">statician</option>
					
					<option value="woredaofficer">woredaofficer</option>
					<option value="zonaloffice">zonaloffice</option>
			</select>
			</td>
			</tr>
			<tr>
			<td width="140px" height="40px"  style="font-size:19px;">User_name
			</td>
			<td width="140px" >
					<input type="text" name="username" pattern="[A-Za-z0-9]+" placeholder="Enter username" required="" style="font-size:12pt                    ;color:black;border:1px solid gray;padding:2px; width:230px;">
			</td>
			<td width="140px" >
				
			</td>
			</tr>


			<tr>
			<td>
					comment
					</td>
					<td> 
					<input type="textbox" height="100" width="30"   name="comment" pattern="[A-Za -z0-9 ]+" placeholder="comment" >
					</td>
					</tr>

					<td width="140px" >
						
					</td>
					
					<tr>
					<td width="140px" height="40px"  style="font-size:19px;">date
					</td>
					<td width="140px">
					<input type="text" name="dates" value=""> 
					</td>
					<td width="140px">
						
					</td>
					</tr>



					<tr>
					<td width="140px" height="40px">
						
					</td>
					<td>
							<input type='submit' name='register' value='Save' style="border-radius:5px;background:#808675; width:60px; font-                             size:12pt;border:1px solid #336600;padding:2px; color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type='reset'  value='Clear' style="border-radius:5px;font-size:12pt;border:1px solid #336600;padding:2px;                             color:white; background:#808675;;width:60px;">
				
			</td>
			</tr>
			</form>

			</table>
				
			</fieldset>

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

			</div>
			</td>
			</tr>
			<tr>
			<td>
					<div id="divFooter"><?php
					require("footer.php");

					?>
						
				</div>
				</td>
				</tr>
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

