<?php

$salesText = $_GET['salesText'];
$contractText = $_GET['contractText'];
$operationText = $_GET['operationText'];


$salesArr = explode(',', $salesText);
$contractArr = explode(',', $contractText);
$operationArr = explode(',', $operationText);

var_dump($salesArr);
echo"<br>";
var_dump($contractArr);
echo"<br>";
var_dump($operationArr);
echo"<br>";


?>