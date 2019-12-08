<?php
session_start();
include("connection.php");
?>
<html>
<head>
<title>VITAL EVENT REGISTRATION INFORMATION MANEGMENT SYSTEM</title>
<link  href="mystyles.css" rel="stylesheet" type="text/css"  />

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
        $uid=$row["uid"];   
        $region=$row["region"];
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
<frameset id="framess">
<table>
<div id="divHeader">
<?php
require("header.php");

?>
</div>
<div id="divNav">
<?php
require("federalregistrarmenu.php");
?></div>

<tr><td><div id="divSideContentLeft">

<?php
require("federalregistrar.php");
?>
        </div>

</td>
<td>
<div id="divContentCenter">
<p>WELLCOME TO MARRIAGE INFORMATION UPDATE PAGE!</p>
        <form method="post" action="">
        <table><tr><td>inter marriageid:</td><td>
            <input type="text" name="marriageid" value=""/></td><td>
            <input type="submit" name="EDIT" value="search"/></td></tr></table>
        </form>
                               <?php

                        if(isset($_POST["EDIT"]))
                        {   
                        $marriageid=$_POST['marriageid'];
        $sql="select * from marriagetable where kebele='$kebele' and marriagestatus='married' and marriageid='$marriageid' and uid='$uid'";
                        $recordfound=mysql_query($sql,$con);
                        echo" <fieldset>";
                            if(mysql_affected_rows($con))
                            {
                            $row=mysql_fetch_assoc($recordfound);
                             ?>

                            <table>
                            <?php
                            echo "<form action='' method=post>";
                            echo"<tr><td>marriageid:</td><td><input type=text name='marriageid' value='".$row["marriageid"]."'readonly></td></tr>";
                            
                            echo "<tr><td>hasband photo:</td><td><input type=file name='hphoto' value='".$row["hphoto"]."' required></td></tr>";
                            
                            echo "<tr><td>wife photo:</td><td><input type=file name='wphoto' value='".$row["wphoto"]."' required></td></tr>";
                            
                            echo "<tr><td>marrage type:</td><td><input type=text name='marragecondition' value='".$row["marragecondition"]."' required></td></tr>";
                        
                            
                            echo "<tr><td><input type=submit name=update value=update></td>";
                            echo "<td><input type=reset value=reset></td></tr>";
                            echo"</form></table>";
                            }
                            else
                            echo "<font size=5 color=red>No Register marriaged people in ".$kebele." kebele</font>";
                            }
                            ?>
                            
                        
                                <?php   
                                //UPDATE                
                            if(isset($_POST["update"]))
                            {
                            $marriageid=$_POST["marriageid"];
                            
                        
                            $hphoto=$_POST["hphoto"];
                            $wphoto=$_POST["wphoto"];
                            
                    
                            $marragecondition=$_POST["marragecondition"];
                            
                            $birthstatus=$_POST["marriagestatus"];
                            $sql="update marriagetable set hphoto='$hphoto',wphoto='$wphoto',marragecondition='$marragecondition' where marriageid='$marriageid'and marriagestatus='married'";
                            $updated=mysql_query($sql,$con);
                            if(mysql_affected_rows($con))
                            echo " <font color=green size=5> marriege event updated<font>";
                            else
                            echo "<font color=red size=5>Unable to update! since they are already divorced<font>";  
                            }
                        echo" </fieldset>";
                    
                        ?>
</div>
</td>
</tr>

<tr><td><div id="divFooter"><?php
require("footer.php");

?></div></td></tr>
</table> 
                                                                       
</frameset></div>
<?php
}
else
{
header("location:home.php");
}
?>
</body>
</html>