	<?php
	session_start();
	include("connection.php");
	?>
	<html>
	<head>
	<title>VITAL EVENT REGISTRATION INFORMATION MANEGMENT SYSTEM</title>
	<link  href="mystyles.css" rel="stylesheet" type="text/css" />
	<style>
#content
{
	background-color: #dfdfdf;
	width: auto;
	height: 600px;
	margin-left: 220px;
	margin-top: 10px;
	overflow-x: scroll;
	overflow-y: scroll;
}
	.textbox
	{
		height: 50px;
		width: 500px;
		border-top: none;
		border-left: none;
		font-family: Times New Roman;
		font-weight:italic;
		font-size: inherit;
		
	}
	.textarea
	{
		height: 100px;
		width: 500px;
		
	}
	.btn
	{
		height: 50px;
		width: 170px;
		margin-left: 80px;
	}
	#reset
{

		height: 50px;
		width: 170px;	
}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: capitalize;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
			width: auto;
		}
				.data-table tbody td img{
			width: 90px;
			height: 40px;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: left;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #69a3d6;
			border-color: #fbffff;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
</style>
	</head>

	<body id="bockground">
	<?php

if(isset($_SESSION['sun'])&&isset($_SESSION['spw']))
{
	$id=$_SESSION['uid'];
		$sql="select*from user where uid='$id'";
		$record=mysql_query($sql,$con);
		if(mysql_num_rows($record)>0)
		{
		while($row=mysql_fetch_array($record))	
		{
		
		$kebele=$row["kebele"]; 
		$role=$row["role"];
	

		}
		}
		else
		echo"No Result Found";
	
?>
	<div id="all">
<table>
	<div id="divHeader">
	<?php
	require("header.php");

	?>
	</div>
	<div id="divNav">
	<?php
require("RZWmenu.php");
?>
		
	</div>
	<tr>
	<td>
	<div id="divSideContentLeft">

<?php
require("RZWmenu2.php");
?>

	        </div>

	</td>
	<td>
		<div id="divContentCenter" >
	<center>
		<legend><h2>wellcome to our feedback</h2></legend>
		</center><?PHP
		?>
		<form method="POST" action="">
		<table border="1">
			
		 <?php

		$u="select * from feedbacktable where role='woredaofficer' And Status='New'";
		$feedbackid=$row['feedbackid'];
				 $view=mysql_query($u,$con);
					$rowCheck = mysql_num_rows($view);
				 if($rowCheck>0)
				 {
?>
				 	<tr><th> feedbackid</th>
			<th>user type</th>
			
			<th>email</th>
			<th>comment</th>
			<th>date</th>
			<th>Action</th></tr>
          
           	<?php
				while($row = mysql_fetch_array($view))
	            {
	            	
										
						echo "<tr>";
		            	echo "<td>".$row['feedbackid']."</td>";
		            	echo "<td>".$row['role']."</td>";
		          
		            	echo "<td>".$row['email']."</td>";
		            	echo "<td>".$row['comment']."</td>";
		            	echo "<td>".$row['dates']."</td>";
                                 ?>
    <td><?php echo '<a  href="viewRZWfeedback.php?id='.$row['feedbackid'].'">cancel</a>';?></td>
                                 <?php
		            	//echo "<td><input type=submit name='view' value='cancel'></td>";
		            	echo "</tr>";
		            
				// <!-- whileloop ends here-->
				}
				}
			
	            	if(isset($_GET['id']))
	            	{
	            		
		            	$id=$_GET['id'];
						$upd="update feedbacktable set Status='seen' where feedbackid='$id'";
						$updated=mysql_query($upd,$con);
							if(mysql_affected_rows($con))
								echo "Message Viewed:";
							
	            	}
			            	
	            	  
				



				
				
                    ?>

                    </table>
                    </form>

			</div>
			  </td>

					</tr>

					<tr>
					<td>
					<div id="divFooter"> 
						<?php
					require("footer.php");

					?>
						
					</div>
				</td>
				</tr>
</table> 
     </div>                                                                  
<?php
}
else
{
header("location:home.php");
}
?>
</body>
</html>