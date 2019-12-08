<?php
session_start();
include("connection.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>VITAL EVENT REGISTRATION INFORMATION MANEGMENT SYSTEM</title>
</head>

<body>
<?php

if(isset($_SESSION['sun'])&&isset($_SESSION['spw']))
{
?>
<?php
  include "db/main.php";

			$sel=mysql_query("SELECT * FROM feedback");
			echo '<table style="width:500px;border:1px solid #336699;border-radius:10px;" id="vtable"><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="3">Names</th>
			<th bgcolor="#336699"><font color="white" size="3">Email</th>
			<th bgcolor="#336699" ><font color="white" size="3">Message</th>
		</tr>';
			$rowcolor=0;
			$intt=mysql_num_rows($sel);
			echo"<br><br>";
			echo"<font face='times new roman' size='2px' color='red'>";
			echo'There are &nbsp;'.$intt.'&nbsp;  messages.';
			echo"</font>";
			echo"</script>";
			echo"<br><br>";
			while($row=mysql_fetch_array($sel)){
		
  print ("<tr>");
	 print ("<td><font size='2'>" . $row['username'] . "</td>");
	  print ("<td><font size='2'>" . $row['email'] . "</td>");		
	  print ("<td><font size='2'>" . $row['message'] . "</td>");
		
  print ("</tr>");
  }
print( "</table>");
			?>  
			<?php
}
else
{
header("location:home.php");
}
?>  
</body>
</html>
