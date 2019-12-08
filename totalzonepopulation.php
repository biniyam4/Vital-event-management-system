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

require("zonemenu.php");
?></div>
	<tr><td><div id="divSideContentLeft">

<?php
require("zonemenu2.php");
?>

 

        </div>

</td>


<td>
<div id="divContentCenter">


<br/><br/><br/>
<font size=6><u> population size for each region found in Ethiopia</u></font>
<table  class="data-table" style="margin-left: 15px;margin-right: 15px;margin-top: 15px;"><tr><th><font size=5>region name</font></th><th><font size=5>population size</font></th>
<?php





// regional population

// amhara population



// tirgay population


$selectmale="select*from birthtable where birthregion='tigray' and birthstatus='born'";
$view2=mysql_query($selectmale,$con);
                    $rowCheck = mysql_num_rows($view2);
if($rowCheck>0)
    echo "<tr><td> Tigray </td><td>$rowCheck</td></tr>";

// afar population

$selectafar="select*from birthtable where birthregion='afar' and birthstatus='born'";
$afar=mysql_query($selectafar,$con);
                    $afar2 = mysql_num_rows($afar);
if($afar2>0)
    echo "<tr><td>A far </td><td>$afar2</td></tr>";

// amhara

$selectamhara="select*from birthtable where birthregion='amhara' and birthstatus='born'";
$amhara2=mysql_query($selectamhara,$con);
                    $amhara = mysql_num_rows($amhara2);
if($amhara>0)
    echo "<tr><td>Amhara </td><td>$amhara</td></tr>";



// oromia population

$selectoromia="select*from birthtable where birthregion='oromia' and birthstatus='born'";
$oromia2=mysql_query($selectoromia,$con);
                    $oromia = mysql_num_rows($oromia2);
if($oromia>0)
    echo "<tr><td>Oromia  </td><td>$oromia</td></tr>";
// somalia population

$selectsomali="select*from birthtable where birthregion='somalie' and birthstatus='born'";
$somali2=mysql_query($selectsomali,$con);
                    $somali = mysql_num_rows($somali2);
if($somali>0)
    echo "<tr><td>Somalie</td><td>$somali</td></tr>";
// ganbela population

$selectganbela="select*from birthtable where birthregion='ganbela' and birthstatus='born'";
$ganbela2=mysql_query($selectganbela,$con);
                    $ganbela = mysql_num_rows($ganbela2);
if($ganbela>0)
    echo "<tr><td>Ganbela</td><td>$ganbela</td></tr>";

// benishangul population

$selectbenishangul="select*from birthtable where birthregion='benishangul' and birthstatus='born'";
$ganbela2=mysql_query($selectbenishangul,$con);
                    $ganbela = mysql_num_rows($ganbela2);
if($ganbela>0)
    echo "<tr><td>Benishangul</td><td>$ganbela</td></tr>";
// DNNP population

$selectdnnp="select*from birthtable where birthregion='DNNP' and birthstatus='born'";
$dnnp2=mysql_query($selectdnnp,$con);
                    $dnnp = mysql_num_rows($dnnp2);
if($dnnp>0)
    echo "<tr><td>DNNP</td><td>$dnnp</td></tr>";

// harar population

$selectharar="select*from birthtable where birthregion='harar' and birthstatus='born'";
$harar2=mysql_query($selectharar,$con);
                    $harar = mysql_num_rows($harar2);
if($harar>0)
    echo "<tr><td>Harar</td><td>$harar</td></tr>";

$total="select*from birthtable where birthstatus='born'";
$total2=mysql_query($total,$con);
                    $total21 = mysql_num_rows($total2);
if($total21>0)
    echo "<tr colspn=1><td>Ethiopia total population</td><td>$total21</td></tr>";


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