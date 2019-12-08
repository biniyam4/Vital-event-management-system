<?php 

require("config.php" );
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>VITAL EVENT REGISTRATION INFORMATION MANEGMENT SYSTEM</title>
 	<link rel="stylesheet" type="text/css" href="mucss.css">
 </head>
 <body style="background-color: #7f8c8d">
 <div id="main-wrapper">
 	<center>
<h2>login pag</h2>	
<img src="image/p.jpg" class="avatar"/>
</center>

 <form class="myform" action="register.php" method="post">
 <label>username</label><br> 
 <input name="username" type="text" class="inputvalues" placeholder="type your username" required /><br>
 <label>conform password</label><br>
  <input name="password" type="password" class="inputvalues" placeholder="type your conform password" required /><br>

  <label>password</label><br>
 <input name="cpassword" type="password" class="inputvalues" placeholder="type your password" required /><br>
 <input name="submit_btn" type="submit" id="signup-btn" value="sign-up"/><br>
 <input type="button" id="back-btn" value="back"/>

</form>
<?php 
if(isset($_POST['submit_btn']))
{
	echo '<script type="text/javascrip">alert("sign-up button clicked")</script>';
$username=$_POST['ussername'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
if ($password==$cpassword)
 {
	$query="select * from logindb where (username='$username')";
	$queru_run=myspli_query($con,$query); 
	if (myspli_num_rows($queru_run)>0)
	 {
		echo '<script type="text/javascrip">alert(" user alrteady exist..try another username")</script>';
	}
	{
		$query="insert into user values('$username','$password')";
		$queru_run=myspli_query($query);
		 if ($queru_run) 
		 {
		 	echo '<script type="text/javascrip">alert(" user registered..go to login")</script>';
		 	}
		 		else
		 		{
		 		echo '<script type="text/javascrip">alert(" error")</script>';
	}	
		 		
	}
	}
}


 ?>
</div>
 </body>
 </html>