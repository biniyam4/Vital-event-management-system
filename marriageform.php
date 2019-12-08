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
	$zone=$row["zone"];
	$woreda=$row["woreda"];
	$nation=$row["nationality"];
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

<tr><td><div id="divSideContentLeft">
 
<?php
require("kebelemenu2.php");
?>
        </div>

</td>   
<td>
	<div id="divContentCenter"> 
		<legend><font size=5 color=blue><br/><br/>wellcome to death registration form in <?php echo" $kebele kebele";?></font></legend><br/><br/>
		<form method="post" action=""><table><tr><td>
		<h2>insert hasbandid:</h2></td><td>
			<input type="text" name="hasbandbid"   required /></td>
			</tr>
			<tr><td><h2>inter wifeid:</h2></td><td>
			<input type="text" name="wifebid"  required /></td></tr>
			<tr><td><input type="submit" name="searchformarriage" value="searchformarriage"/></td></tr>
		</table> </form>
			
		 <?php
 if(isset($_POST["searchformarriage"])) 
							{
$currentdate=date("Y-m-d");							
$hasbandbid=$_POST['hasbandbid'];
$wifebid=$_POST['wifebid'];


		$sql2="select*from birthtable where birthid='$hasbandbid' and sex='male' and statusformrg='unmarried' and birthstatus='born'";
		$record=mysql_query($sql2,$con);
		$hasbandexist=mysql_num_rows($record);
		if($hasbandexist>0)
		{
		while($row=mysql_fetch_array($record))	
		{
		$hasbandid=$row["birthid"];
		$hasbandfname=$row["fname"];	
		$hasbandlname=$row["lname"];
		$hdate=$row["birthdate"];
		//echo "$hdate";
		}}

		$sql2="select*from birthtable where birthid='$wifebid' and sex='female' and statusformrg='unmarried' and birthstatus='born'";
		$record1=mysql_query($sql2,$con);
		$wifeexist=mysql_num_rows($record1);
		if($wifeexist>0 )
		{
		while($row=mysql_fetch_array($record1))	
		{
		$wifebid=$row["birthid"];
		$wifefname=$row["fname"];	
		$wifelname=$row["lname"];
		$wdate=$row["birthdate"];


		}

		}

		if($hasbandexist>0 and $wifeexist>0 )
{

$currenthasbandage=$currentdate-$hdate;
$currentwifedage=$currentdate-$wdate;


?>

 
	             <center>
	            
				<fieldset style="border-radius:5px;">
		        
			    <form action="" method="post">
		        <table>
		      
		      <tr>
		      <td>hasbandbirthid:
		      </td>
		      <td>
<input type="text" name="birthid"  value="<?php echo $hasbandbid;?>">
					
				</td>
				</tr>
				 
				<tr>
				<td> hasbandfname:
				</td>
				<td>
          <input type="text" name="hasbandfname" value="<?php echo $hasbandfname;?>">
					
				</td>
				</tr>
				<tr>
				<td> hasbandlname
				</td>
				<td>
           <input type="text" name="hasbandlname"  value="<?php echo $hasbandlname;?>">
					
				</td>
				</tr>
				<tr>
				<td> hasbandage
				</td>
				<td>
				<input type="number" name="hasbandage"    value="<?php echo $currenthasbandage;?>" readonly >
					
				</td>
				</tr>
				<tr>
				<td> hasband photo
				</td>
				<td>
				<input type="file" name="hphoto"    value="" required=""  width="40" height="60 ">
					
				</td>
				</tr>
				<tr>
		      <td>wifebirthid:
		      </td>
		      <td>
<input type="text" name="wifebirthid"  value="<?php echo $wifebid;?>">
					
		</td>
		</tr>
		<tr>
		<td> wifefname
		</td>
		<td>
             <input type="text" name="wifefname" value="<?php echo $wifefname;?>">
					
				</td>
				</tr>
				<tr>
				<td> wifelname
				</td>
				<td>
				<input type="text" name="wifelname"  value="<?php echo $wifelname;?>">
					
				</td>
				</tr>
				<tr>
				
				<td>wifeage:
				</td>
				<td>
				<input type="number" name="wifeage"   value="<?php echo $currentwifedage;?>"   >
		
				      </td>
				      </tr>
				<tr>
				
				<td>wife photo:
				</td>
				<td>
				<input type="file" name="wphoto"   value="" required=""  >
		
				      </td>
				      </tr>
				     
				      <tr>
				      <td>
				   marragedate:
				   </td>
				   <td>
          <input type="datetime" name="marragedate"  value="<?php echo date("d/m/y");?>">
					
				</td>
				</tr>
				
				<tr>
				<td>
				   marriagestatus:
				   </td>
				   <td>
				<input type="text" name="marriagestatus"  placeholder="marriagestatus "  value="married"  readonly>
					
				</td>
				</tr>
				      <tr>
<td>region:</td>
<td><input  type="text" name="region"  readonly value="<?php echo $region;?>" ></td>
</tr>
<tr>
<td>zone:</td>
<td><input  type="text" name="zone"  required readonly value="<?php echo $zone;?>" ></td>
</tr>
<tr>
<td>woreda:</td>
<td><input  type="text" name="woreda"  readonly value="<?php echo $woreda;?>" ></td>
</tr>
<tr>
<td>city:</td>
<td><input  type="text" name="city"  readonly value="<?php echo $city;?>" ></td>
</tr>
<tr>
<td>kebele:</td>
<td><input  type="text" name="kebele"  readonly=""  value="<?php echo $kebele;?>" ></td>
</tr>
				<tr>
				<td>
				   Kebele officer:
				   </td>
				   <td>
				<input type="text" name="kebeleofficerid"  readonly  value="<?php echo $id; ?>">
					
				</td>
				</tr>
				<tr>
				<td>
					  marriage type:
					  </td>
					  <td><select name="marragecondition" required="">
					  	<option>select type</option>
					  	<option>religious</option>
					  	<option>nonreligious</option>
				</select>
				</td>
				</tr>
				<tr>
				<td width="140px" height="40px">
					
				</td>
				<td>
<input type="submit" name="insert" value="insert" class=btn >
				 <input type='reset'  value='Clear' id="reset">
				 	
	 </td>
	 </tr>
	 </table>
	 </form>
	 </fieldset>
	</center>
<?php







}
elseif (!$hasbandexist) {
	echo"<font size=5 color=red>incorrect id for married";	
	
}
else
echo"<font size=5 color=red> they are married</font>";	
}
?>
			
		
	
	

<?php
if(isset($_POST['insert'])) 
{

				
					$birthid=$_POST['birthid'];
				
					$hasbandfname=$_POST['hasbandfname'];
					$hasbandlname=$_POST['hasbandlname'];
					$currenthasbandage=$_POST['hasbandage'];
					$hphoto=$_POST['hphoto'];
					$wifefname=$_POST['wifefname'];
					$wifelname=$_POST['wifelname'];
					$currentwifeage=$_POST['wifeage'];
					$wphoto=$_POST['wphoto'];
					$wifebirthid=$_POST['wifebirthid'];
						$region=$_POST['region'];
						$zone=$_POST['zone'];
						$woreda=$_POST['woreda'];

						$city=$_POST['city'];
						$kebele=$_POST['kebele'];

						$marragedate=$_POST['marragedate'];

					$marragecondition=$_POST['marragecondition'];

					$kebeleofficerid=$_POST['kebeleofficerid'];
					
	 if($currenthasbandage>18 && $currentwifeage<18)
	 	echo "<font size=5 color=red> can not married because her age is less than 18 </font>";
	 elseif ($currenthasbandage<18 && $currentwifeage>18) 
	 	echo "<font size=5 color=red>can not married because his age is less than 18</font>";
	  elseif ($currenthasbandage<18 && $currentwifeage<18) 
	  echo "<font size=5 color=red>can not married because both her and his age less than 18</font>";
	else
	{
			
			$sql="INSERT INTO marriagetable(birthid,hasbandfname,hasbandlname,hasbandage,hphoto,wifefname,wifelname,wifeage,wphoto,wifebirthid,region,zone,woreda,city,kebele,marragedate,marragecondition,marriagestatus,uid) VALUES('$birthid','$hasbandfname','$hasbandlname','$currenthasbandage','$hphoto','$wifefname','$wifelname','$currentwifeage','$wphoto','$wifebirthid','$region','$zone','$woreda','$city','$kebele','$marragedate','$marragecondition','married','$kebeleofficerid')";
	$inserted=mysql_query($sql,$con);
	if($inserted)
{
$s2="update birthtable set statusformrg='married' where birthid='$birthid'";
	$new=mysql_query($s2,$con);
	if($new)
	{
		$s3="update birthtable set statusformrg='married' where birthid='$wifebirthid'";
	   $new2=mysql_query($s3,$con);
}
if($new2)
{
echo "<font color=green size=5>they are successfully! marriad</font>";
echo "<script> window.open('marriageform.php','_self')</script>";
}
else
	echo "they are not updated".mysql_error($con);






}
else
echo "not inserted".mysql_error($con);
}	}
		  ?>
	</div>
	</td>
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