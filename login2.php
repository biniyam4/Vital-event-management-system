
<html>
<? php
session_start();
include("connection.php");
?>
<head>
<title>VITAL EVENT REGISTRATION INFORMATION MANEGMENT SYSTEM </title>
<link  href="mystyles.css" rel="stylesheet" type="text/css"  />
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

	</script>
</head>
<body>

<table>
<tr>

<td>

	
<div id="myform">
 	
               
  <?php
if(isset($_POST["login"]))
{
	
	$un=$_POST["un"];
	$pass=sha1($_POST["pass"]);
	
	if($con)
	{ 
	//account
		$sql="select * from account where username='$un' and password='$pass'";
		$matchfound=mysql_query($sql);
if($row=mysql_fetch_assoc($matchfound))
 {	
 $uid=$row["uid"];
 $un=$row["username"];
 $pw=sha1($row["password"]);
 $status=$row["status"];

 		//user

$sqll="select * from user where uid='$uid'";
	$matchfound1=mysql_query($sqll,$con);
	if($row=mysql_fetch_assoc($matchfound1))
	{
	$uid=$row["uid"];
	$fname=$row["ufname"];
	$mname=$row["umname"];
	$lname=$row["ulname"];
	$mobile=$row["mobile"];
	$sex=$row["sex"];
	$role=$row["role"];
	$photo=$row["photo"];
	$email=$row["email"];
	}
		//session
		$fullname=$fname." ".$mname." ".$lname;
		$_SESSION['fullname']=$fullname;
		$_SESSION['sun']=$un;
		$_SESSION['spw']=$pw;
		$_SESSION['srole']=$role;
		$_SESSION['uid']=$uid;
		$_SESSION['sphoto']=$photo;

			if($role=="Admin" &&  $status=="active")
			  header("location:Adminpage.php");
			  
			else if($role=="federaloficer" &&  $status=="active")
			  header("location:federalregistrarpage.php");
			  else if($role=="reginalofficer" &&  $status=="active")
			  header("location:reginalofficer.php");
			  
			else if($role=="kebeleofficer" &&  $status=="active")
			  header("location:kebeleregistrarpage.php");
			  
			else if($role=="woredaofficer" &&  $status=="active")
			  header("location:woredaofficer.php");
			  
			else if($role=="zonalofficer" &&  $status=="active")
			   header("location:zonalofficer.php");
			   else if($role=="statician" &&  $status=="active")
			   header("location:staticianpage.php");
			 else if($role=="federaladmin" &&  $status=="active")
			   header("location:branchadmin.php");
			
				
			else
			{
			echo "<script>alert('your account blocked contact adminstrator')</script>";
		    	
			}
}			
else
echo"<font color=red size=3>Invalid username or password</font>";
}
else
{
echo "Invalid username or password";
header("location:home.php");	
}
 }

 
?><table>
               <form action="" method="post"><br/><br/>
               <tr><th><h2><font size=5><b>LOGIN HERE</b></font></h2></th></tr>
				<tr><td><label><font size=5><b>User Name</b></font></label><input type="text" name ="un" placeholder="Enter User Name" id="user" autofocus=""></td></tr>
				<tr><td><label><font size=5><b>Password</b></font></label> <input type="password" name ="pass" autofocus="" required placeholder="*********" id="pass" ></td></tr>
				<tr><td><input type="submit"name="login"value="login" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="reset"value ="Reset" ></td></tr>	
               </form>
               </table></div>
     
</td>
</tr>
</table>

</body>
</html>
