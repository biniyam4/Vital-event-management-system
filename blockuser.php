<?php
session_start();
include("connection.php");
?>
<form action="createaccount.php" method="post">									
<?php								
$query1 = mysql_query("select * from account")
or die(mysql_error());
$count = mysql_num_rows($query1);	
if ($count != '0'){?>
<table border="1" width="60%" >
<tr>
<th>UID</th>
<th>User type</th>
<th>User name</th>
<th>Status</th>
<th>Block</th>
</tr>
<?php
while($row = mysql_fetch_array($query1)){
	$id=$row["uid"];							 
	?>
<tr>

<td><?php echo $row["uid"]; ?></td>


<td><?php echo $row["username"]; ?></td>
<td><?php echo $row["status"]; ?></td></tr><tr><td>
<a href="action.php?status=<?php echo $row['uid'];?>" id="btn" onchange="Block" onclick="return confirm('Are you sure <?php echo $id?>');">
 <?php
 $select=mysql_query("select * from account WHERE uid='$id' ");
$row=mysql_fetch_object($select);
$status_var=$row->status;
IF($status_var=='yes'){
	?>
 <input type="button" value="Block" style="background-color: #068bf9;color: #fffbfb;height: 25px;width: 100px; text-decoration: none;"/> </a>
	 <?php
}
else
{
 ?>
<td><input type="button" value="UNBlock" style="background-color: red;color: #ffffff;height: 25px;width: 100px; text-decoration: none;" /> </td>
</tr></td>
<?php
$i++;
}
}
}
?>
																					
</table>					
</form>		            
        
	

	

	 
<?php
require("footer.php")
?>

