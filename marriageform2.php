		<?php
		session_start();
		include("connection.php");

		?>


		<html>
		<head>
		<title>VITAL EVENT REGISTRATION INFORMATION MANEGMENT SYSTEM</title>
		<link  href="mystyles.css" rel="stylesheet" type="text/css" />
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
		<div id="divContentCenter"> <br><br><br><br><br>
		<div><table>
		       <form action="" method="post">
		       <tr><th><h2>Login form</h2></th></tr>
				<tr><td><label>hasband id:</label><input type="text" name ="hasband" placeholder="hasband id" id="user" autofocus=""></td><td><label>wife id:</label><input type="text" name ="wife" placeholder="wife id" id="user" autofocus=""></td></tr>
				
				<tr><td><input type="submit"name="selecthasband"value="searchhaband">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="reset"value ="Reset" ></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td><input type="submit"name="selectwife"value="seachwife" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="reset"value ="Reset" ></td></tr>	
		       </form>
		       </table>
		       
		       </div>
		<?php
		     if(isset($_POST['selecthasband']))
		     {
		     	
		     	
		     	$hasband=$_POST["hasband"];
		  

		if($con)
		{ 
		//account
		$sql="select * from birthtable where birthid='$hasband'";
		$matchfound=mysql_query($sql);
		if($row=mysql_fetch_assoc($matchfound))
		{	
		$uid=$row["birthid"];
		$fname=$row["fname"];
		$mname=$row["mname"];

			}}}
			
			?>
			<?php
		     if(isset($_POST['selectwife']))
		     {
		     	
		     	
		     	$wife=$_POST["wife"];
		  

		if($con)
		{ 
		//account
		$sql="select * from birthtable where birthid='$wife'";
		$matchfound=mysql_query($sql);
		if($row=mysql_fetch_assoc($matchfound))
		{	
		$wifeid=$row["birthid"];
		$wifefname=$row["fname"];
		$wifemname=$row["mname"];

			}
			else"try again".mysql_error($con);
			}}
			
			?>
			 <center>
		        
				<fieldset style="border-radius:5px;">
		        
			    <form action="" method="post">
		        <table>
			<tr>
		      <td>hasbandbirthid:
		      </td>
		      <td>
		<input type="text" name="birthid" pattern="[A-Za-z]+"  placeholder="Enter baby name " value="<?php echo $uid;?>">
					
				</td>
				</tr>
				 
				<tr>
				<td> hasbandfname:
				</td>
				<td>
		 <input type="text" name="hasbandfname" pattern="[A-Za-z]+"  placeholder="hasbandfname" value="<?php echo $fname;?>">
					
				</td>
				</tr>
				<tr>
				<td> hasbandlname
				</td>
				<td>
		<input type="text" name="hasbandlname" pattern="[A-Za-z]+"  placeholder="hasbandlname " value="<?php echo $mname;?>">
					
				</td>
				</tr>
				<tr>
				<td> hasbandage
				</td>
				<td>
				<input type="number" name="hasbandage" pattern="[0-9]+"  placeholder="hasbandage "  readonly="">
					
				</td>
				</tr>
			
		
		     
		
		<center><h2> marriage registration form</h2></center>
		
		     	

		        
		      <tr>
		      <td width="140px" height="40px" style="font-size:19px;">marriageid
		      </td>
		      <td width="140px">
				<input type="text" name="marriageid" pattern="[A-Za-z0-9]+"  placeholder="Enter id " required="" required=""> 
				</td>
				<td width="140px" >
					
				</td>
				</tr>
		      <tr>
		      <td>wifebirthid:
		      </td>
		      <td>
		    <input type="text" name="wifebirthid" pattern="[A-Za-z]+"  placeholder="Enter baby name " value="<?php echo $wifeid;?>" >
					
				</td>
				</tr>
				<tr>
				<td> wifefname
				</td>
				<td>
		<input type="text" name="wifefname" pattern="[A-Za-z]+"  placeholder="wifefname " value="<?php echo $wifefname;?>">
					
				</td>
				</tr>
				<tr>
				<td> wifelname
				</td>
				<td>
				<input type="text" name="wifelname" pattern="[A-Za-z]+"  placeholder="wifelname " value="<?php echo $wifemname;?>">
					
				</td>
				</tr>
				<tr>
				
				<td>wifeage:
				</td>
				<td>
				<input type="number" name="wifeage" pattern="[A-Za-z]+"  placeholder="wifeage "  required="">
				
				
				      </td>
				      </tr>
				      <tr>
				      <td>
				   marragedate:
				   </td>
				   <td>
		<input type="date" name="marragedate"  placeholder="marragedate " required="">
					
				</td>
				</tr>
				<tr>
				<td>
					  marriageconditon:
					  </td>
					  <td>
				<input type="text" name="marragecondition"  placeholder="marriageconditon "  required="">
					
				</td>
				</tr>
				<tr>
				<td>
				   marriagestatus:
				   </td>
				   <td>
				<input type="text" name="marriagestatus"  placeholder="marriagestatus "  value="married"  required="">
					
				</td>
				</tr>
				      <tr>
		<td>region:</td>
		<td><input  type="text" name="region"  readonly value="<?php echo $region;?>" ></td>
		</tr>
		<tr>
		<td>zone:</td>
		<td><input  type="text" name="zone"  readonly value="<?php echo $zone;?>" ></td>
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
		<td><input  type="text" name="kebele" required=""  value="<?php echo $kebele;?>" ></td>
		</tr>
				
				<tr>
				<td width="140px" height="40px">
					
				</td>
				<td>
<input type="submit" name="insert" value="insert" style="border-radius:5px;font-size:12pt;border:1px solid #336600;padding:2px;color:white; background:#808675;;width:60px;"/>
<input type='reset'  value='Clear' style="border-radius:5px;font-size:12pt;border:1px solid #336600;padding:2px;color:white; background:#808675;;width:60px;">
				 	
				 </td>
				 </tr>
				 </table>
				 </form>
				 </fieldset>
			</center>
		</div>
		</td>
		<td>
		<div id="divSideContentRight">
		<p>calander</p>
					<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Display Date and Time in Javascript</title>
		<script type="text/javascript" src="date_time.js"></script>
		</head>
		<body>
		    <span id="date_time"></span>
		    <script type="text/javascript">window.onload = date_time('date_time');</script>
		</body>
		</html>
					<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Javascript Calendar</title>
		<link rel="stylesheet" media="screen, print, handheld" type="text/css" href="calendar.css" />
		<script type="text/javascript" src="calendar.js"></script>
		</head>
		<body>
		<script type="text/javascript">
		    calendar();
		</script>
		</body>
		</html>
		<div id="dmu">
		Additional Site<br/>		
		<ul>
			<li><a href="http://www.dmu.edu.et/"  id="style1"target="content"><img src="image/a.jpeg" width="25"height="20"/> <strong><font >DMU</font></strong></a><br/></li>
					</ul>
					</div>

		</div>
		</td></tr>

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