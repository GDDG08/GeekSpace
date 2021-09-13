<?php
$con=mysqli_connect("localhost","geekspace","M5k4HpLa4Bz56ync","geekspace");

if (!$con)
{
    die("Conection Error: " . mysqli_connect_error());
}
$key = addslashes($_POST[key]);
$value = addslashes($_POST[value]);

mysqli_query($con, "REPLACE INTO `Dataset` (`key0`, `value`) VALUES ('$key', '$value')");

// echo("REPLACE INTO `Dataset` (`key0`, `value`) VALUES ('$_GET[key]', '$_GET[value]')");
mysqli_close($con);
?>