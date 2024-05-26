<?php

/////////////////////////////////////////////////////////////////////////////////
// Powered by ENG Muhammad Abdullah El Nahtta 
// This Class created from scratch by Powered by ENG Muhammad Abdullah El Nahtta
// Powered by ENG Muhammad Abdullah El Nahtta 
/////////////////////////////////////////////////////////////////////////////////
// you can contact me through mobile number 201093001070 or lanline 20 48 2327352
/////////////////////////////////////////////////////////////////////////////////
//                             &&&&&&&&&&&&&&&&,@                             
//                           &&&&&&&&&&&&&&&&&@&&&%&%                          
//                         *%&%&&%%%%#%%%%%%&%&&&&&&&                          
//                         &&&/,,,,,,...*,*,,***//(&&&%                        
//                       %&%&,,.....,,,,,,,,,,****//%&&                        
//                       %%#*,..... .........,,,,***/#&&                       
//                       &#*...........,...,,,,,,,****%&                       
//                       %(,....,...,......,,,###((***/&&*                     
//                     ..,#*,&#/,****@&*,,%/((#((/((*@#*,*                     
//                     .,..,@,,*(.&@(/,/.,@/((((*//*,*%**/                     
//                       ,,(,/..,,**,./..,**@,**,%&***//*                      
//                        .(,....,,,.....,******,,,,*/#,.                      
//                          (....,(...*..,*//***/#*//%                         
//                          %#,,//#(///((((#*//%%&/(%&                         
//                           #/#/*(..,,,,*,*//**#/%&&.                         
//                            /%#*/,...,,///****#&&&                           
//                             ,*%%#/(*//#(###%&&#/*,                          
//                            ,&..*/&&%&&&&&&&&#***,.&&                        
//                          @%   (....,,*///*****,  ..&&&&&&&&&&@              
//                     &&&&&%%%     *...,,,*,,,    ...&&&&&&&&&&&&&&&&&&&&&    
//             &%%%%%%%&&&%%%%%         ,,,,        .,&&&&&&&&&&&&&&&&&&&&&&&&&
//       %%%&&&%%%%%%%%%%&%%%%%%      @&#%%&&&&%  ...,&&&&&&&%&&&&%%%&&%&&&&&&&
//    %&&&%%%%%%%###%%%#%%%%%%%.     ,(/%#&&&&,.,# ...(&&&&&&&%&&&%%%%%%%%%%%&&
//    %%%%%%%#######%####%%%%%%%   ... *%#&&&,....   .*&&&&%&%%&&&&&%%%%%%%%%&&
//    %%################%%%%%%%&.        %%%&,....    /&&&%&%%%%&&&&&%%%%&&%&&%
//    %%###(#(((#(#(####%%%%%%%&,       %%%&&&...     .&&&&%%%%%&&&&&&&&&&&&&&&
/////////////////////////////////////////////////////////////////////////////////
// you can contact me through mobile number 201093001070 or lanline 20 48 2327352
/////////////////////////////////////////////////////////////////////////////////
// Powered by ENG Muhammad Abdullah El Nahtta 
// This Class created from scratch by Powered by ENG Muhammad Abdullah El Nahtta
// Powered by ENG Muhammad Abdullah El Nahtta 
/////////////////////////////////////////////////////////////////////////////////

class CommissionSystem{

    public function get_sold_units()
    {
        $commissiondb = new CommissionSystemDB;
        
        $sql = "SELECT * FROM `unit_sold`";
        
        $result = $commissiondb->query($sql);
        return $result;
        $commissiondb->close_db_connection();  
        
    }

    public function get_emp_job_title_by_id($emp_id){
        $commissiondb = new CommissionSystemDB;
        
        $sql = "SELECT `job_title` FROM  (SELECT `employee`.`id`, `job_title`.`name` AS `job_title`
        FROM `employee`,  `job_title` 
        WHERE `employee`.`job_title`= `job_title`.`id`) AS `T1` WHERE `id`=$emp_id;";
        
        $result = $commissiondb->query($sql);
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $job_title = $row["job_title"];
        }

        return $job_title;
        $commissiondb->close_db_connection(); 


    }

    public function get_commission_value_by_title($title){
        $sql = "SELECT * FROM `job_title` WHERE `name`={$title};";
        
        $result = $commissiondb->query($sql);
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $commission_value = $row["commission_value"];
        }

        return $commission_value;
        $commissiondb->close_db_connection();

    }

    public function get_commission_percentage_by_title($title){
        $sql = "SELECT * FROM `job_title` WHERE `name`={$title};";
        
        $result = $commissiondb->query($sql);
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $commission_percentage = $row["commission_percentage"];
        }

        return $commission_percentage;
        $commissiondb->close_db_connection();

    }

    public function calculate_operation_participated_emp($emp_id_arr){

        // get All participated emp
        $all_emp_and_mangers = array();
        $arrCount= count($emp_id_arr);
        for ($x = 0; $x < $arrCount; $x++) {
            $emp_root_managers= $this->get_root_emp_manager_array($emp_id_arr[$x]);
            $all_emp_and_mangers = array_merge($all_emp_and_mangers, $emp_root_managers);
            $all_emp_and_mangers = $this->remove_duplicated_value($all_emp_and_mangers);
          }
          
        // catagories emp based on title  
        $arrCount_all= count($all_emp_and_mangers);
        $OperationManager=array();
        $SalesAdmin=array();

        for ($z = 0; $z < $arrCount_all; $z++) {
            $emp_job_title = $this->get_emp_job_title_by_id($all_emp_and_mangers[$z]);
            if($emp_job_title==="Operation Manager"){
                $OperationManager[]= $all_emp_and_mangers[$z];
                $OperationManager = $this->remove_duplicated_value($OperationManager);
            }elseif($emp_job_title==="Sales Admin"){
                $SalesAdmin [] = $all_emp_and_mangers[$z];
                $SalesAdmin = $this->remove_duplicated_value($SalesAdmin);
            } 
        }
        $participated_emp =array("OperationManager"=>$OperationManager, "SalesAdmin"=>$SalesAdmin );
        return $participated_emp;   
    }
    public function calculate_Contract_participated_emp($emp_id_arr){

        // get All participated emp
        $all_emp_and_mangers = array();
        $arrCount= count($emp_id_arr);
        for ($x = 0; $x < $arrCount; $x++) {
            $emp_root_managers= $this->get_root_emp_manager_array($emp_id_arr[$x]);
            $all_emp_and_mangers = array_merge($all_emp_and_mangers, $emp_root_managers);
            $all_emp_and_mangers = $this->remove_duplicated_value($all_emp_and_mangers);
          }
          
        // catagories emp based on title  
        $arrCount_all= count($all_emp_and_mangers);
        $ContractManager=array();
        $ContractSpecialist=array();

        for ($z = 0; $z < $arrCount_all; $z++) {
            $emp_job_title = $this->get_emp_job_title_by_id($all_emp_and_mangers[$z]);
            if($emp_job_title==="Contract Manager"){
                $ContractManager[]= $all_emp_and_mangers[$z];
                $ContractManager = $this->remove_duplicated_value($ContractManager);
            }elseif($emp_job_title==="Contract Specialist"){
                $ContractSpecialist [] = $all_emp_and_mangers[$z];
                $ContractSpecialist = $this->remove_duplicated_value($ContractSpecialist);
            } 
        }
        $participated_emp =array("ContractManager"=>$ContractManager, "ContractSpecialist"=>$ContractSpecialist );
        return $participated_emp;   
    }
    public function calculate_Sales_participated_emp($emp_id_arr){

        // get All participated emp
        $all_emp_and_mangers = array();
        $arrCount= count($emp_id_arr);
        for ($x = 0; $x < $arrCount; $x++) {
            $emp_root_managers= $this->get_root_emp_manager_array($emp_id_arr[$x]);
            $all_emp_and_mangers = array_merge($all_emp_and_mangers, $emp_root_managers);
            $all_emp_and_mangers = $this->remove_duplicated_value($all_emp_and_mangers);
          }
          
        // catagories emp based on title  
        $arrCount_all= count($all_emp_and_mangers);
        $SalesSepecialist=array();
        $SalesManager=array();
        $CCO=array();
        $SalesDirector=array();

        for ($z = 0; $z < $arrCount_all; $z++) {
            $emp_job_title = $this->get_emp_job_title_by_id($all_emp_and_mangers[$z]);
            if($emp_job_title==="Sales Sepecialist"){
                $SalesSepecialist[]= $all_emp_and_mangers[$z];
                $SalesSepecialist = $this->remove_duplicated_value($SalesSepecialist);
            }elseif($emp_job_title==="Sales Manager"){
                $SalesManager [] = $all_emp_and_mangers[$z];
                $SalesManager = $this->remove_duplicated_value($SalesManager);
            }elseif($emp_job_title==="CCO"){
                $CCO [] = $all_emp_and_mangers[$z];
                $CCO = $this->remove_duplicated_value($CCO);
            }elseif($emp_job_title==="Sales Director"){
                $SalesDirector [] = $all_emp_and_mangers[$z];
                $SalesDirector = $this->remove_duplicated_value($SalesDirector);
            } 
        }
        $participated_emp =array("SalesSepecialist"=>$SalesSepecialist, "SalesManager"=>$SalesManager, "CCO"=>$CCO, "SalesDirector"=>$SalesDirector );
        return $participated_emp;   
    }

    public function calculate_operation_commission($empArr, $unitPrice, $area, $IsLaunch, $IsOverSeas ){
        if ($IsLaunch==="yes") {
            $emp_id_and_commission = array();
            $participated_emp = $this->calculate_operation_participated_emp($empArr);
            // check if OperationManager array not empty 
            if(count($participated_emp["OperationManager"])!==0){
                

            }
            // check if OperationManager array not empty 
            if(count($participated_emp["SalesAdmin"])!==0){

            }

        } else {
            # code...
        }
        

    }


    public function get_emp_commission_by_count_value($unit_price, $empArray, $Precentage, $Value){


        //employee array should have indexed array for the employee id 
        $Count_of_employee= count($empArray);

        // if isset the precantage
        if($Precentage!==NULL){
            $emp_shares = $unit_price*$Precentage/$Count_of_employee;

            foreach ($empArray as $x) {
                $emp_share[$x]=$emp_shares;
              }
            return $emp_share;

        }else{
            $emp_shares = $Value/$Count_of_employee;

            foreach ($empArray as $x) {
                $emp_share[$x]=$emp_shares;
              }

            return $emp_share;
        }

    }

    public function get_emp_manger($emp_id){
        $commissiondb = new CommissionSystemDB;
        
        $sql = "SELECT `manger_id` FROM `employee` WHERE `id`={$emp_id}";
        
        $result = $commissiondb->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $manger_id = $row["manger_id"];

            }
          } else {
            $manger_id = NULL;
          }

        return $manger_id;
        $commissiondb->close_db_connection();

    }

    public function get_emp_name_by_id($emp_id){

        $commissiondb = new CommissionSystemDB;
        
        $sql = "SELECT `name` FROM `employee` WHERE `id`={$emp_id}";
        
        $result = $commissiondb->query($sql);
        while($row = $result->fetch_assoc()) {
            $emp_name = $row["name"];
          }
        return $emp_name;
        $commissiondb->close_db_connection();

    }

    public function get_root_emp_manager_array($emp_id){

        $commissiondb = new CommissionSystemDB;
        
        $sql = "SELECT `level` FROM `employee` WHERE `id`={$emp_id}";
        
        $result = $commissiondb->query($sql);

        while($row = $result->fetch_assoc()) {
            $emp_level = (int)$row["level"];
        }
      
        $emp_manager_root_array=array($emp_id);
        $start_emp_id = $emp_id;

        for ($x = $emp_level; $x >= 0; $x--) {

            $emp_manger_id = $this->get_emp_manger($start_emp_id);
            array_push($emp_manager_root_array, $emp_manger_id);
            $start_emp_id = $emp_manger_id;

        }

        // remove Null from array 
        // $del_val = NULL;
        $count_emp_manager_root_array = count($emp_manager_root_array);

        for ($x = 0; $x <= $count_emp_manager_root_array; $x++) {
            if(($key=array_search(NULL, $emp_manager_root_array))!==false){
                unset($emp_manager_root_array[$key]);
            } 
        }

        return $emp_manager_root_array;
        $userdb->close_db_connection();
    }

    public function get_root_emp_arr_manager_array($emp_id_arr){
        //employee array should have indexed array for the employee id 
        $Count_of_employee= count($emp_id_arr);
        $all_emp_manger=array();
        for ($x = 0; $x < $Count_of_employee; $x++) {
            $emp_manager= $this->get_root_emp_manager_array($emp_id_arr[$x]);
            $all_emp_manger = array_merge($all_emp_manger, $emp_manager);
          }
        $all_emp_manger = $this->remove_duplicated_value($all_emp_manger);
        return $all_emp_manger;
          
    }

    public function remove_duplicated_value($arr){
        return array_unique($arr);

    }


    public function get_all_emp(){
        $commissiondb = new CommissionSystemDB;
        
        $sql = "SELECT 
        `emp1`.`id`, 
        `emp1`.`name`, 
        `emp1`.`manger_id`, 
        `emp2`.`name` AS `Manager`, 
        `emp1`.`department`, 
        `emp1`.`area`, 
        `emp1`.`job_title`, 
        `emp1`.`mobile`, 
        `emp1`.`bank_account`, 
        `emp1`.`level` 
      FROM 
        (
          SELECT 
            `e1`.`id`, 
            `e1`.`name`, 
            `e1`.`manger_id`, 
            `department`.`name` AS `department`, 
            `area`.`name` AS `area`, 
            `job_title`.`name` AS `job_title`, 
            `e1`.`mobile`, 
            `e1`.`bank_account`, 
            `e1`.`level` 
          FROM 
            `employee` AS `e1`, 
            `department`, 
            `area`, 
            `job_title` 
          WHERE 
            `e1`.`department_id` = `department`.`id` 
            AND `e1`.`area_id` = `area`.`id` 
            AND `e1`.`job_title` = `job_title`.`id`
        ) AS `emp1` 
        LEFT OUTER JOIN `employee` AS `emp2` ON `emp1`.`manger_id` = `emp2`.`id`;
      ";
        
        $result = $commissiondb->query($sql);
        return $result;
        $commissiondb->close_db_connection();  

    }
    public function get_all_sales_emp(){
        $commissiondb = new CommissionSystemDB;
        
        $sql = "SELECT * FROM (SELECT `employee`.`id`, `employee`.`name`, `employee`.`manger_id`,
         `department`.`name` AS `department`, `area`.`name` AS `area` ,
          `job_title`.`name` AS `job_title`, `employee`.`mobile`
          FROM `employee`, `department`, `area`, `job_title` 
          WHERE `employee`.`department_id`=`department`.`id` 
          AND `employee`.`area_id`= `area`.`id` 
          AND `employee`.`job_title`= `job_title`.`id`) AS `T1` WHERE department ='Sales';";
        
        $result = $commissiondb->query($sql);
        return $result;
        $commissiondb->close_db_connection();  

    }
    public function get_all_operation_emp(){
        $commissiondb = new CommissionSystemDB;
        
        $sql = "SELECT * FROM (SELECT `employee`.`id`, `employee`.`name`, `employee`.`manger_id`,
        `department`.`name` AS `department`, `area`.`name` AS `area` ,
         `job_title`.`name` AS `job_title`, `employee`.`mobile`
         FROM `employee`, `department`, `area`, `job_title` 
         WHERE `employee`.`department_id`=`department`.`id` 
         AND `employee`.`area_id`= `area`.`id` 
         AND `employee`.`job_title`= `job_title`.`id`) AS `T1` WHERE department ='Operation';";
        
        $result = $commissiondb->query($sql);
        return $result;
        $commissiondb->close_db_connection();  

    }
    public function get_all_Contract_emp(){
        $commissiondb = new CommissionSystemDB;
        
        $sql = "SELECT * FROM (SELECT `employee`.`id`, `employee`.`name`, `employee`.`manger_id`,
        `department`.`name` AS `department`, `area`.`name` AS `area` ,
         `job_title`.`name` AS `job_title`, `employee`.`mobile`
         FROM `employee`, `department`, `area`, `job_title` 
         WHERE `employee`.`department_id`=`department`.`id` 
         AND `employee`.`area_id`= `area`.`id` 
         AND `employee`.`job_title`= `job_title`.`id`) AS `T1` WHERE department ='Contract';";
        
        $result = $commissiondb->query($sql);
        return $result;
        $commissiondb->close_db_connection();  

    }



    

    
}



?>