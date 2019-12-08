<?php
session_start();
include("connection.php");
?><html>
<head>
<title>VITAL EVENT REGISTRATION INFORMATION MANEGMENT SYSTEM</title>
<link  href="mystyles.css" rel="stylesheet" type="text/css"  />

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
?>
</div>
<tr><td>


<div id="divSideContentLeft">
	<?php
require("adminmenu2.php");
?>
	
</div>
</td>
<td>
	<div id="divContentCenter" >
	
			               <?php
								if($con)
								 {
								 $sql="select * from account";
									$recordfound=mysql_query($sql,$con);
									if(mysql_affected_rows($con))
									{ ?>
									<table class="data-table" style="margin-left: 15px;margin-right: 15px;margin-top: 15px;">
										<?php
									echo"<tr> <th>User ID</th><th>User Name</th><th>Status</th></tr>";
									while($row=mysql_fetch_assoc($recordfound))
echo "<tr> <td>". $row["uid"]."</td><td>".$row["username"]."</td><td><font style=arial color=blue>". $row["status"]."</font></td></tr>";
									echo "</table>";
									
									}
									     else
									     echo "No records found!";
									   }
								else
								echo"connection failed";
						?>
							
						
			           </div>




  </td>
</tr>
<tr><td><div id="divFooter">
<?php
require("footer.php");

?>
	
</div></td></tr>
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
 