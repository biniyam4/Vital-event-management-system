<?php
		include("connection.php");

$u="select * from feedbacktable where role='kebeleofficer' And Status='New'";
$record=mysql_query($u,$con);
$count=mysql_num_rows($record);


?>


<ul>
<li><a href="viewkebelefeedback.php">view feedback&nbsp;&nbsp;&nbsp;&nbsp;[<font color="red"><?php echo $count;?></font>]</a></li>
	<li><a href="">update event</a>
	<ul>
		<li><a href="updatekebeledivorce.php">update divorce</a></li>
		<li><a href="updatekebelemarriage.php">update marriage</a></li>
		<li><a href="updatekebelebirth.php">update birth</a></li>
		<li><a href="updatekebeledeath.php">update death</a></li>
	</ul></li>
	
	
	
	<li><a href="">view event</a>
	<ul><li>
		<li><a href="viewkebeledivorce.php">view divorce event</a></li>
		<li><a href="viewkebelemarriage.php">view marriage event</a></li>
		<li><a href="viewkebelebirth.php">view birth event</a></li>
		<li><a href="viewkebeledeath.php">view death event</a></li>
		<li><a href="viewkebeletotalpopulation.php">view total population</a></li>
	</li></ul></li>
		
		
		
		<li><a href="logout.php">logout</a></li>
	</ul><?php

?>