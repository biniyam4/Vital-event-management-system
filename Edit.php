<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>VITAL EVENT REGISTRATION INFORMATION MANEGMENT SYSTEM</title>
<style type="text/css">
<!--
body {
	background-color: #99CCCC;
	border: thick none #0033FF;
}
-->
</style>
</head>

<body>
<div id="all">
<?php
 include "../db/main.php";
?>
<form action="<?php echo $_PHP_SELF;?>" method="post" enctype="multipart/form-data">

Enter ID:<input type="text" name="id" id="id" />
<input type=submit name="submit" id="submit" value="Edit" /><input type="submit" name="edit" value="viewtoEdit" />

</form>

<?php
if($_REQUEST['submit'])
{

$id=$_REQUEST['id'];
  
     $sql="select * from account where id=$id";

$result=mysql_query($sql) or die(mysql_error());


   while($res=mysql_fetch_assoc($result))
    {
	    $id=$res['id'];
		  $nam=$res['username'];
		   $pass=$res['password'];
		    $photo=$res['photo'];
			 $pos=$res['position'];
			  
		
	}
  
        echo "<form action='' method='post' enctype='multipart/form-data'>";

?>

 <table>
 <tr>
 <td>
   ID:</td><td><input type=text value="<?php echo $id;?>" name='id' /></td>
   </tr>
   <tr>
   <td>
   Name</td><td>  <input type=text value="<?php echo $nam;?>" name='un'/></td></tr>
   <tr>
   <td>
    Password:</td><td><input type=text value="<?php echo $pass;?>"  name='pw'/></td></tr>
	<tr>
	<td>
	Photo:</td><td><input type=file  name=file id=file  value="<?php echo $photo;?>"/></td>
	</tr>
<?php 	   echo "<tr><td colspan=2><input type=submit value=Save name='submitsave'></td></tr>";?>

	
	</table><?php
	
	}
	 else if($_REQUEST['edit'])
	 {
	  
  $sql= "select * from account";		 

     
$result=   mysql_query($sql) or die(mysql_error());
    echo "<table border=1>";
	 echo "<tr>";
	  while($f=mysql_fetch_field($result))
	  {
	   echo "<th>".$f->name."</th>";
	   
	  }
	  echo "</tr>";
	      
		   while($res=mysql_fetch_array($result))
		   {
		    echo "<tr>";
		      
			   echo "<td>".$res[0]."</td>";
			   
			  echo "<td>".$res[1]."</td>";
			  			  echo "<td>".$res[2]."</td>";
						  			  echo "<td><img src='../".$res[3]."' width=40 height=45></td>"; 
			  
			  echo "</tr>";
			  
		   }
		 
			
		    echo "</table>";
		   

echo "</form>";
		 
	 }
	 
	  
	?>
	</div>
	
</body>
</html>
<?php
  if(isset($_REQUEST['submitsave']))
  {
     $id=$_REQUEST['id'];
	  $name=$_REQUEST['un'];
	   $pass=$_REQUEST['pw'];
	     move_uploaded_file($_FILES['file']['tmp_name'],"../upload/".$_FILES['file']['name']);
		 
	     $photo="upload/".$_FILES['file']['name'];
		  
		   mysql_query("update account set id=$id,username='$name',password='$pass',photo='$photo' where id=$id") or die(mysql_error());
		   
		  
			
  }
?>