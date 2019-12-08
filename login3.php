<?php
session_start();
include("./connection.php");
?>
 <html>
<head>
<title>login</title>
<link  href="mystyles.css" rel="stylesheet" type="text/css"/>
</head>
<body bgcolor="#B0C4DE">
<div id="divWrapper">
<center>
<table border=0>
<tr><td colspan=6><div id="divheader"><?php include("header.php");?></div>
<div id="divNav">
<?php
include("menu.php");
?></td></tr><tr><td>&nbsp;</td></tr>
<?php 
if(isset($_POST["login"]))
{
	$un=$_POST["un"];
	$password=$_POST['pass'];
	$pass=sha1($_POST["pass"]);
	$server="localhost";
$dbuser="root";
$dbpass="";
$dbname="veradb";
$con=mysql_connect($server,$dbuser,$dbpass,$dbname) or mysql_error($con);
	if($con)
	{
		$sql="select * from user where user_name='$un' and Password='$pass' and status=1";
		$matchfound=mysql_query($sql,$con);
		$row=mysql_fetch_array($matchfound,$con);
		   $role=$row['usertype'];
			$un=$row['user_name'];
			$pw=$row['password'];
			
		$_SESSION['user_name']=$un;
			$_SESSION['password']=$pw;
			$_SESSION['usertype']=$role;
		if($_SESSION['usertype']=="admin")
				header("location:adminpage.php");
					else
			echo "Invalid username/password";
	}else
		echo "Connection Failed";
}
?>
<tr><td><!--div id="divSideContentLeft"><!--h1>Side Links</h1->
<ul>
	<li><a href="home.php" >Home</a></li>
	<li><a href="about.php" >about us</a></li>		
	<li><a href="contact.php">contact us</a></li>	
	<li><a href="">rule</a></li>
	<li><a href="">feadback</a></li>	
	<li><a href="login.php">login</a></li>
	
</ul--></div>

</td>
<td>
<div id="divContentCenter">
<br><center><fieldset ><legend align="center"><h1 style="text-decoration: none;">Login Form</h1></legend>
<form action="" method="post">
<table style="width: auto;"><tr>
<td>Username:</td><td><input type="text" name="un" pattern="[a-zA-Z/]+" placeholder="enter user name" required></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>Password:</td><td><input type="password" name="pass" placeholder="enter password" required></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td colspan="2"><input type="submit" name="login" value="Login"></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td><input type="button" name="fg" value="forgot password"/></td></tr>
</table></form></fieldset></center><br><br>
</td></tr>
<tr><td colspan="6">
<div id="divFooter">

<?php include("footer.php");
?>	
</div>
</td>
</tr>
</center>
</div>
</table>
</body>
</html>