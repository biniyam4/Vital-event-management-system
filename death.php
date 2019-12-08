<?php
session_start();
include("connection.php");
?>

<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VITAL EVENT REGISTRATION INFORMATION MANEGMENT SYSTEM</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
  <?php

if(isset($_SESSION['sun'])&&isset($_SESSION['spw']))
{
?>
  <div id="all">
  
       <div>

    <form action="requestapplicants.php" method="post"  enctype="multipart/form-data">
      <div class="row">
        <h4>registrating page for wife</h4>
        <?php 
            if (isset($_GET["job_id"]))
              {
              $jid=$_GET["job_id"];
              $get_job = "select * from wife_table where wife_id='$jid' ";
              $run_job = mysql_query($conn, $get_job);
              while ($row_job=mysql_fetch_array($run_job))
               {
              $jid=$row_job['wife_id']; 
            }
            ?>
         <div style="width:417px; margin-left:42px;">
          <input type="text" name="jobid" readonly value="<?php echo "$jid"; ?>" placeholder="Job Id"/>
          
          <?php
           } 
           ?>
        </div>

        <div class="input-group input-group-icon" style="width:417px; margin-left:42px;">
          <input type="text" name="birthid"/>
 </div>
        <div style="width:417px; margin-left:42px;">
          <input type="text" name="wife_name" placeholder="wife name"/>
       
        </div>
        
        
         <div style="width:417px; margin-left:42px;">
          <input type="text" name="wfname" placeholder="wife father name"/>
       
        </div>
         <div style="width:417px; margin-left:42px;">
          <input type="text" name="nationality" placeholder="nationality"/>
       
        </div>
         <div style="width:417px; margin-left:42px;">
          <input type="text" name="birth_date" placeholder="birthdate"/>
       
        </div>

        <div style="width:417px; margin-left:42px;">
          <input type="submit" name="submit" class="btn btn-primary" value="Request Now!"/>
          <div class="input-icon"></div>
        </div>
      </div>
      
    </form>
    <?php
    if(isset($_POST["submit"]))
{
    $jobidentity=$_POST["wife_id"];
    $jobtitle=$_POST["birthid"];
    $leveltype=$_POST["wife_name"];
    $organname=$_POST["wfname"];
    $salary=$_POST["nationality"];
    $workprocess=$_POST["birth_date"];
if($con)
{
         $sql="insert into hasband_table values('',$jobidentity','$jobtitle','$leveltype','$organname','$salary','$workprocess')";
          $inserted=mysqli_query($con, $sql);
          if($inserted)
          {

            echo "<script> alert('data inserted!') </script>";
            echo "<script> window.open('requestapplicants.php','_self') </script>";

         }
         else
          echo "<script> alert('Job not Requested successfully!').mysql_error() </script>";
       }}
  ?>
    </div>
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