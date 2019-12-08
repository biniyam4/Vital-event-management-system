<?php
session_start();
$EID=$_SESSION['eid'];
?>
<html>
<head><link rel="stylesheet" type="text/css" href="stylesheet.css">
<title>extension load and payment management system in DMU</title>
</head>
<body bgcolor="#4a657d">
<table border=1 style="height:200px; margin-left: 90px;"><tr style=colspan:3;><td>
<?php
include("head1.php");
?></td></tr>
<tr bgcolor="#3e3e3e">
<td colspan=2>
<?php
include("link2.php");
if(isset($_SESSION['username'])&& isset($_SESSION['password']))
{	
$acyer=$_SESSION['accadamic_year'];
?>
</td></tr>
<tr>
<td bgcolor="white">
<?php
include("departheadlink.php");
?>
</div>
<center>
<?php
if(isset($_POST["department"]))
{
	$empid=$_POST["eid"];
	$dept=$_POST["department"];
	$acyr=$_POST["accyer"];
}
?>
<fieldset style="width:400px; height:370px;margin-top:-400px;"><legend>assign course form</legend>
<form action="" method=post><r><br></r>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;accademic_year:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="accyer"  required style='width: 40%;
					height:6%;font-size:15px;box-sizing: border-box; 
					border: 1px solid #060907; box-sizing: border-box; padding: 0px;' ><br>
					
                        <option selected="selected" value="">Choose</option>
                        <?php
                        
						$con=mysqli_connect("localhost","root","","elpms");
if($con){
					$result1 = mysqli_query($con,"SELECT distinct(accadamic_year),calenderID FROM calender where accadamic_year='$acyer'");
					//$matchfound=mysqli_query($con,$result1);
					while($finresult = mysqli_fetch_array($result1)){
						$cid = $finresult ['calenderID'];
						$acyr = $finresult ['accadamic_year'];
								?>
					<option value="<?php echo $cid; ?>"><?php echo $acyr; ?></option>
				<?php  
	}
		
		}?>
                    </select>
                    <br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Employee ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php 
if(isset($_POST["eid"])){
	?>
<input type=text name="eid" value="<?php echo $empid;?>" required>
<?php
}else{?>
<input type=text name="eid" pattern="[a-zA-Z0-9/]+" required>
	<?php
}?>
</br></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;department:&nbsp;&nbsp;
<select name="department"  required style='width: 40%;
					height:6%;font-size:15px;box-sizing: border-box; 
					border: 1px solid #060907; box-sizing: border-box; padding: 0px;' onchange="this.form.submit()"><br>
					
                        <?php
						$con=mysqli_connect("localhost","root","","elpms");
if($con){
	if(isset($_POST["department"]))
						{
					$result1 = mysqli_query($con,"SELECT distinct(depID),Dname FROM department");
					while($finresult = mysqli_fetch_array($result1)){
						
						$did = $finresult ['depID'];
						$name = $finresult ['Dname'];
						
							if($_POST["department"]==$did)
								{?>
					<option value="<?php echo $did; ?>" selected><?php echo $name; ?></option>
				<?php 
			}else{
				?>
						<option value="<?php echo $did; ?>"><?php echo $name; ?></option>
						<?php }}
				 
								
	}else{
		?>
				<option value="" selected>choose</option>
				<?php
		$result1 = mysqli_query($con,"SELECT distinct(depID),Dname FROM department");
					while($finresult = mysqli_fetch_array($result1)){
						
						$did = $finresult ['depID'];
						$name = $finresult ['Dname'];
		?>
				<option value="<?php echo $did; ?>"><?php echo $name; ?></option>
				<?php
	}}} ?>
                    </select>
                    <br><br>
                    
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;course:&nbsp;&nbsp;
<select name="course"  required style='width: 40%;
					height:6%;font-size:15px;box-sizing: border-box; 
					border: 1px solid #060907; box-sizing: border-box; padding: 0px;' ><br>
					
                        
                        <?php
                        if(isset($_POST["department"]))
                    {
						$department=$_POST["department"];
						$con=mysqli_connect("localhost","root","","elpms");
if($con){
	$sql2="select distinct(Ctitle),Ccode,depID from course where depID='$department'";
					$result1 = mysqli_query($con,$sql2);
					while($finresult = mysqli_fetch_array($result1)){
						$cc = $finresult ['Ccode'];
						$name = $finresult ['Ctitle'];
								?>
					<option value="<?php echo $cc; ?>"><?php echo $name; ?></option>
					
				<?php } }
						
						else
						echo "<option value='' selected>Choose</option>";
	} ?>
                    </select>
                    <br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;year:&nbsp;&nbsp;
<select name="year" required style='width: 40%;
					height:6%;font-size:15px;box-sizing: border-box; 
					border: 1px solid #060907; box-sizing: border-box; padding: 0px;'>
					
							
                        <?php
                        if(isset($_POST["department"]))
                    {
						$department=$_POST["department"];
						$con=mysqli_connect("localhost","root","","elpms");
if($con){
	$sql3="select distinct(batch),name,depID,secID from section where depID='$department'";
					$result2 = mysqli_query($con,$sql3);
					while($finresult1 = mysqli_fetch_array($result2)){
						$yer= $finresult1 ['batch'];
						$name = $finresult1 ['name'];
						$secid = $finresult1 ['secID'];
						$num = $finresult1 ['name'];
						echo $num;
								?>
					<option value="<?php echo $secid; ?>"><?php echo $yer; ?></option>
					
				<?php } }
						
						else
						echo "<option value='' selected>Choose</option>";
	} ?>
                    </select>
                    <br><br>
							

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;semister:&nbsp;&nbsp;
<select name="sem" required style='width: 40%;
					height:6%;font-size:15px;box-sizing: border-box; 
					border: 1px solid #060907; box-sizing: border-box; padding: 0px;'>
					<option selected="selected" value="">Choose</option>
					<option selected="selected" value="1">1</option>
					<option selected="selected" value="2">2</option>
							 <!-- <?php
						$con=mysqli_connect("localhost","root","","elpms");
if($con){
	           $sql4="select * from calender where accademic_year='$acyr'";
					$result3 = mysqli_query($con,$sql4);
					while($finresult4 = mysqli_fetch_assoc($result3)){
						$sem= $finresult4 ['semester'];
						//$name = $finresult1 ['name'];
						$cid = $finresult4 ['calenderID'];
								?>
					<option value="<?php echo $cid; ?>"><?php echo $sem; ?></option>
					
				<?php  	}
	} ?>-->
                    </select>
                    <br><br>
						
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;section:&nbsp;&nbsp;
<select name="section"  required style='width: 40%;
					height:6%;font-size:15px;box-sizing: border-box; 
					border: 1px solid #060907; box-sizing: border-box; padding: 0px;' ><br>
                       
							
                        <?php
                        if(isset($_POST["department"]))
                    {
						$department=$_POST["department"];
						$con=mysqli_connect("localhost","root","","elpms");
if($con){
	$sql3="select distinct(name),name,depID,secID from section where depID='$department'";
					$result2 = mysqli_query($con,$sql3);
					while($finresult1 = mysqli_fetch_array($result2)){
						//$yer= $finresult1 ['batch'];
						$name = $finresult1 ['name'];
						$secid = $finresult1 ['secID'];
						$num = $finresult1 ['name'];
						echo $num;
								?>
					<option value="<?php echo $secid; ?>"><?php echo $name; ?></option>
					
				<?php } }
						
						else
						echo "<option value='' selected>Choose</option>";
	} ?>
                    </select>
                    <br><br>
							
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit value=register name="reg">
<input type=reset value=clear name=clear >
</form>
<?php
if(isset($_POST["reg"]))
{
$acyr=$_POST["accyer"];
$eid=$_POST["eid"];
$did=$_POST["department"];
$cc=$_POST["course"];
$year=$_POST["year"];
$sem=$_POST["sem"];
$scid=$_POST["section"];
$con=mysqli_connect("localhost", "root", "","elpms");
			If($con)
			{	
			$sql2="select * from asscourse where EID='$eid' and department='$did' and course='$cc' and year='$year'  and semister='$sem' and SecID='$scid'";
							$userexist=mysqli_query($con,$sql2);
							if(mysqli_affected_rows($con))
							//if($userexist)
							echo "assigned before!";
							else
							{
		$sql="insert into asscourse values('$acyr','identity(1,1)','$eid','$did','$cc','$year','$sem','$scid')";
		$result=mysqli_query($con,$sql) ;
If($result)
			echo "successfully assigned";
		else
 die ("not assigned ".mysqli_error($con));    
		
		}}
		else
     
 echo "Connection Failed:";
}
?>
</fieldset></center></td></tr><tr><td>
<?php
include("ftr.php");
}
else
header("location:index.php");
?></td></tr>
</table></fieldset>
</body>
</html>