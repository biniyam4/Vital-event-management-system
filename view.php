<!DOCTYPE html>

<?php
include("connection.php");
	session_start();
?>
<html>
	<head>
		
		<title>vVITAL EVENT REGISTRATION INFORMATION MANEGMENT SYSTEM</title>

	
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		
	</head>
	<body>
	<div id="all">
	<div class="container-fluid display-table">
		<div class="row display-table-row"> 

		<!--side menu-->

	 
			<!--Main content Area-->

		    <div>
      	<tbody>

      		<?php
      	
				if($con)
				{

					$sql="select * from wife_table";
				    $userexist=mysql_query($sql,$con);
				     $c=mysql_num_rows($userexist);  
				    if($c >='1')
				    {
					while($row = mysql_fetch_array($userexist)){
				
			?>

				<tr>
					<td><?php echo $row['wife_id']; ?></td>
					
					<td>
				</tr>
			<?php
		     
				}
				}
			}
			?>
	      	</tbody>
	      	


   

	      </div>
	      </div>

       
 
	    
	</body>
	</html>