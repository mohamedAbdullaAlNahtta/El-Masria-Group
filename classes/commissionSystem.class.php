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

    protected function get_emp_manger($emp_id){
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

    public function remove_duplicated_value($arr){
        return array_unique($arr);

    }

    public function get_all_emp(){
        $commissiondb = new CommissionSystemDB;
        
        $sql = "SELECT `employee`.`id`, `employee`.`name`, `employee`.`manger_id`, `department`.`name` AS `department`, `area`.`name` AS `area` , `job_title`.`name` AS `job_title`, `employee`.`mobile`FROM `employee`, `department`, `area`, `job_title` WHERE `employee`.`department_id`=`department`.`id` AND `employee`.`area_id`= `area`.`id` AND `employee`.`job_title`= `job_title`.`id`;";
        
        $result = $commissiondb->query($sql);
        return $result;
        $commissiondb->close_db_connection();  

    }



    

    
}



?>