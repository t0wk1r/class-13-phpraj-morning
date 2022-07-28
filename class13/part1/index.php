<?php
/*
$name = array("mamun","ajim","khalid");

echo $name[2];

*/

$test = $_GET["ttt"];

$name = array();

$name[0] = "majed";
$name[1] = "al amin";
$name[2] = "masud";

echo $name[$test];




?>

<form action="?" method="get">

    <input type="text" name="ttt"><br>
    <input type="submit" value="check">

</form>