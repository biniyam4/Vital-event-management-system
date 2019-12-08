<?php
		include("connection.php");

$u="select * from feedbacktable where role='kebeleofficer' And Status='New'";
$record=mysql_query($u,$con);
$count=mysql_num_rows($record);


?>




<ul>
	
	
	
	<li><a href="viewRZWfeedback.php">view feedback&nbsp;&nbsp;&nbsp;&nbsp;[<font color="red"><?php echo $count;?></font>]</a></li>
	
	<li><a href="">view events</a>
	<ul>
	
	<li><a href="viewRZWbirth.php">view birth event</a></li>

	<li><a href="viewRZWtdeath.php">view death people</a></li>
	
	<li><a href="viewRZWdivorce.php">view divorce people</a></li>
	<li><a href="viewRZWmarrage.php">view marrage people</a></li>
	
	<li><a href="totalRZWpopulation.php">view population size</a></li>
	</ul>
	</li>
	
		<li><a href="sendRZWfeedback.php">send feedback</a></li>
		
	<li><a href="logout.php">logout</a></li>
	
	</ul>
	
	<?php 

?>