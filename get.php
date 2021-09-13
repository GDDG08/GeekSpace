<?php
header("content:application/json;chartset=uft-8");
$con=mysqli_connect("localhost","geekspace","M5k4HpLa4Bz56ync","geekspace");

if (!$con)
{
    die("Conection Error: " . mysqli_connect_error());
}

$result = mysqli_query($con, "SELECT `value` FROM `Dataset` WHERE `key0` = '$_GET[key]'");
$rel = $result->fetch_array();
// if ($rel == null){
//     echo("\"{}\"");
// }else
$rep = str_replace("\n","/@#&/",$rel[0]);
    echo $rep;
mysqli_close($con);
?>