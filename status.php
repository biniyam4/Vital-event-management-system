<?php
$conn=mysql_connect("localhost","root","") or die(mysql_error());
	$sdb=mysql_select_db("veradb") or die(mysql_error($conn)); 
if(isset($_GET['status']))
{
	$status=$_GET['status'];
	$sql="select * from user where user_id='$status'";
	$view=mysql_query($sql,$conn);
	while($row = mysql_fetch_array($view))
	{
		$st=$row->status;
	
	if($st=='0')
	{
		$status2=1;
	}
	else
	{
		$status2=0;
	}
	$update=mysql_query($conn,"update users set status='$status2' where user_id='$status' ");
	if($update)
	{
		header("Location:updateacc.php");
	}
	else
	{
		echo mysql_error($conn);
	}
	}
	?>
     
    <?php
}
?>