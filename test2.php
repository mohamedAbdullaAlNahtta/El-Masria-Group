<?php
include("includes/classautoloader.inc.php");

// $user_support_tickets = new support_ticket;
// $result = $user_support_tickets->get_all_tickets();

$newCommissionSystem = new CommissionSystem;
// $result = $newCommissionSystem->get_sold_units();


$cars=array("Volvo","BMW","Toyota","Tyota");
var_dump($newCommissionSystem->get_emp_commission_by_count_value("1000000", $cars, "0.02", NULL));
// result should be like this 
// array(4) { ["Volvo"]=> float(5000) ["BMW"]=> float(5000) ["Toyota"]=> float(5000) ["Tyota"]=> float(5000) } 
echo "<br>";

// var_dump(get_emp_commission_by_count_value("1000000", $cars, NULL, 2000));
echo "<br>";
// result should be like this 
// array(4) { ["Volvo"]=> int(500) ["BMW"]=> int(500) ["Toyota"]=> int(500) ["Tyota"]=> int(500) } 
echo "<br>";

var_dump($newCommissionSystem->get_emp_manger(2));
echo "<br>";
// var_dump($newCommissionSystem->get_emp_name_by_id(4));
echo "<br>";
var_dump($newCommissionSystem->get_root_emp_manager_array(12));

?>