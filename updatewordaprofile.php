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
{$id=$_SESSION['uid'];
		$sql="select*from user where uid='$id'";
		$record=mysql_query($sql,$con);
		if(mysql_num_rows($record)>0)
		{
		while($row=mysql_fetch_array($record))	
		{
		$uid=$row["uid"];	
		$ufname=$row["ufname"];
		$umname=$row["umname"];
		$ulname=$row["ulname"];
		$mobile=$row["mobile"];	
		$email=$row["email"];
		$photo=$row["photo"];
		
		
		}
		}
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

require("zonemenu.php");
?></div>
	<tr><td><div id="divSideContentLeft">

<?php
require("zonemenu2.php");
?>

	        </div>

	</td>
	<td>
		<div id="divContentCenter" >
		<p>WELLCOME TO profile update page!</p>
		
					           <?php

						
		echo "<table><form action='' method=post>";
		echo"<tr><td>user id:</td><td><input type=text name='uid' value='$uid'readonly></td></tr>";
		echo "<tr><td>first name:</td><td><input type=text name='ufname' value='$ufname' ></td></tr>";
		echo"<tr><td>fathermname:</td><td><input type=text name='umname' value='$umname'></td></tr>";
		echo"<tr><td>gfathername:</td><td><input type=text name='ulname' value='$ulname'></td></tr>";
		echo "<tr><td>mobile:</td><td><input type=text name='mobile' value='$mobile' ></td></tr>";
		
		echo "<tr><td>email:</td><td><input type=text name='email' value='$email' ></td></tr>";
		
		echo "<tr><td>photo:</td><td><input type=file name='photo' value='$photo'></td></tr>";
		
		
		
		echo "<tr><td><input type=submit name=update value=update></td>";
		echo "<td><input type=reset value=reset></td></tr>";
		echo"</form></table>";
		
	
		?>
		
	
								<?php	
								//UPDATE				
							if(isset($_POST["update"]))
							{
							$uid=$_POST["uid"];
							$fname=$_POST["ufname"];
							$mname=$_POST["umname"];
							$lname=$_POST["ulname"];
							$mobile=$_POST["mobile"];
							$email=$_POST["email"];
							$photo=$_POST["photo"];
							
							
							
			$sql="update user set ufname='$fname',umname='$mname',ulname='$lname',mobile='$mobile',email='$email',photo='$photo' where uid='$uid'";
							$updated=mysql_query($sql,$con);
							if(mysql_affected_rows($con))
							{
							
						echo"<font color=green size=10> your profile updateed successfully!!!</font>";
						echo' <meta content="5;updaterzwprofile.php" http-equiv="refresh" />';
								
								}
							
								else{
									
								
							echo "<font color=red size=5>please add some data on the text box on the row you want?</font> ".mysql_error($con);	
							echo' <meta content="5;updaterzwprofile.php" http-equiv="refresh" />';
							}
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