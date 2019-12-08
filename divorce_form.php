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
		
	$region=$row["region"];
	$photo=$row["photo"];

	$zone=$row["zone"];
	$woreda=$row["woreda"];
	$city=$row["city"];
	$kebele=$row["kebele"];
	
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
	require("kebeleregistrarmenu.php");
	?></div>

	<tr>
	<td>
	<div id="divSideContentLeft">
	<?php
	require("kebelemenu2.php");
	?>
	</div>
	</td>   
	<td>
	<div id="divContentCenter">
		<table><tr><td><font size="5" color=blue>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wellcome to divorce registration form in <?php echo"$kebele kebele"?></font><br/><br/></td></tr></table>
	<table>
	<form action="" method="post"> 
	<tr><td><font size=5>search marriage id</font><input type="text" name="get" required=""></td><td>
	<input type="submit" name="submitlogin" value="Search" /></td></tr></table>
	</form>
	<form action="" method="post"  enctype="multipart/form-data">
	
	<?php 
	if (isset($_POST["submitlogin"]))
	  {
	  $jid=$_POST["get"];
	  $get = "select *from marriagetable where marriageid='$jid' and marriagestatus='married'";
	  $run = mysql_query($get,$con);
	  if(mysql_affected_rows($con))
	  {
	  	    while($row=mysql_fetch_assoc($run))
	  	    {
	  	    	?>
				<fieldset>
				<table>
					<?php
	echo "<form action='' method='post'>";
	 echo"<tr><td>divorce id:</td><td><input type=text name='divorceeid' value='".$row["marriageid"]."' readonly></td></tr>";
	echo "<tr><td>hasbandfname:</td><td><input type=text name='hasbandfname' value='".$row["hasbandfname"]."' readonly></td></tr>";
	echo"<tr><td>hasbandlname:</td><td><input type=text name='hasbandlname' value='".$row["hasbandlname"]."'readonly></td></tr>";
	echo"<tr><td>hasbandbirthid:</td><td><input type=number name='hasbandbirthid' value='".$row["birthid"]."' readonly></td></tr>";
	echo"<tr><td>wifebirthid:</td><td><input type=number name='wifebirthid' value='".$row["wifebirthid"]."' readonly></td></tr>";
	echo "<tr><td>wifefname:</td><td><input type=text name='wifefname' value='".$row["wifefname"]."' readonly></td></tr>";
	echo"<tr><td>wifelname:</td><td><input type=text name='wifelname' value='".$row["wifelname"]."'readonly></td></tr>";
	echo"<tr><td>divorceregion:</td><td><input type=text name='divorceregion' value=' ".$region."'readonly></td></tr>";
	echo"<tr><td>divorcezone:</td><td><input type=text name='divorcezone' value=' ".$zone."'readonly></td></tr>";
	echo"<tr><td>divorceworeda:</td><td><input type=text name='divorceworeda' value='".$woreda."'readonly></td></tr>";
	echo"<tr><td>divorcecity:</td><td><input type=text name='divorcecity' value='".$city."'readonly></td></tr>";
	echo"<tr><td>divorcekebele:</td><td><input type=text name='divorcekebele' value='".$kebele."'readonly></td></tr>";
	echo"<tr><td>divorcedate:</td><td>";
	?><input type=dtext name='divorcedate'value="<?php echo date("y/m/d");?>" readonly></td></tr>
	<?php
	echo"<tr><td>divorcereason:</td><td><textarea name='divorcereason' value=''required></textarea></td></tr>";
	echo"<tr><td>numberofchild:</td><td><input type=number name='numberofchild' value=''required min=0 max=40></td></tr>";
?>
	<tr><td>officerid:</td><td><input type="text" name="kebeleofficerid"  readonly  value="<?php echo $id; ?>"></td></tr>
<?php


		echo "<tr><td><input type='submit' name='submit' value='registerdivorce' class=btn></td><td>";
		echo "<input type='reset' name='reset' value='reset' id=reset></td></tr>
					</form></table></fieldset>";
					}
	}
	else
	echo"<font color=red size=5>No  marriage!! or they are divorced!</font>";
	

	  }
	  
	?>

	</form>

	<?php
	if(isset($_POST["submit"]))
	{
	$divorceeid=$_POST["divorceeid"];
	
	$hasbandfname=$_POST["hasbandfname"];
	$hasbandlname=$_POST["hasbandlname"];

$hasbandbirthid=$_POST["hasbandbirthid"];
	$wifebirthid=$_POST["wifebirthid"];
	$wifefname=$_POST["wifefname"];
	$wifelname=$_POST["wifelname"];
	$divorceregion=$_POST["divorceregion"];
	$divorcezone=$_POST["divorcezone"];
	$divorceworeda=$_POST["divorceworeda"];
	$divorcecity=$_POST["divorcecity"];
	$divorcekebele=$_POST["divorcekebele"];
	$divorcedate=$_POST["divorcedate"];
	$divorcereason=$_POST["divorcereason"];
	$numberofchild=$_POST["numberofchild"];
	$officerid=$_POST["kebeleofficerid"];
	
	if($con)
	{
		
	
	$sql="INSERT INTO divorce values('$divorceeid','$hasbandfname','$hasbandlname','$wifefname','$wifelname','$divorcedate','$divorcereason','$divorceregion','$divorcezone','$divorceworeda','$divorcecity','$divorcekebele','$numberofchild','$hasbandbirthid','$wifebirthid','$officerid')";
	
	$inserted=mysql_query($sql,$con).mysql_error($con);
	if($inserted)
	{
		
$s="update marriagetable set marriagestatus='divorced' where marriageid='$divorceeid'";
	$new=mysql_query($s,$con);
	if($new)
	{
		$updatebirth="update birthtable set statusformrg='unmarried' where birthid='$hasbandbirthid'";
		$hasbandupdated=mysql_query($updatebirth,$con);
		if($hasbandupdated){

$updatebirth2="update birthtable set statusformrg='unmarried' where birthid='$wifebirthid'";
$wifeupdated=mysql_query($updatebirth2,$con);
if($wifeupdated){
		
		echo"<font size=5 color=green>they are successfully divorced!!</font>";
	}

	}

	}
	else
	echo "<font size=5 color=red>they are already divorced or no such individual!' </font>";
	 
	}
	
	else
	
	echo"has no connection".mysql_error($con);
}}

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