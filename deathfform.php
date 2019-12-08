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
	$nation=$row["nationality"];	
	$region=$row["region"];
	$zone=$row["zone"];
	$woreda=$row["woreda"];
	$city=$row["city"];
	$kebele=$row["kebele"]; 
	$uid=$row["uid"];
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
require("federalregistrarmenu.php");
?></div>

<tr><td><div id="divSideContentLeft">

<?php
require("federalregistrar.php");
?>
	
	</div>
	</td>   
	<td>
	<div id="divContentCenter">
	
	<form action="" method="post"> 
	search birth id<input type="text" name="get">
	<input type="submit" name="submitlogin" value="Search" />
	</form>
	<form action="" method="post"  enctype="multipart/form-data">
	
	<?php 
	if (isset($_POST["submitlogin"]))
	  {
	  $jid=$_POST["get"];
	  $get = "select *from birthtable where birthid='$jid' and birthstatus='born'";
	  $run = mysql_query($get,$con);
	  if(mysql_affected_rows($con))
	  {
	  	    while($row=mysql_fetch_assoc($run))
	  	    {
	  	    	?>
				<h1>wellcome to death registration form</h1>
				<table class="data-table" style="margin-left: 15px;margin-right: 15px;margin-top: 15px;">
					<?php
				
			
echo "<form action='' method='post'>";
 echo"<tr><td>birth id:</td><td><input type=text name='birthid' value='".$row["birthid"]."'readonly></td></tr>";
echo "<tr><td>First Name:</td><td><input type=text name='fname' value='".$row["fname"]."' readonly></td></tr>";
echo"<tr><td>last Name:</td><td><input type=text name='lname' value='".$row["lname"]."'readonly></td></tr>";
echo "<tr><td>sex:</td><td><input type=text name='sex' value='".$row["sex"]."' readonly></td></tr>";
echo"<tr><td>nationality:</td><td><input type=text name='nationality' value='".$row["nationality"]."'readonly></td></tr>";
echo "<tr><td>birth date:</td><td><input type=text name='birthdate' value='".$row["birthdate"]."' readonly></td></tr>";
							echo"<tr><td>birth region:</td><td><input type=text name='birthregion' value='".$row["birthregion"]."'readonly></td></tr>";
							echo"<tr><td>birth zone:</td><td><input type=text name='birthzone' value='".$row["birthzone"]."'readonly></td></tr>";         echo "<tr><td>birth city:</td><td><input type=text name='birthcity' value='".$row["birthcity"]."' required></td></tr>";
							echo"<tr><td>birth woreda:</td><td><input type=text name='birthworeda' value='".$row["birthworeda"]."'readonly></td></tr>";
							
							echo"<tr><td>birth kebele:</td><td><input type=text name='birthkebele' value='".$row["birthkebele"]."'readonly></td></tr>";
							
								echo" <tr><td>    marraige status:</td><td><select  name='marraigestatus' value><option>marriaged</option><option>unmarriged</opti                                       on></select></td></tr>" ; 
									echo"<tr><td> death region:</td><td><input type='text' name='deathregion' value='$region' readonly></td></tr>" ;
									echo"<tr><td> death zone:</td><td><input type='text' name='deathzone' value='$zone' readonly></td></tr>" ;
									echo"<tr><td> death woreda:</td><td><input type='text' name='deathworeda' value='$woreda' readonly></td></tr>" ;
									echo" <tr><td>death city:</td><td><input type='text' name='deathcity' value='$city'readonly ></td></tr>" ;
									echo" <tr><td>death kebele:</td><td><input type='text' name='deathkebele' value='$kebele' readonly ></td></tr>" ;
		echo" <tr><td>  date of death</td><td>";?>
		<input type='text' name='deathdate' value="<?php echo date("y/m/d");?>" pattern="[0-9/-]"></td>
		<?php echo "</tr>" ;
							echo"   <tr><td> work position</td><td><input type='text' name=' workposition' required></td></tr>" ; 
									echo" <tr><td>death reason:</td><td><textarea name='deathreason' required></textarea></td></tr>" ;
									echo" <tr><td>kebele officer:</td><td><input type='text' name=' kebele' value='$id' readonly></td></tr>" ;
									echo "<tr><td><input type='submit' name='submit' value='registerdeath' ></td><td>";
									echo "<input type='reset' name='reset' value='reset'></td></tr></form></table>";}
	}
	else{
		
	
	echo "<font color=red size=5>there is no such born individual try again!!!</font>";
	
	 }
	?>
	
	<?php

	  }
	  
	?>

	</form>

	<?php
	if(isset($_POST["submit"]))
	{
	$birthid=$_POST["birthid"];
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$sex=$_POST["sex"];
	$nationality=$_POST["nationality"];
	$birthdate=$_POST["birthdate"];
	$birthregion=$_POST["birthregion"];
	$birthzone=$_POST["birthzone"];
	$birthworeda=$_POST["birthworeda"];
	$birthcity=$_POST["birthcity"];
	$birthkebele=$_POST["birthkebele"];
	$deathdate=$_POST["deathdate"];
	$workposition=$_POST["workposition"];

	$deathregion=$_POST["deathregion"];
	$deathzone=$_POST["deathzone"];
	$deathworeda=$_POST["deathworeda"];
	$deathcity=$_POST["deathcity"];
	$kebele=$_POST["kebele"];
	$deathkebele=$_POST["deathkebele"];
	$deathreason=$_POST["deathreason"];
	if($con)
	{
		
	
	$sql="INSERT INTO deathtable values('$birthid','$fname','$lname','$sex','$nationality','$birthdate','$birthregion','$birthzone','$birthworeda','$birthcity','$birthkebele','$deathdate','$workposition','$deathregion','$deathworeda','$deathcity','$deathkebele','$deathreason','$kebele','$uid')";
	
	$inserted=mysql_query($sql,$con);
	if($inserted)
	{
$s="update birthtable set birthstatus='died' where birthid='$birthid'";
	$new=mysql_query($s,$con);
	if($new)
	{
		
	
	echo "<font color=green>your died individual successfully! registered</font>";
	
}

	}
	else
	
	echo "<font color=red>never succsess try again</font>".mysql_error($con);
	 
	 
	}
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