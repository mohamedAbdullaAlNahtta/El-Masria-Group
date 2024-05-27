<?php

include("includes/classautoloader.inc.php");

$newCommissionSystem = new CommissionSystem;

$emp_id_arr =array(3,4,5,8,11,16,17,19);
var_dump($newCommissionSystem->calculate_Sales_participated_emp_conflict($emp_id_arr, "West"));
