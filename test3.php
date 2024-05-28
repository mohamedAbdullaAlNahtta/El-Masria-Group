<?php

include("includes/classautoloader.inc.php");

$newCommissionSystem = new CommissionSystem;

$emp_id_arr =array(3,4,5,8,11,16,17,19);
var_dump($newCommissionSystem->calculate_Sales_participated_emp_conflict($emp_id_arr, "West"));
echo "<br>";

echo"check_area_master_precentage";
echo "<br>";
var_dump($newCommissionSystem->check_area_master_precentage("3","slave", "no"));
echo "<br>";


echo "calculate_operation_commission";
echo "<br>";
$x=array(13,22);
// var_dump($newCommissionSystem->calculate_operation_commission($empArr, $unitPrice, $area, $IsLaunch, $IsOverSeas));
var_dump($newCommissionSystem->calculate_operation_commission($x, "1000000", "East", "yes", "yes"));
echo "<br>";

$operationCommission = $newCommissionSystem->calculate_operation_commission($x, "1000000", "East", "yes", "yes");
foreach ($operationCommission as $x => $y) {
    echo "$x: $y <br>";
  }

  echo "<br>";