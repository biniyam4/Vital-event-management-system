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
		$ufname=$row["ufname"];	
		$uid=$row["uid"];	
		$region=$row["region"];
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
require("adminmenu.php");
?></div>

<tr><td><div id="divSideContentLeft">
  <?php
require("adminmenu2.php");
?>



	        </div>

	</td>
	<td>
		<div id="divContentCenter" >



<?php
     if(isset($_POST['register']))
     {

		$regionid=$_POST['regionid'];
		$regionname=$_POST['regionname'];
		$kooficer=$_POST['kooficer'];
	//insert data in to the table
 $sql="INSERT INTO regiontable VALUES('$regionid','$regionname','$kooficer')";
 $result=mysql_query($sql,$con);
			
 
		
	
  ?>

	<?php
	if($result)
	{
          echo"<script>alert('region succssfully registered')</script>";
              
              	}
			else
			echo "<font size=5 color=red>unable to register region or already exist!!!</font>".mysql_error($con);
			}
	?><br/><br/>
		<fieldset style="border-radius:5px;">
        <legend><font size=5>regiser region here!!!</font></legend>
	<form action="" method="post">
<table>
      <tr><td width="140px" height="40px">region id</td><td>
		<input type="text" name="regionid" pattern="[A-Za-z0-9]+" placeholder="regionid"  required=""> 
		<td width="140px" ></td></tr>
      <tr><td width="140px" height="40px" > region name</td><td>
	  <input type="text" name="regionname" pattern="[A-Za-z]+" placeholder="region_name" required="" >
		</td></tr>
		<tr>
				<td>
				   Kebele officer:
				   </td>
				   <td>
				<input type="text" name="kooficer"   value="<?php echo $id; ?>" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" readonly>
					
				</td>
				</tr>
		<tr><td>
	     <input type='submit' name='register' value='saveregion' class="btn" ></td><td>
		 <input type='reset'  value='Clear' id="reset"></td></tr></table>
		 </form></fieldset>
		
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