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
<script language="javascript">
	
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width:600px;border:-10px solid red;margin-left:400px; font-size:16px; font-family:TimesNewRoman;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
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
		
	$uid=$row["uid"];
		
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
			<div id="divContentCenter">
				<font size=5 color=blue><br/><br/>GIVING CERTIFICATE  FOR VITAL EVENTS in <?php echo" $kebele kebele";?></font>
				 
		<form method="post" action=""><table border="1"><tr><td>
		<font size=3>select and search birth Event</font></td><td>
			<input type="text" name="birthid" value="" placeholder="select birth identfication">
			<input type="submit" name="EDIT" value="searchBirth"></td></tr>
			<tr><td><font size=3>select and search Death Event</font></td><td>
			<input type="text" name="deathid" value="" placeholder="select death identfication">
			<input type="submit" name="death" value="searchdeath"/></td></tr>
			<tr><td><font size=3>select and search Divorce Event</font></td><td>
			<input type="text" name="divorcename" value="" placeholder="select Divorce identfication">
			<input type="submit" name="divorce" value="searchDivorce"/></td></tr>
		 
			<tr><td>
		<font size=3>select and search Marriage Event</font></td><td>
			<input type="text" name="marriageid" value="" placeholder="select Marriage identfication">
			<input type="submit" name="marriage" value="searchMarriage"/></td></tr>
			
		</table></form>
		<div id="print_content">
					           <?php
                    					   
					   	
					  	
					   
						if(isset($_POST["EDIT"]))
						{	
						$birthid=$_POST['birthid'];
						$sql="select * from birthtable where birthid='$birthid' and birthstatus='born'";
						$recordfound=mysql_query($sql,$con);
						echo" <fieldset>";
							if(mysql_affected_rows($con))
							{
				$row=mysql_fetch_assoc($recordfound);
				$id=$row["birthid"];
				$fname=$row["fname"];
				$mname=$row["mname"];
				$lname=$row["lname"];
				$motherfname=$row["motherfname"];
				$mothermname=$row["mothermname"];
			$nationality=$row["nationality"];
				$birthdate=$row["birthdate"];
			
				$birthregion=$row["birthregion"];
				$birthzone=$row["birthzone"];
				$birthcity=$row["birthcity"];
				$birthworeda=$row["birthworeda"];
					$birthkebele=$row["birthkebele"]
				
				?>
				
				
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='image/flag.jpg' width=100 height=80 alt=image />
					
	 <h1><font size=6 color=green>	F.D.R.E vital event registration agency  </font></h1><br/>
	 		 <h1><font size=6 color=green>	 birth certificate </font></h1><br/>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo" <font size=5>Birth identfication number:<font color=blue>$id</font></font>";?><br/><br/>
					<?php
	
	echo"<font size=3> baby <font color=blue><u>$fname</u></font>&nbsp;&nbsp;born from his father <font color=blue> <u>$fname $mname $lname</u></font> &nbsp;&nbsp;And his mother  <font color=blue> <u>$motherfname</u></font> <font color=blue><u>$mothermname</u></font> since <font color=blue><u>$birthdate</u> </font><br/> nationality:<font color=blue>$nationality</font> </font><br/><font size=4>Birth place</font><br/><font size=4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Region:<font color=blue>$birthregion</font> </font><br/><font size=4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Zone:<font color=blue>$birthzone</font> </font><br/><font size=4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Woreda:<font color=blue>$birthworeda</font> </font><br/> <font size=4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kebele:<font color=blue>$birthkebele</font> </font><br/><br/><br/>";
	
	
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=5>               This Birth certeficate given by vital Event Agency:</font><br/>";
	?>
	<font size="3">The certeficate is invalid unless the Vital Event Registration Agency sign on it!!</font>
	
	
	
	<?php
	


	

				}
				else{
					$sql2="select * from birthtable where birthid='$birthid' and birthstatus='died'";
						$recordfound=mysql_query($sql2,$con);
						if(mysql_affected_rows($con))
							{
				$row=mysql_fetch_assoc($recordfound);
				echo "<font color=red size=5>individual already died do not take certeficate</font>";
			}
			else
				echo "<font color=red size=5>incorrect id selection</font>";
				}


				}
				
        
				?>
			
				
					           <?php
                     
					   
					   	
					  	
					   
						if(isset($_POST["death"]))
						{	
						$deathid=$_POST['deathid'];
						$sql="select * from deathtable where deathid='$deathid'";
						$recordfound=mysql_query($sql,$con);
						echo" <fieldset>";
							if(mysql_affected_rows($con))
							{
				$row=mysql_fetch_assoc($recordfound);
				?>
				
				<table class="data-table" style="margin-left: 15px;margin-right: 15px;margin-top: 15px;">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='image/flag.jpg' width=100 height=80 alt=image />
					
	 <h1><font size=6 color=green>	F.D.R.E vital event registration agency  </font></h1><br/>
						<h1><font size=10 color=green> death certeficate </font></h1>
					<?php
	echo "<form action='' method=post>";
	echo"<tr><td>death identfication number:</td><td><input type=text name='deathid' value='".$row["deathid"]."'readonly></td></tr>";
	echo "<tr><td> name:</td><td><input type=text name='fname' value='".$row["fname"]."' readonly></td></tr>";
	
	echo "<tr><td>father name:</td><td><input type=text name='lname' value='".$row["lname"]."' readonly></td></tr>";
	echo"<tr><td>sex:</td><td><input type=text name='sex' value='".$row["sex"]."'readonly></td></tr>";
	echo "<tr><td>nationality:</td><td><input type=text name='nationality' value='".$row["nationality"]."' readonly></td></tr>";
	
	echo "<tr><td>birth date:</td><td><input type=text name='birthdate' value='".$row["birthdate"]."' readonly></td></tr>";
	
	echo "<tr><td>date of death:</td><td><input type=text name='dateofdeath' value='".$row["dateofdeath"]."' readonly></td></tr>";
	echo "<tr><td>work position:</td><td><input type=text name='workposition' value='".$row["workposition"]."' readonly></td></tr>";
	
	echo "<tr><td>death region:</td><td><input type=text name='deathregion' value='".$row["deathregion"]."' readonly></td></tr>";
	echo "<tr><td>death city:</td><td><input type=text name='deathcity' value='".$row["deathcity"]."' readonly></td></tr>";
	echo "<tr><td>death woreda:</td><td><input type=text name='deathworeda' value='".$row["deathworeda"]."' readonly></td></tr>";
	echo "<tr><td>death kebele:</td><td><input type=text name='deathkebele' value='".$row["deathkebele"]."' readonly></td></tr>";
	echo "<tr><td>death reason:</td><td><input type=text name='deathreason' value='".$row["deathreason"]."' readonly></td><td>This Death certeficate given by vital Event Agency:</td></tr>";

	?>
	<font size="3">The certeficate is invalid unless the Vital Event Registration Agency sign on it!!</font>
	
	
	
	<?php
	
	echo"</form></table></fieldset>";
				}
			
				
				}
				
          
            
				?>	





					           <?php
                      
					   	
					  	
					   
						if(isset($_POST["divorce"]))
						{	
						$divorce=$_POST['divorcename'];
						$sql="select * from divorce where divorceid='$divorce'";
						$recordfound=mysql_query($sql,$con);
						echo" <fieldset>";
							if(mysql_affected_rows($con))
							{
				$row=mysql_fetch_assoc($recordfound);
				?>
								
				
				<table class="data-table" style="margin-left: 15px;margin-right: 15px;margin-top: 15px;">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='image/flag.jpg' width=100 height=80 alt=image />
					
	 <h1><font size=6 color=green>	F.D.R.E vital event registration agency  </font></h1><br/>
	 <h1><font size=10 color=green> Divorce certificate </font></h1>
					<?php
	echo "<form action='' method=post>";
	echo"<tr><td>divorce identfication number:</td><td><input type=text name='birthid' value='".$row["divorceid"]."'readonly></td></tr>";
	echo "<tr><td>hasband name:</td><td><input type=text name='fname' value='".$row["hasbandfname"]."' readonly></td></tr>";
	echo"<tr><td>hasband fathername:</td><td><input type=text name='mname' value='".$row["hasbandlname"]."'readonly></td></tr>";
	echo "<tr><td>wife name:</td><td><input type=text name='lname' value='".$row["wifefname"]."' readonly></td></tr>";
	echo"<tr><td>wife fathername:</td><td><input type=text name='motherfname' value='".$row["wifelname"]."'readonly></td></tr>";
	echo "<tr><td>divorce date:</td><td><input type=text name='mothermname' value='".$row["divorcedate"]."' readonly></td></tr>";
	
	echo "<tr><td>divorce reason:</td><td><input type=text name='birthdate' value='".$row["divorcereason"]."' readonly></td></tr>";

	echo "<tr><td>divorce region:</td><td><input type=text name='nationality' value='".$row["divorceregion"]."' readonly></td></tr>";
	echo"<tr><td>divorce zone:</td><td><input type=text name='registrationdate' value='".$row["divorcezone"]."'readonly></td></tr>";
	echo "<tr><td>divorce woreda:</td><td><input type=text name='birthregion' value='".$row["divorceworeda"]."' readonly></td></tr>";
	echo "<tr><td>divorce city:</td><td><input type=text name='birthzone' value='".$row["divorcecity"]."' readonly></td></tr>";
	echo "<tr><td>divorce kebele:</td><td><input type=text name='birthcity' value='".$row["divorcekebele"]."' readonly></td></tr>";
	
	echo "<tr><td>number of child:</td><td><input type=text name='birthkebele' value='".$row["numberofchild"]."' readonly></td></tr>";
	echo "<tr><td>officer code:</td><td><input type=text name='birthkebele' value='".$row["uid"]."' readonly><td>this divorce certeficate given by vital Event Agency:</td></td></tr>";
	?>
	<font size="3">The certeficate is invalid unless the Vital Event Registration Agency sign on it!!</font>
	
	
	
	<?php
	
	echo"</form></table></fieldset>";
				}
				else
				{
					$sql2="select * from marriagetable where marriageid='$divorce' and marriagestatus='unmarried'";
						$recordfound=mysql_query($sql2,$con);
						if(mysql_affected_rows($con))
							{
				$row=mysql_fetch_assoc($recordfound);
				echo "<font color=red size=5>you are not married unable to take divorce certeficate</font>";
			}
			else
				echo "<font color=red size=5>incorrect id selection</font>";
				}
				}
				
         
            
				?>	



					           <?php
                      
					   	
					  	
					   
						if(isset($_POST["marriage"]))
						{	
						$marriageid=$_POST['marriageid'];
						$sql="select * from marriagetable where marriageid='$marriageid' and marriagestatus='married'";
						$recordfound=mysql_query($sql,$con);
						echo" <fieldset>";
							if(mysql_affected_rows($con))
							{
				$row=mysql_fetch_assoc($recordfound);
				?>
								

								
				
				<table class="data-table" style="margin-left: 15px;margin-right: 15px;margin-top: 15px;">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='image/flag.jpg' width=100 height=80 alt=image />
					
	 <h1><font size=6 color=green>	F.D.R.E vital event registration agency  </font></h1><br/>
	 <h1><font size=10 color=green> marriage certificate </font></h1>
					<?php
	echo "<form action='' method=post>";
	echo"<tr><td>marriage identfication number:</td><td><input type=text name='birthid' value='".$row["marriageid"]."'readonly></td></tr>";
	
	echo"<tr><td>hasband name:</td><td><input type=text name='mname' value='".$row["hasbandfname"]."'readonly></td></tr>";
	echo"<tr><td>hasband fathername:</td><td><input type=text name='mname' value='".$row["hasbandlname"]."'readonly></td></tr>";
	echo "<tr><td>hasband age:</td><td><input type=text name='lname' value='".$row["hasbandage"]."' readonly></td></tr>";
     
	echo "<tr><td>wife name:</td><td><input type=text name='lname' value='".$row["wifefname"]."' readonly></td></tr>";
	echo"<tr><td>wife fathername:</td><td><input type=text name='motherfname' value='".$row["wifelname"]."'readonly></td></tr>";
	echo "<tr><td>wife age:</td><td><input type=text name='lname' value='".$row["wifeage"]."' readonly></td></tr>";
	

	echo "<tr><td>marrige region:</td><td><input type=text name='nationality' value='".$row["region"]."' readonly></td></tr>";
	echo"<tr><td>marriage zone:</td><td><input type=text name='registrationdate' value='".$row["zone"]."'readonly></td></tr>";
	echo "<tr><td>marriage woreda:</td><td><input type=text name='birthregion' value='".$row["woreda"]."' readonly></td></tr>";
	echo "<tr><td>marriage city:</td><td><input type=text name='birthzone' value='".$row["city"]."' readonly></td></tr>";
	echo "<tr><td>marriage kebele:</td><td><input type=text name='birthcity' value='".$row["kebele"]."' readonly></td></tr>";
	
	echo "<tr><td>marragedate:</td><td><input type=text name='birthkebele' value='".$row["marragedate"]."' readonly></td></tr>";
	echo "<tr><td>marrage type:</td><td><input type=text name='birthkebele' value='".$row["marragecondition"]."' readonly></td></tr>";
	echo "<tr><td>hasband photo:<img src='".$row["hphoto"]."' width=40 height=100 alt=image /></td><td>wife photo:<img src='".$row["wphoto"]."' width=40 height=100 alt=image /></td><td>this marriage certeficate given by vital Event Agency:</td></tr><br/>";
	?>
	<tr><td><font size="3">The certeficate is invalid unless the Vital Event Registration Agency sign on it!!</font></td></tr>
	
	
	
	<?php
	
	echo"</form></table><font size=3>Erasers,alteration  invalidate this marriage certeficate!!!</font></fieldset>";
				}
				else
				echo "<font color=red >such individual not registered try again? </font>".mysql_error($con);
				
				}
				
         if(isset($_POST["marriagecertificate"]))
                    
				?>	








</div>
 
			<a href="javascript:Clickheretoprint()" target="_blank" ><font size="5"color="#3d80c2">Print certeficate!</font></a>
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
		</table></div>
		<?php
}
else
{
header("location:home.php");
}
?>
		</body>
		</html>