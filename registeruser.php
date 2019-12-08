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
	#forme{
	        width: 300px;
	        height: 200px;
	        background-color:  #d5d2d0;
		}
		#tablee{
	        width: 300px;
	         height: 200px;
	        background-color:  #dbac55;
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
	if(isset($_POST['register']))
	{

	$uid=$_POST['uid'];
	$ufname=$_POST['ufname'];
	
	$umname=$_POST['umname'];
	$ulname=$_POST['ulname'];
	$sex=$_POST['sex'];
	$mobile=$_POST['mobile'];
	$email=($_POST['emails']);
	$photo=$_POST['photo'];
	$role=$_POST['role'];
	$kebele=$_POST['kebelename'];
	$woreda=$_POST['woredaname'];
	$city=$_POST['cityname'];
	$zone=$_POST['zonename'];
	$region=$_POST['region'];
	$nation=$_POST['nation'];
	//insert data in to the table
	$sql="INSERT INTO user(uid,ufname,umname,ulname,sex,mobile,email,photo,role,nationality,region,zone,woreda,city,kebele) VALUES('$uid','$ufname','$umname','$ulname','$sex','$mobile','$email','$photo','$role','$nation','$region','$zone','$woreda','$city','$kebele')";
	$result=mysql_query($sql,$con);




	?>

	<?php
	if($result)
	{
	echo "<font color=green><h2>user successfully registered!!!</h2></font>";
	echo' <meta content="2;createaccount.php" http-equiv="refresh" />';

	}
	else
	echo "<font color=red><h2> such User already existed try again!!!</h2></font>".mysql_error($con);
	}
	?><br/><br/>
	<fieldset style="border-radius:5px;">
	<legend><font size=5 color=green>user registration form</font></legend>
	<form action="" method="post" width= ="forme" border-color='red'>
	<table>
<tr><td  width="140px" height="40px"  style="font-size:19px;">
	region name:</td><td>&nbsp;&nbsp;
	<select name="region"  required style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" onchange="this.form.submit()"><br>

	<?php
	//$con=mysqli_connect("localhost","root","","elpms");
	if($con){
	if(isset($_POST["region"]))
	{
		$result1 = mysql_query("SELECT distinct(regionid),regionname FROM regiontable",$con);

	while($finresult = mysql_fetch_array($result1)){

	$did = $finresult ['regionid'];
	$name = $finresult ['regionname'];

	if($_POST["region"]==$did)

	{
		$name = $finresult ['regionname'];
		?>
	<option value="<?php echo $name; ?>" selected><?php echo $name; ?></option>
	<?php 
	}
	else
	{
	?>
	<option value="<?php echo $did; ?>"><?php echo $name; ?></option>
	<?php
	 }}


	}
	else
	{
	?>
	<option value="" selected>choose region</option>
	<?php
	$result1 = mysql_query("SELECT distinct(regionid),regionname FROM regiontable");
	while($finresult = mysql_fetch_array($result1)){

	$did = $finresult ['regionid'];
	$name = $finresult ['regionname'];
	?>
	<option value="<?php echo $did; ?>"><?php echo $name; ?></option>
	<?php
	}}}  ?>
</select>
	                    <br><br>
	                    </td></tr>
	                    

	 <tr><td  width="140px" height="40px"  style="font-size:19px;">

					zone name:&nbsp;&nbsp;</td><td>
	<select name="zonename"  required style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" ><br>

	       <?php
	                        if(isset($_POST["region"]))
	                    {
							$region=$_POST["region"];
							
								if($con){
									$sql2="select distinct(zoneid),zonename,regionid from zonetable where regionid='$region'";
										$result11 = mysql_query($sql2);
										while($finresult1 = mysql_fetch_array($result11)){
											$zoneid = $finresult1['zoneid'];
											$zonename = $finresult1['zonename'];
									?>
						<option value="<?php echo $zonename; ?>"><?php echo $zonename; ?></option>
						
					<?php 
				} }
						} 
						else
		echo "<option value='' selected>Choose zone</option>";		
							
	?>
	                    </select>
	</td>
	</tr>

	 
	 <tr><td  width="140px" height="40px"  style="font-size:19px;">

					woreda name:&nbsp;&nbsp;</td><td>
	<select name="woredaname"  required style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" ><br>

	       <?php
	                        if(isset($_POST["region"]))
	                    {
							$region=$_POST["region"];
							
	if($con){
		$sql2="select distinct(woredaid),woredaname,regionid from woredatable where regionid='$region'";
						$result11 = mysql_query($sql2);
						while($finresult1 = mysql_fetch_array($result11)){
							$woredaid = $finresult1['woredaid'];
							$woredaname = $finresult1['woredaname'];
									?>
						<option value="<?php echo $woredaname; ?>"><?php echo $woredaname; ?></option>
						
					<?php 
				} }
						} 
						else
		echo "<option value='' selected>Choose woreda</option>";		
							
	?>
	                    </select>
	</td>
	</tr>

				
	 <tr><td  width="140px" height="40px"  style="font-size:19px;">

					subcity name:&nbsp;&nbsp;</td><td>
	<select name="cityname"  required style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" ><br>

	       <?php
	                        if(isset($_POST["region"]))
	                    {
							$region=$_POST["region"];
							
	if($con){
		$sql2="select distinct(cityid),cityname,regionid from citytable where regionid='$region'";
						$result11 = mysql_query($sql2);
						while($finresult1 = mysql_fetch_array($result11)){
							$cityid = $finresult1['cityid'];
							$cityname = $finresult1['cityname'];
									?>
						<option value="<?php echo $cityname; ?>"><?php echo $cityname; ?></option>
						
					<?php 
				} }
						} 
						else
		echo "<option value='' selected>Choose sub city</option>";		
							
	?>
	                    </select>
	</td>
	</tr>


	 <tr><td  width="140px" height="40px"  style="font-size:19px;">

					kebele name:&nbsp;&nbsp;</td><td>
	<select name="kebelename"  required style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" ><br>

	       <?php
	                        if(isset($_POST["region"]))
	                    {
							$region=$_POST["region"];
							
	if($con){
		$sql2="select distinct(kebeleid),kebelename,regionid from kebeletable where regionid='$region'";
						$result11 = mysql_query($sql2);
						while($finresult1 = mysql_fetch_array($result11)){
							$kebeleid = $finresult1['kebeleid'];
							$kebelename = $finresult1['kebelename'];
									?>
						<option value="<?php echo $kebelename; ?>"><?php echo $kebelename; ?></option>
						
					<?php 
				} }
						} 
						else
		echo "<option value='' selected>Choose kebele</option>";		
							
	?>
	                    </select>
	</td>
	</tr>




	<tr><td width="140px" height="40px"  style="font-size:19px;"> id:</td><td width="140px" >
	<input type="text" name="uid" pattern="[A-Za-z0-9]+" placeholder="Enter userid" required="" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;">
	</td></tr>
	<tr><td width="140px" height="40px"  style="font-size:19px;">First name</td><td width="140px" >
	<input type="text" name="ufname" pattern="[A-Za-z0-9]+" placeholder="Enter first username" required="" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;">
	</td></tr>
	<tr><td width="140px" height="40px"  style="font-size:19px;">father name</td><td width="140px">
	<input type="text" name="umname" pattern="[A-Za-z0-9]+" placeholder="Enter middle userna me" required="" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;">
	</td></tr>

	<tr><td width="140px" height="40px"  style="font-size:19px;">User last name</td><td width="140px" >
	<input type="text" name="ulname" pattern="[A-Za-z0-9]+" placeholder="Enter last username" required="" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;">
	</td></tr>
	<tr><td width="140px" height="40px"  style="font-size:19px;">sex</td>

	<td>
	<select name="sex" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;">
	<option>--Select sex--</option>
	<option value="male">male</option>
	<option value="female">female</option>
	</select></td></tr>
	<tr><td width="140px" height="40px"  style="font-size:19px;">mobile</td><td width="140px" >
	<input type="number" name="mobile" pattern="[0-9+ ]+" maxlength="13" minlength="13" placeholder="Enter mobile num b er"  required="" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" value="+251 ">
	</td></tr>
	<tr><td width="140px" height="40px"  style="font-size:19px;">email</td><td width="140px" >
	<input type="email" name="emails" pattern="[A-Za-z@-A-Za-z.]+" placeholder="Enter email" required="" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;">
	</td></tr>
	<tr><td  width="140px" height="40px"  style="font-size:19px;">photo</td><td><input type="file" name="photo"/ style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;"></td></tr>

	<tr><td width="140px" height="40px"  style="font-size:19px;">Role</td><td width="140px">
	<select name="role" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" required="">
	<option></option>
	<option value="Admin">Branch Admin</option>
	<option value="statician">statician</option>
	<option value="federaloficer">federaloficer</option>
	<option value="reginalofficer">reginalofficer</option>
	<option value="zonalofficer">zonalofficer</option>
	<option value="woredaofficer">woredaofficer</option>
	<option value="kebeleofficer">kebeleofficer</option>
	



	</select>

	</td>
	</tr>
	<?php
	if(isset($_POST["region"]))
	{

	$region=$_POST["region"];

	}
	?>
	<tr>
	<td  width="140px" height="40px"  style="font-size:19px;">nationality:
	</td>
	<td><input type="text" name="nation" value="Ethiopian" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" >
	</td>
	</tr>



						<tr><td width="140px" height="40px">
						<input type='submit' name='register' value='register user' class=btn></td><td>
						
						<input type='reset'  value='reset user' id=reset ></td>
	</tr>


	
	</table>
	</form>
	</fieldset>



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

