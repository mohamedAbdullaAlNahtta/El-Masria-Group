<?php
include("includes/classautoloader.inc.php");

// $user_support_tickets = new support_ticket;
// $result = $user_support_tickets->get_all_tickets();

$newCommissionSystem = new CommissionSystem;
// $result = $newCommissionSystem->get_sold_units();


$cars=array(7,10,13);
var_dump($newCommissionSystem->get_emp_commission_by_count_value("1000000", $cars, "0.02", NULL));
// result should be like this 
// array(4) { ["Volvo"]=> float(5000) ["BMW"]=> float(5000) ["Toyota"]=> float(5000) ["Tyota"]=> float(5000) } 
echo "<br>";

var_dump($newCommissionSystem->get_emp_commission_by_count_value("1000000", $cars, NULL, 2000));
echo "<br>";
// result should be like this 
// array(4) { ["Volvo"]=> int(500) ["BMW"]=> int(500) ["Toyota"]=> int(500) ["Tyota"]=> int(500) } 
echo "<br>";
var_dump($newCommissionSystem->get_emp_manger(2));
echo "<br>";
var_dump($newCommissionSystem->get_emp_name_by_id(4));
echo "<br>";
echo "<br>";
echo "<br>";
var_dump($newCommissionSystem->get_root_emp_manager_array(7));
echo "<br>";
var_dump($newCommissionSystem->get_root_emp_manager_array(8));
echo "<br>";
var_dump($newCommissionSystem->get_root_emp_manager_array(2));
echo "<br>";

$xarra= array(7,8,9);
var_dump($newCommissionSystem->get_root_emp_arr_manager_array($xarra));
echo "<br>";
var_dump($newCommissionSystem->get_emp_job_title_by_id("1"));
echo "<br>";
$yarray=array(7,10,13);
var_dump($newCommissionSystem->calculate_operation_participated_emp($yarray));
echo "<br>";
$zarray=array(9,6);
var_dump($newCommissionSystem->calculate_Contract_participated_emp($zarray));
echo "<br>";
$zzarray=array(15);
$nahtta = $newCommissionSystem->calculate_Sales_participated_emp($zzarray) ;
echo "<br>";
if(count($nahtta ["SalesManager"])===0){
echo "empty";
}
// $nahtta ["SalesManager"]
echo "<br>";

var_dump($newCommissionSystem->get_commission_percentage_by_title("Sales Manager"));

echo "<br>";
echo "<br>";
echo "<br>";

var_dump($newCommissionSystem->calculate_operation_commission($yarray, "1000000", "East", "yes", "yes" ));
echo "<br>";
echo "<br>";
echo "<br>";
var_dump($newCommissionSystem->check_area_master_by_id_area("19", "East"));

echo "<br>";
echo "<br>";
echo "<br>";
var_dump($newCommissionSystem->check_area_master_precentage("3", "master","no"));

?>