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
{$id=$_SESSION['uid'];
		$sql="select*from user where uid='$id'";
		$record=mysql_query($sql,$con);
		if(mysql_num_rows($record)>0)
		{
		while($row=mysql_fetch_array($record))	
		{
		$uid=$row["uid"];	
		$ufname=$row["ufname"];
		$umname=$row["umname"];
		$ulname=$row["ulname"];
		$mobile=$row["mobile"];	
		$email=$row["email"];
		$photo=$row["photo"];
		
		
		}
		}
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
require("RZWmenu.php");
?>

		
	</div>
	<tr>
	<td>
	<div id="divSideContentLeft">
 <?php
require("RZWmenu2.php");
?>
	        </div>

	</td>
	<td>
		<div id="divContentCenter" >
		<p>WELLCOME TO profile update page!</p>
		
					           <?php

						
		echo "<table><form action='' method=post>";
		echo"<tr><td>user id:</td><td><input type=text name='uid' value='$uid'readonly></td></tr>";
		echo "<tr><td>first name:</td><td><input type=text name='ufname' value='$ufname' ></td></tr>";
		echo"<tr><td>fathermname:</td><td><input type=text name='umname' value='$umname'></td></tr>";
		echo"<tr><td>gfathername:</td><td><input type=text name='ulname' value='$ulname'></td></tr>";
		echo "<tr><td>mobile:</td><td><input type=text name='mobile' value='$mobile' ></td></tr>";
		
		echo "<tr><td>email:</td><td><input type=text name='email' value='$email' ></td></tr>";
		
		echo "<tr><td>photo:</td><td><input type=file name='photo' value='$photo'></td></tr>";
		
		
		
		echo "<tr><td><input type=submit name=update value=update></td>";
		echo "<td><input type=reset value=reset></td></tr>";
		echo"</form></table>";
		
	
		?>
		
	
								<?php	
								//UPDATE				
							if(isset($_POST["update"]))
							{
							$uid=$_POST["uid"];
							$fname=$_POST["ufname"];
							$mname=$_POST["umname"];
							$lname=$_POST["ulname"];
							$mobile=$_POST["mobile"];
							$email=$_POST["email"];
							$photo=$_POST["photo"];
							
							
							
			$sql="update user set ufname='$fname',umname='$mname',ulname='$lname',mobile='$mobile',email='$email',photo='$photo' where uid='$uid'";
							$updated=mysql_query($sql,$con);
							if(mysql_affected_rows($con))
							{
							
						echo"<font color=green size=10> your profile updateed successfully!!!</font>";
						echo' <meta content="5;updaterzwprofile.php" http-equiv="refresh" />';
								
								}
							
								else{
									
								
							echo "<font color=red size=5>please add some data on the text box on the row you want?</font> ".mysql_error($con);	
							echo' <meta content="5;updaterzwprofile.php" http-equiv="refresh" />';
							}
							}
						echo" </fieldset>";
					
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