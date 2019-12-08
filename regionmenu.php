
<?php
		include("connection.php");

$u="select * from feedbacktable where role='kebeleofficer' And Status='New'";
$record=mysql_query($u,$con);
$count=mysql_num_rows($record);


?>




<ul>
	<li><a href="viewRfeedback.php">view feedback&nbsp;&nbsp;&nbsp;&nbsp;[<font color="red"><?php echo $count;?></font>]</a></li>
	

	
	<li><a href="">view events</a>
	<ul>
	
	<li><a href="viewRbirth.php">view birth event</a></li>

	<li><a href="viewRtdeath.php">view death people</a></li>
	
	<li><a href="viewRdivorce.php">view divorce people</a></li>
	<li><a href="viewRmarrage.php">view marrage people</a></li>
	
	<li><a href="totalRpopulation.php">view population size</a></li>
	</ul>
	</li>
	
		<li><a href="sendRfeedback.php">send feedback</a></li>
		
	<li><a href="logout.php">logout</a></li>
	
	</ul>
	
	<?php 

?>