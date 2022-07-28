<?php

$inputNumber = isset($_GET["rollnumber"]) ?$_GET["rollnumber"]  :NULL;

$result = array("123"=>"GPA 5","222"=>"GPA 4","333"=>"GPA 3.5");



if(isset($_GET["sub"])){
    $test =  isset($result[$inputNumber]) ?$result[$inputNumber] : "<span style='color:red;'>"."Roll Number Thik Nai" ."</span>";
}

?>

<form action="?" method="get">
    <?php if(isset($test)){
        echo $test."<br>";
    }?>
    <input type="text" name="rollnumber"><br>
    <input type="submit" value="check result" name="sub">

</form>