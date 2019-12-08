 
<?php  
  /*session_start();
	  if(isset($_SESSION['password']) && isset($_SESSION['username']) )
	  {
      session_destroy();
      header("Location:index.php");
	  
	  }
	  else{
	  header("Location:index.php");
	  }
	 */
	  
session_start();
unset($_SESSION['fullname']);
unset($_SESSION['sun']);
unset($_SESSION['spw']);
unset($_SESSION['srole']);

if( !isset($_SESSION['sun']) || !isset($_SESSION['spw'])||!isset($_SESSION['fullname'])||!isset($_SESSION['srole']))
header("location:home.php");

?>  
