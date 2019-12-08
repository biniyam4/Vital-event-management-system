	<?php
	session_start();
	include("connection.php");
	?>
	<html>
	<head>
	<title>VITAL EVENT REGISTRATION INFORMATION MANEGMENT SYSTEM</title>
	<link  href="mystyles.css" rel="stylesheet" type="text/css" />
	</head>

	<body id="bockground">
	<?php

if(isset($_SESSION['sun'])&&isset($_SESSION['spw']))
{
	$id=$_SESSION['uid'];
		$sql="select*from user where uid='$id'";
		$record=mysql_query($sql,$con);
		if(mysql_num_rows($record)>0)
		{
		while($row=mysql_fetch_array($record))	
		{
		$nation=$row["nationality"];	
		$uid=$row["uid"];	
		$region=$row["region"];
		$zone=$row["zone"];
		$woreda=$row["woreda"];
		$city=$row["city"];
		$kebele=$row["kebele"]; 

		}
		}
		else
		echo"No Result Found";
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
	require("kebeleregistrarmenu.php");
	?>
		
	</div>
	<tr>
	<td>
	<div id="divSideContentLeft">


	        </div>

	</td>
	<td>
		<div id="divContentCenter" >
		<p>WELLCOME TO BABY INFORMATION UPDATION!</p>
		<form method="post" action="">
		<table><tr><td><p>inter baby id:</p></td><td>
			<input type="text" name="birthid" value=""/></td><td>
			<input type="submit" name="EDIT" value="search"/></td></tr></table>
		</form>
					           <?php

						if(isset($_POST["EDIT"]))
						{	
						$birthid=$_POST['birthid'];
						$sql="select * from birthtable where birthid='$birthid' and uid='$uid'";
						$recordfound=mysql_query($sql,$con);
						echo" <fieldset>";
							if(mysql_affected_rows($con))
							{
							$row=mysql_fetch_assoc($recordfound);
							echo "<table><form action='' method=post>";
							echo"<tr><td>birthid:</td><td><input type=text name='birthid' value='".$row["birthid"]."'readonly></td></tr>";
							echo "<tr><td>fname:</td><td><input type=text name='fname' value='".$row["fname"]."' required></td></tr>";
							echo"<tr><td>mname:</td><td><input type=text name='mname' value='".$row["mname"]."'required></td></tr>";
							echo "<tr><td>lname:</td><td><input type=text name='lname' value='".$row["lname"]."' required></td></tr>";
							echo"<tr><td>mother fname:</td><td><input type=text name='motherfname' value='".$row["motherfname"]."'required></td></tr>";
							echo "<tr><td>mothr lname:</td><td><input type=text name='mothermname' value='".$row["mothermname"]."' required></td></tr>";
							echo"<tr><td>sex:</td><td><input type=text name='sex' value='".$row["sex"]."'required><br>";
							echo "<tr><td>birthdate:</td><td><input type=text name='birthdate' value='".$row["birthdate"]."' required></td></tr>";
							
							echo "<tr><td><input type=submit name=update value=update></td>";
							echo "<td><input type=reset value=reset></td></tr>";
							echo"</form></table>";
							}
							else
							echo "No result found";
							}
							?>
							
						
								<?php	
								//UPDATE				
							if(isset($_POST["update"]))
							{
							$birthid=$_POST["birthid"];
							$fname=$_POST["fname"];
							$mname=$_POST["mname"];
							$lname=$_POST["lname"];
							$motherfname=$_POST["motherfname"];
							$mothermname=$_POST["mothermname"];
							$sex=$_POST["sex"];
							$birthdate=$_POST["birthdate"];
					
							
							$sql="update birthtable set fname='$fname',mname='$mname',lname='$lname',motherfname='$motherfn,mothermname='$mothermname',sex='$sex',birthdate='$birthdate' where birthid='$birthid'";
							$updated=mysql_query($sql,$con);
							if(mysql_affected_rows($con))
							echo mysql_affected_rows($con)." record/s update successfully!";
							else
							echo "Unable to update!";	
							}
						echo" </fieldset>";
					
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
					
				</div>
				</td>
					</tr>

					<tr>
					<td>
					<div id="divFooter"> 
						<?php
					require("footer.php");

					?>
						
					</div>
				</td>
				</tr>
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