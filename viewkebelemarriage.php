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
	?>
		
	</div>
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
			<table><tr><td><font size="5" color=blue>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wellcome to marriage information in <?php echo"$kebele kebele"?></font><br/><br/></td></tr></table>
		
		<form>
		<table class="data-table" style="margin-left: 15px;margin-right: 15px;margin-top: 15px;">
		
		 <?php

		$u="select * from marriagetable where marriagestatus='married' and kebele='$kebele' and uid='$uid'";
				 $view=mysql_query($u,$con);
					$rowCheck = mysql_num_rows($view);
				 if($rowCheck>0)
				 {
				 	?>
				 	
<tr><th class="thead"> marriage identfication</th>
			<th>hasband name</th>
			<th>hasband father name</th>
			
			<th> hasband age</th>
			<th> hasband photo</th>
			<th>wife name</th>
			<th>wife father name</th>
			<th>wife age</th>
			<th> wife photo</th>
			
			<th>marriage kebele</th>
			<th>marrage date</th>
			<th>marrage type</th>
			
           </tr>
				 	<?php



				
				 
				while($row = mysql_fetch_array($view))
	            {
	            	echo "<tr>";
	            	echo "<td>".$row['marriageid']."</td>";
	            	echo "<td>".$row['hasbandfname']."</td>";
	            	
	            	echo "<td>".$row['hasbandlname']."</td>";
	            	echo "<td>".$row['hasbandage']."</td>";
	            
	            	echo "<td><img src='".$row["hphoto"]."' width=40 height=40 alt=image /></td>";
	            	echo "<td>".$row['wifefname']."</td>";
	            	echo "<td>".$row['wifelname']."</td>";
	            	echo "<td>".$row['wifeage']."</td>";
	            	            	echo "<td><img src='".$row["wphoto"]."' width=40 height=40 alt=image /></td>";
	            	
	            
	            	
	            	echo "<td>".$row['kebele']."</td>";
	            	
                    echo "<td>".$row['marragedate']."</td>";
	            	echo "<td>".$row['marragecondition']."</td>";
	            	
	            	
  }
       
echo "</table><table>";
                   
	            	echo "<tr><td colspan=10><font size=5> Total number of marriaged  in kebele $kebele =  $rowCheck </td></tr></font>";
	            	
                  
                    
        }
else
    echo "<font size=5>No Register marriaged people in ".$woreda." woreda ".$kebele." kebele</font>".mysql_error($con); 


 echo "<tr>  </table></form>";


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