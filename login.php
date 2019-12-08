<?php
	include("connection.php");  
 
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>vera login page </title>

<link  href="mystyles.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
<script type='text/javascript'>
function formValidation(){
//assign the fields
    var firstname=document.getElementById('user');
	var middlename= document.getElementById('pass');
   
if(isAlphanumeric(firstname, "please enter Your user name")){

if(isAlphanumeric(middlename, "please enter Your password")){
	return true;
	}}
	
	
return false;
		
}	




function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z\/]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

	</script>
</head>
<body>

<table>
<tr>
<!--Sub menus-->
<td>
<br>
<br>
	
<div>

  <form id="form1" name="login" method="POST" action="login.php" onsubmit="return formValidation()">
 <div> 
 
 
 <div style="float:left;" ><strong><font color="white" size="2px"><h1>Member Login</h1></font></strong></div>
 
 </div>
 <p align="center"><img src="image/p.jpg" title="Member Login" width="80"></p>
  <table width="286" align="top" align="center" border="0">
  
  <tr>

	       <td><font color="red">*</font> Username:</td><td>
		   <input type="text"   name="username"  id="user" placeholder="user_name" ></td>
		 
	     </tr>
		 <tr>
	       <td><font color="red">*</font> Password:</td><td><input type="password" name="password" id="pass" placeholder="password"></td>
	     </tr>
		 
 
  <tr>
    
	<br>
    <td><input type="submit" name="submitlogin" value="login" />
    <input type="reset" name="reset"  value="reset" /></td>
  </tr>
</table> 
  </form> 
	   
 <?php
	   if (isset($_POST['submitlogin'])){ 
	   $server="localhost";
$dbuser="root";
$dbpass="";
$dbname="veradb";
$con=mysqli_connect($server,$dbuser,$dbpass,$dbname) or mysqli_error($con);
	    $username=$_POST['username'];
	    $password=$_POST['password'];
	    $sql = "SELECT * FROM user WHERE user_name='$username' AND password='$password'";
	    $result = mysqli_query($con,$sql); 
		// TO check that at least one row was returned 
		$rowCheck = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
        $status=$row['status'];
		 if($row['usertype']=='admin'){ 
		 if($status==1)
		{
			$_SESSION['userid']=$row['userid'];
		$_SESSION['username']=$row['user_name'];
		$_SESSION['role']=$row['usertype'];
         echo "<script>window.location='adminpage.php';</script>";
			} 
			else
		{
		echo'<p class="wrong"> alert(Your Account is not active Please contact the system Admin)</p>';                                
		   //echo' <meta content="4;home.php" http-equiv="refresh" />';	
		}
		}	
			else if($row['usertype']=='employee'){
          if($status==1)
		{	
			$_SESSION['user_id']=$row['user_id'];
		$_SESSION['username']=$row['username'];
		$_SESSION['role']=$row['role'];
		
         echo'  <meta content="1;employee.php" http-equiv="refresh" />';
			}
			else
		{
		echo'  <p class="wrong"> Your Account is not active Please contact the system Admin</p>';                                
		   echo' <meta content="4;home.php" http-equiv="refresh" />';	
		   
		}
		}
			else if($row['usertype']=='statician'){
          if($status==1)
		{
			
		$_SESSION['user_id']=$row['user_id'];
		$_SESSION['username']=$row['username'];
		$_SESSION['role']=$row['role'];
         echo'  <meta content="1;statician.php" http-equiv="refresh" />';
			}
			else
		{
		echo' <p class="wrong"> Your Account is not active Please contact the system Admin</p>';                                
		   echo' <meta content="4;home.php" http-equiv="refresh" />';	
		}
		}
		else if($row['usertype']=='federalofficer'){
          if($status==1)
		{
			
		$_SESSION['user_id']=$row['user_id'];
		$_SESSION['username']=$row['username'];
		$_SESSION['role']=$row['role'];
		
         echo'  <meta content="1;federalofficer.php" http-equiv="refresh" />';
			}
			else
		{
		echo' <p class="wrong"> Your Account is not active Please contact the system Admin</p>';                                
		   echo' <meta content="4;login.php" http-equiv="refresh" />';	
		}
		}
				else if($row['usertype']=='kebeleofficer'){
          if($status==1)
		{
			
		$_SESSION['user_id']=$row['user_id'];
		$_SESSION['username']=$row['username'];
		$_SESSION['role']=$row['role'];
		
         echo'  <meta content="1;kebeleofficer.php" http-equiv="refresh" />';
			}
			else
		{
		echo' <p class="wrong"> Your Account is not active Please contact the system Admin</p>';                                
		   echo' <meta content="4;home.php" http-equiv="refresh" />';	
		}
		}
				else if($row['usertype']=='woredaofficer'){
          if($status==1)
		{
			
		$_SESSION['user_id']=$row['user_id'];
		$_SESSION['username']=$row['username'];
		$_SESSION['role']=$row['role'];
		
         echo'  <meta content="1;woredaofficer.php" http-equiv="refresh" />';
			}
			else
		{
		echo' <p class="wrong"> Your Account is not active Please contact the system Admin</p>';                                
		   echo' <meta content="4;home.php" http-equiv="refresh" />';	
		}
		}
		else {
		
		echo'<br>';
       echo'  <p class="wrong">Check Your username or/and Password</p>';                                
		   echo' <meta content="4;home.php" http-equiv="refresh" />';	
		}
		}
   // mysqli_close($conn);
    ?>
 
	   

</div>
</td>
</tr>
</table>
<!--End Body of section-->

<!--End of Footer-->
</body>
</html>
