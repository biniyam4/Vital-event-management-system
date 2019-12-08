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
		<div id="divContentCenter" ><br><br><br><br><br>
		<center>
		<legend><h2>wellcome to death people information:</h2></legend>
		</center>
		<form>
		<table border="1">
		<tr><th> birthid</th>
			<th>fname</th>
			<th>lname</th>
			
			<th> sex</th>
			<th>nationality</th>
			<th>birthdate</th>
			<th>birthregion</th>
			<th>birthzone</th>
			<th> birthcity</th>
			<th>birthworeda</th>
			<th>birthkebele</th>
			<th>dateofdeath</th>
			<th>workposition</th>
			<th>marriagestatus</th>
			<th>deathregion</th>
			<th>deathworeda</th>
			<th>deathcity</th>
			<th>deathkebele</th>
			<th>deathreason</th>
			
           </tr>
		 <?php

		$u="select * from deathtable";
				 $view=mysql_query($u,$con);
					$rowCheck = mysql_num_rows($view);
				 
				 
				while($row = mysql_fetch_array($view))
	            {
	            	echo "<tr>";
	            	echo "<td>".$row['birthid']."</td>";
	            	echo "<td>".$row['fname']."</td>";
	            	
	            	echo "<td>".$row['lname']."</td>";
	            	echo "<td>".$row['sex']."</td>";
	            	echo "<td>".$row['nationality']."</td>";
	            	echo "<td>".$row['birthdate']."</td>";
	            	echo "<td>".$row['birthregion']."</td>";
	            	echo "<td>".$row['birthzone']."</td>";
	            	echo "<td>".$row['birthcity']."</td>";
	            	echo "<td>".$row['birthworeda']."</td>";
	            	echo "<td>".$row['birthkebele']."</td>";
	            	echo "<td>".$row['dateofdeath']."</td>";
                    echo "<td>".$row['workposition']."</td>";
	            	echo "<td>".$row['marriagestatus']."</td>";
	            	echo "<td>".$row['deathregion']."</td>";
	            	echo "<td>".$row['deathworeda']."</td>";
	            	echo "<td>".$row['deathcity']."</td>";
	            	echo "<td>".$row['deathkebele']."</td>";
	            	echo "<td>".$row['deathreason']."</td>";
	            	echo "</tr>";
	            	
}
                    ?>
                    </table>
                    </form>
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