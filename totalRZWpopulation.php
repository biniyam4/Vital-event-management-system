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
require("RZWmenu.php");
?></div>

<tr><td><div id="divSideContentLeft">
<?php
require("RZWmenu2.php");
?>

 

        </div>

</td>


<td>
<div id="divContentCenter">

<br/><br/><br/>
<font size=6><u> population size for <?php echo"$woreda  woreda"; ?></u></font>
<table  class="data-table" style="margin-left: 15px;margin-right: 15px;margin-top: 15px;"><tr><th><font size=5>kebele name</font></th><th><font size=5>population size</font></th>
<?php





// regional population

// amhara population



// tirgay population


$selectmale="select*from birthtable where birthworeda='$woreda' and birthstatus='born'";
$view2=mysql_query($selectmale,$con);
                    $rowCheck = mysql_num_rows($view2);
if($rowCheck>0)
{
    echo "<tr><td> $kebele </td><td>$rowCheck</td></tr>";

echo "</table><table>";
// afar population

$selectafar="select*from birthtable where sex='male' and birthstatus='born' and birthworeda='$woreda'";
$male=mysql_query($selectafar,$con);
                    $male1 = mysql_num_rows($male);
if($male1>0)
    echo "<tr><td><font size=5>Male=</font></td><td><font size=5>$male1</font></td></tr>";

// amhara

$selectamhara="select*from birthtable where sex='female' and birthstatus='born' and birthworeda='$woreda'";
$female=mysql_query($selectamhara,$con);
                    $female1 = mysql_num_rows($female);
if($female1>0)
    echo "<tr><td><font size=5>Female=</font></td><td><font size=5>$female1</font></td></tr>";

$total="select*from birthtable where birthstatus='born' and birthworeda='$woreda'";
$total2=mysql_query($total,$con);
                    $total21 = mysql_num_rows($total2);
if($total21>0)
    echo "</table><table>";
    echo "<tr colspn=1><td><font size=5>Total population in $woreda woreda is</font></td><td><font size=5>$total21</font></td></tr>";

}

?>


</table>
	
</div>
</td>

</tr>

<tr><td><div id="divFooter"><?php
require("footer.php");

?></div></td></tr>
</table> 
                                                                       
</frameset>
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