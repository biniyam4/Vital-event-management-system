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
<?php

if(isset($_SESSION['sun'])&&isset($_SESSION['spw']))
{
?>
<div id="all">
<frameset id="framess">
<table>
<div id="divHeader">
<?php
require("header.php");

?>
</div>
<div id="divNav">
<?php

require("regionmenu.php");
?></div>
					<tr><td><div id="divSideContentLeft">

<?php
require("regionmenu2.php");
?>

        </div>

</td>


<td>
<div id="divContentCenter"><br><br><br><br><br>

<p>WELLCOME TO regional population!</p>
		<form method="post" action="">
		<p>select region:</p>
			<select name="region" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:140px;">
				
				<option selected="selected" >amhara</option >
				<option>
				tgiray
				</option>
				<option>
				   oromia
				   </option>
				<option>
				   ganbela
				</option>
				<option>
				harar
				</option>
				<option>
				somalia
				</option>
				<option>
				debub
				</option>
				<option>
				     benshangul
				     </option>
				<option>
				   Afar
				    </option>
				</select>
			<input type="submit" name="EDIT" value="search"/>
		</form>

 <?php	
	if(isset($_POST['EDIT']))
		     {
				$uid=$_POST['region'];
	$u="select * from birthtable where birthregion='$uid'and birthstatus='born'";
			$view=mysql_query($u,$con);
					$rowCheck = mysql_num_rows($view);
if($rowCheck<1)
{
echo'<p><font color="red">currently has no registerd individual in '.$uid.' region!!</font></p>';
echo' <meta content="5;viewRreginalpop.php" http-equiv="refresh" />';
	}
else
{

	echo"<font face='Times New Roman' size='3' color='black'><h2>currently ".$uid." have <font color='green'>".$rowCheck.'</font> total population size.</h2></font>';

	}}
	
	
?>
	
</div>
</td>

</tr>

<tr><td><div id="divFooter"><?php
require("footer.php");

?></div></td></tr>
</table> 
                                                                       
</frameset>
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