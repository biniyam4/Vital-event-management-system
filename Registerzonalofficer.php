<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>VITAL EVENT REGISTRATION INFORMATION MANEGMENT SYSTEM</title>
<link  href="mystyles.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="../js/ja.js">
</script>


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
</style></head>
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
require("regionmenu.php");
?></div>

<tr><td><div id="divSideContentLeft">
 <?php
require("regionmenu2.php");
?>

	
</div>
</td>

<td>
	<div id="divContentCenter" >
			 

<?php
     if(isset($_POST['register']))
     {
		$uid=$_POST['woredaofficerid'];
		$ufname=$_POST['woredaofficerfname'];
		$umname=$_POST['woredaofficermname'];
		$ulname=$_POST['woredaofficerlname'];

		$sex=$_POST['sex'];
		
		$mobile=$_POST['mobile'];
		 $email=($_POST['emails']);
		 $photo=$_POST['photo'];
		 $zone=$_POST['zone'];
		 
 $sql="INSERT INTO zonalofficertable VALUES('$uid','$ufname','$umname','$ulname','$sex','$mobile','$email','$photo','$zone')";
 $result=mysql_query($sql,$con);
			
 
		
	
  ?>
	<fieldset style="border-radius:5px;">
	<?php
	if($result)
	{
              echo "<font color=green><h2>zone officer successfully registered!!!</h2></font>";
              

              	}
			else
			echo "<font color=red><h2> zone officer existed try again!!!</h2></font>".mysql_error($con);
			}
	?>
        <legend> register zone officer</legend>
		<form action="" method="post">
<table>
      <tr><td width="140px" height="40px">zoneofficerid</td><td width="140px">
		<input type="text" name="woredaofficerid" pattern="[A-Za-z0-9]+"  > 
		</td><td width="140px" ></td></tr>
      <tr><td width="140px" height="40px"  >firstname</td><td width="140px" >
	  <input type="text" name="woredaofficerfname" pattern="[A-Za-z0-9]+" placeholder="Enter first username" required="" >
		</td><td width="140px" ></td></tr>
		<tr><td width="140px" height="40px"  >father name</td><td width="140px" >
	  <input type="text" name="woredaofficermname" pattern="[A-Za-z0-9]+" placeholder="Enter middle userna me" required="" >
		</td><td width="140px" ></td></tr>
		
		<tr><td width="140px" height="40px" >grand father name</td><td width="140px" >
	  <input type="text" name="woredaofficerlname" pattern="[A-Za-z0-9]+" placeholder="Enter last username" required="" >
		</td><td width="140px" ></td></tr>
		<tr><td width="140px" height="40px"  >sex</td><td>
		<select name="sex" >
		<option>--Select sex--</option>
		<option value="male">male</option>
		<option value="female">female</option></select></td></tr>
		<tr><td width="140px" height="40px"  >mobile</td><td width="140px" >
	  <input type="text" name="mobile" pattern="[0-9]+" maxlength="10" minlength="10" placeholder="Enter mobile number"  required="" >
		</td><td width="140px" ></td></tr>
		<tr><td width="140px" height="40px"  style="font-size:19px;">email</td><td width="140px" >
	  <input type="email" name="emails" pattern="[A-Za-z@-A-Za-z.]+" placeholder="Enter email" required="" >
		</td><td width="140px" ></td></tr>
		<tr><td>photo</td><td><input type="file" name="photo"/></td></tr>
		
		 <tr>
				<td>
				    zone:
				    </td>
				    <td>
			<?Php
		$sql="select*from zonetable";
		$region=mysql_query($sql,$con);
			?>
		<select   name="zone" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" required>
		<option value=" ">choose zone</option>
		<?php
       while ($row=mysql_fetch_assoc($region)) 
       {
      $zonename=$row["zonename"];
		?>
		<option value="<?php echo $zonename; ?>"><?php echo $zonename; ?></option>
		<?php
	     }
		?>
		</select>
		</td>
				</tr>	
<tr><td width="140px" height="40px"></td><td>
	     <input type='submit' name='register' value='Save' class="btn"></td><td>
		 <input type='reset'  value='Clear' id="reset"></td></tr>
			</table>
		 </form></fieldset>



		
	 </div></td>
</tr>
<tr><td><div id="divFooter"><?php
require("footer.php");

?></div></td></tr>
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

