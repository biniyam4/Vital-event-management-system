<?php
		include("connection.php");

$u="select * from feedbacktable where role='federaloficer' And Status='New'";
$record=mysql_query($u,$con);
$count=mysql_num_rows($record);


?>


<ul>
<li><a href="viewfederalfeedback.php">view feedback&nbsp;&nbsp;&nbsp;&nbsp;[<font color="red"><?php echo $count;?></font>]</a></li>
	<li><a href="">update event</a>
	<ul>
		<li><a href="updatefederaldivorce.php">update divorce</a></li>
		<li><a href="updatefederalmarriage.php">update marriage</a></li>
		<li><a href="updatefederalbirth.php">update birth</a></li>
		<li><a href="updatefederaldeath.php">update death</a></li>
	</ul></li>
	
	<li><a href="">view event</a>
	<ul>
		<li><a href="viewfederaldivorce.php">view divorce event</a></li>
		<li><a href="viewfederalmarriage.php">view marriage event</a></li>
		<li><a href="viewfederalbirth.php">view birth event</a></li>
		<li><a href="viewfederaldeath.php">view death event</a></li>
		<li><a href="viewfederaltotalpopulation.php">view total population</a></li>
	</ul></li>
		<li><a href="logout.php">logout</a></li>
	</ul>