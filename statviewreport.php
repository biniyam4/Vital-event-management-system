<?php
session_start();
include("connection.php");
?>
<html>
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
<div id="all">
<?php

if(isset($_SESSION['sun'])&&isset($_SESSION['spw']))
{
?>
<table>
<div id="divHeader">
<?php
require("header.php");

?>
</div>
<div id="divNav">
<?php
require("staticianmenu.php");
?></div>
<tr><td><div id="divSideContentLeft">
<?php
require("statmenu2.php");
?>

 
        </div>

</td>
<td>
<div id="divContentCenter">
	 <center>
		<legend><h2>wellcome to birth baby information:</h2></legend>
		<form method="post" action=""><table><tr><td>
		<h2>insert babyid:</h2></td><td>
			<input type="text" name="searchdata" value="" />
			<input type="submit" name="searchbyyear" value="searchbyyear"/></td></tr>
		</table></form>
				 <?php
if (isset($_post["searchbyyear"])) {
	$date=$_post("searchdata");
	

		$sql="select * from birthtable where birthregion=$date";
				 $view=mysql_query($sql,$con);
				$rowCheck = mysql_num_rows($view);
				
if($rowCheck>0)

echo "total population in amharais $rowCheck";
	// while($row = mysql_fetch_array($view))

else
echo "no register in amhara";

}
				

	                ?>
                   
</div></td>

</tr>

<tr><td><div id="divFooter"><?php
require("footer.php");

?></div></td></tr>

</table>
<?php
}
else
{
header("location:home.php");
}
?>
</div>
</body>
</html>
