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
				<table><tr><td><font size="5" color=blue>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wellcome to birth registration form in <?php echo"$kebele kebele"?></font><br/></td></tr></table>
				  <?php
		     if(isset($_POST['register']))
		     {
		     				$id=$_POST['kooficer'];
				$babyname=$_POST['babyname'];
				$fathername=$_POST['fathername'];
				 $gfather=$_POST['gfather'];
				 $mathername=$_POST['mathername'];
				  $mathermname=$_POST['gmaname'];
				$sex=$_POST['sex'];
				 $bdate=$_POST['bdate'];
				 
				$nation=$_POST['nation'];
				$regdate=$_POST['regdate'];
				 $region=$_POST['region'];
				
				 $zone=$_POST['zone'];
				$city=$_POST['city'];
				$woreda=$_POST['woreda'];
				$kebele=$_POST['kebele'];
				 $birthstatus=$_POST['birthstatus'];
			//insert data in to the table
		$sql="INSERT INTO birthtable(fname,mname,lname,motherfname,mothermname,sex,birthdate,nationality,registrationdate,birthregion,birthzone,birthcity,birthworeda,birthkebele,uid,statusformrg,birthstatus) VALUES('$babyname','$fathername','$gfather','$mathername','$mathermname','$sex','$bdate','$nation','$regdate','$region','$zone','$city','$woreda','$kebele','$id','unmarried','born')";
		$res= mysql_query($sql,$con);
			if(!$res)
			{
				echo "<font size='5'>baby registered before try again!!!</font>".mysql_error($con);
				
			}
			else
			{
				echo "<font size='5' color=green>born baby successfully registered!!!</font>";
				
			}
				}	
		  ?>
		  <br/><br/><br/>
				<fieldset style="border-radius:5px;">
		        <legend><font size=4>birth registration form</font>s</legend>
			<form action="birthreg_form.php" method="post">
		<table>
		     
		      <tr>
		      <td>baby name:
		      </td>
		      <td>
				<input type="text" name="babyname" pattern="[A-Za-z]+"  placeholder="Enter baby name " required="" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" required="">
					
				</td>
				</tr>
				<tr>
				<td> father_name:
				</td>
				<td>
				<input type="text" name="fathername" pattern="[A-Za-z]+"  placeholder="enter father " required="" style="font-size:12pt;colo               r:black;border:1px solid gray;padding:2px; width:230px;" required="">
					
				</td>
				</tr>
				<tr>
				<td> grand father
				</td>
				<td>
				<input type="text" name="gfather" pattern="[A-Za-z]+"  placeholder="gfather " required="" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" required="">
					
				</td>
				</tr>
				<tr>
				<td> mother_name
				</td>
				<td>
				<input type="text" name="mathername" pattern="[A-Za-z]+"  placeholder="maname " required="" style="font-size:12pt;color:blac                 k;border:1px solid gray;padding:2px; width:230px;" required="">
					
				</td>
				</tr>
				<tr>
				<td> grand mother_name
				</td>
				<td>
				<input type="text" name="gmaname" pattern="[A-Za-z]+"  placeholder="gmaname " required="" style="font-size:12pt;color:black;                border:1px solid gray;padding:2px; width:230px;" required="">
					
				</td>
				</tr>
				<tr>
				<td>sex:
				</td>
				<td>
				
				<select name="sex" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" required="">
				
				<option>
				    female
				    </option>
				<option>
				      male
				      </option>
				      </select>
				      </td>
				      </tr>
				<tr>
				<td>
				   birth date:
				   </td>
				   <td>
				<input type="date" name="bdate"    style="font-size:12pt;color:black;border:1px solid gray;paddin          g:2px; width:230px;" value="<?php echo date("Y-m-d"); ?>"  >
					
				</td>
				</tr>
				
		<tr>
		<td>nationality:</td>
		<td><input  type="text" name="nation" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" required readonly value="<?php echo $nation;?>" ></td>
		</tr>
		<tr>
		<td>region:</td>
		<td><input  type="text" name="region" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" required readonly value="<?php echo $region;?>" ></td>
		</tr>
		<tr>
		<td>zone:</td>
		<td><input  type="text" name="zone" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" required readonly value="<?php echo $zone;?>" ></td>
		</tr>
		<tr>
		<td>woreda:</td>
		<td><input  type="text" name="woreda" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" required readonly value="<?php echo $woreda;?>" ></td>
		</tr>
		<tr>
		<td>city:</td>
		<td><input  type="text" name="city" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" required readonly value="<?php echo $city;?>" ></td>
		</tr>
		<tr>
		<td>kebele:</td>
		<td><input  type="text" name="kebele" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" required  value="<?php echo $kebele;?>" ></td>
		</tr>
					<tr>
					<td>
					  registration year:
					  </td>
					  <td>
				<input type="year" name="regdate"   value="<?php echo date("Y"); ?>" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;">
					
				</td>
				</tr>
				<tr>
				<td>
				   birthstatus:
				   </td>
				   <td>
				<input type="text" name="birthstatus"   value="born" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" required="">
					
				</td>
				</tr>
				<tr>
				<td>
				   Kebele officer:
				   </td>
				   <td>
				<input type="text" name="kooficer"   value="<?php echo $id; ?>" style="font-size:12pt;color:black;border:1px solid gray;padding:2px; width:230px;" readonly>
					
				</td>
				</tr>
				
				
				<tr>
				<td width="230px" height="40px">
					
				</td>
				<td>
			     <input type='submit' name='register' value='registerbirth' class="btn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 <input type='reset'  value='Clear' id="reset">
				 
				 </td>
				 </tr>
				 </table>
				 </form>
				 </fieldset>
			
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