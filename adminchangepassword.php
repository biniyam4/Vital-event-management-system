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
		width: 70px;
		margin-left: 80px;
	}
	#reset
{

		height: 50px;
		width: 70px;	
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
		$sql="select*from account where uid='$id'";
		$record=mysql_query($sql,$con);
		if(mysql_num_rows($record)>0)
		{
		while($row=mysql_fetch_array($record))	
		{
		$uid=$row["uid"];	
		$ufname=$row["username"];
		$umname=$row["password"];
		
		
		
		}
		}
	
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
require("adminmenu.php");
?></div>

<tr><td><div id="divSideContentLeft">
  <?php
require("adminmenu2.php");
?>

		        </div>

		</td>   

		 
		<td>
			<div id="divContentCenter">
				   <p>CHANGE YOUR USER NAME AND PASSWORD HERE!!!</p>
		
<table >
					           <?php

						
		echo "<form action='' method=post>";
		echo"<tr><td>user id:</td><td><input type=text name='uid' value='$uid'readonly></td></tr>";
		echo "<tr><td>user name:</td><td><input type=text name='ufname' value='$ufname' ></td></tr>";
		echo"<tr><td>password:</td><td><input type=text name='umname' value='$umname'></td></tr>";
		?>
		<tr><td>New password:</td><td><input type=text name="name" required=""></td></tr>
		<tr><td>confirm password:</td><td><input type=text name="confirmname" required=""></td></tr>

		<?php
		
		
		
		echo "<tr><td><input type=submit name=update value=update class='btn'></td>";
		echo "<td><input type=reset value=reset id='reset'></td></tr>";
		echo"</form></table>";
		
	
		?>
		
	
								<?php	
								//UPDATE				
							if(isset($_POST["update"]))
							{
							$uid=$_POST["uid"];
							$fname=$_POST["ufname"];
							$mname=sha1($_POST['name']);
							$confirmname=sha1($_POST["confirmname"]);
							
							
							if($mname==$confirmname)
							{
							
			$sql="update account set username='$fname',password='$mname' where uid='$uid'";
							$updated=mysql_query($sql,$con);
							if(mysql_affected_rows($con))
							
							echo"<script>alert('your password or username updateed successfully!')</script>";
							else
							echo "Unable to change!".mysql_error($con);	
							
						}
							else
								echo"<script>alert('new password and your confirm password not much try again?')</script>";
					
					}
						?>

		
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
		</table></div>
<?php
}
else
{
header("location:home.php");
}
?>
		</body>
		</html>