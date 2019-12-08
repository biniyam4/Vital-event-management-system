

<?php
		include("connection.php");

$u="select * from feedbacktable where role='zoneofficer' And Status='New'";
$record=mysql_query($u,$con);
$count=mysql_num_rows($record);


?>
<ul>
	
	<li><a href="viewzonefeedback.php">view feedback&nbsp;&nbsp;&nbsp;&nbsp;[<font color="red"><?php echo $count;?></font>]</a></li>

	
	<li><a href="">view events</a>
	<ul>
	
	<li><a href="viewzonebirth.php">view birth event</a></li>

	<li><a href="viewzonetdeath.php">view death people</a></li>
	
	<li><a href="viewzonedivorce.php">view divorce people</a></li>
	<li><a href="viewzonemarrage.php">view marrage people</a></li>
	
	<li><a href="totalzonepopulation.php">view population size</a></li>
	</ul>
	</li>
	
		<li><a href="sendzonefeedback.php">send feedback</a></li>
		
	<li><a href="logout.php">logout</a></li>
	
	</ul>
	
	<?php 

?>