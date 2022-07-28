<?php

$student = array(
    "mamun"=>array("class"=>10, "shift"=>array("morning","evening"), "age"=>14,"dep"=>"abc"),
    "ejaj"=>array("class"=>9, "age"=>12,"dep"=>"xyz"),
    "akash"=>array("class"=>8, "age"=>11,"dep"=>"rrr")


);

$roll = $student["mamun"]["class"];
echo "<br>";
$shift = $student["mamun"]["shift"][0];



