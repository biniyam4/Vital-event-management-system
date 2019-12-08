	<?php
	session_start();
	include("connection.php");
	?>
	<html>
	<head>
	<title>home page</title>
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



	        </div>

	</td>
	<td>
		<div id="divContentCenter" ><br><br><br><br><br>
		<center>
		<legend><h2>wellcome to our feedback</h2></legend>
		</center>
		<form>
		<table border="1">
			<th> feedbackid</th>
			<th>user type</th>
			<th>user name</th>
			<th>comment</th>
			<th>date</th>
           <tr>
		 <?php

		$u="select * from feedbacktable";
				 $view=mysql_query($u,$con);
					$rowCheck = mysql_num_rows($view);
				 
				 
				while($row = mysql_fetch_array($view))
	            {
	            	echo "<tr>";
	            	echo "<td>".$row['feedbackid']."</td>";
	            	echo "<td>".$row['usertype']."</td>";
	            	echo "<td>".$row['username']."</td>";
	            	echo "<td>".$row['comment']."</td>";
	            	echo "<td>".$row['date']."</td>";
                    echo "</tr>";
}
                    ?>
                    </table>
                    </form>
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