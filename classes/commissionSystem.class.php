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

    // this function is to retrive an array of operation manger and sales admin 
    // wiil be used incase there is no confilict (employess not different area)
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
    // this function is to retrive an array of contract manger and contract specialist
    // wiil be used incase there is no confilict (employess not different area)
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
    // this function is to retrive an array of Sales Sepecialist, Sales Manager, CCO, and Sales Director 
    // wiil be used incase there is no confilict (employess not different area)
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
    
    /////////////////////////////////////////////////////////////////////////////////////////////////
    // this function is retrive an array with all operation mangers and sales admin master and slaves  
    // wiil be used incase there is a confilict (employess in different area)
    /////////////////////////////////////////////////////////////////////////////////////////////////
    public function calculate_operation_participated_emp_conflict($emp_id_arr, $area){

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
        
        $OperationManagerMaster=array();
        $OperationManagerSlave=array();
        $SalesAdminMaster=array();
        $SalesAdminSlave=array();

        for ($AA = 0; $AA < $arrCount_all; $AA++) {
            $emp_job_title = $this->get_emp_job_title_by_id($all_emp_and_mangers[$AA]);
            if($emp_job_title==="Operation Manager"){
                $OperationManager[]= $all_emp_and_mangers[$AA];
                $OperationManager = $this->remove_duplicated_value($OperationManager);
                // get operation manger Master and slave 
                $OperationManagerCount= count($OperationManager);
                if ($OperationManagerCount>=1) {
                    for ($BB = 0; $BB <$OperationManagerCount; $BB++) {
                        $OperationManager_emp_own= $this->check_area_master_by_id_area($OperationManager[$BB], $area);
                        if ($OperationManager_emp_own===true) {
                            $OperationManagerMaster[]= $OperationManager[$BB];
                            $OperationManagerMaster = $this->remove_duplicated_value($OperationManagerMaster);
                        } else {
                            $OperationManagerSlave[]= $OperationManager[$BB];
                            $OperationManagerSlave = $this->remove_duplicated_value($OperationManagerSlave);
                        }
                    
                    }
                }
               
            }elseif($emp_job_title==="Sales Admin"){
                $SalesAdmin [] = $all_emp_and_mangers[$AA];
                $SalesAdmin = $this->remove_duplicated_value($SalesAdmin);

                // get Sales Admin Master and slave 
                $SalesAdminCount= count($SalesAdmin);
                if ($SalesAdminCount>=1) {
                    for ($cc = 0; $cc <$SalesAdminCount; $cc++) {
                        $SalesAdmin_emp_own= $this->check_area_master_by_id_area($SalesAdmin[$cc], $area);
                        if ($SalesAdmin_emp_own===true) {
                            $SalesAdminMaster[]= $SalesAdmin[$cc];
                            $SalesAdminMaster = $this->remove_duplicated_value($SalesAdminMaster);
                        } else {
                            $SalesAdminSlave[]= $SalesAdmin[$cc];
                            $SalesAdminSlave = $this->remove_duplicated_value($SalesAdminSlave);
                        }
                    
                    }
                }
                

            } 
        }
        $participated_emp =array("OperationManagerMaster"=>$OperationManagerMaster,
        "OperationManagerSlave"=>$OperationManagerSlave, 
        "SalesAdminMaster"=>$SalesAdminMaster, 
        "SalesAdminSlave"=>$SalesAdminSlave );
        return $participated_emp;   
    }
    
    /////////////////////////////////////////////////////////////////////////////////////////////////
    // this function is retrive an array with all operation mangers and sales admin master and slaves  
    // wiil be used incase there is a confilict (employess in different area)
    /////////////////////////////////////////////////////////////////////////////////////////////////
    public function calculate_Contract_participated_emp_conflict($emp_id_arr, $area){

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

        $ContractManagerMaster=array();
        $ContractManagerSlave=array();
        $ContractSpecialistMaster=array();
        $ContractSpecialistSlave=array();

        for ($AA = 0; $AA < $arrCount_all; $AA++) {
            $emp_job_title = $this->get_emp_job_title_by_id($all_emp_and_mangers[$AA]);
            if($emp_job_title==="Contract Manager"){
                $ContractManager[]= $all_emp_and_mangers[$AA];
                $ContractManager = $this->remove_duplicated_value($ContractManager);
                 // get Contract manger Master and slave 
                $ContractManagerCount= count($ContractManager);
                if ($ContractManagerCount>=1) {
                    for ($BB = 0; $BB <$ContractManagerCount; $BB++) {
                        $ContractManager_emp_own= $this->check_area_master_by_id_area($ContractManager[$BB], $area);
                        if ($ContractManager_emp_own===true) {
                            $ContractManagerMaster[]= $ContractManager[$BB];
                            $ContractManagerMaster = $this->remove_duplicated_value($ContractManagerMaster);
                        } else {
                            $ContractManagerSlave[]= $ContractManager[$BB];
                            $ContractManagerSlave = $this->remove_duplicated_value($ContractManagerSlave);
                        }
                    
                    }
                }
                
            }elseif($emp_job_title==="Contract Specialist"){
                $ContractSpecialist [] = $all_emp_and_mangers[$AA];
                $ContractSpecialist = $this->remove_duplicated_value($ContractSpecialist);
                
                // get Sales Admin Master and slave 
                $ContractSpecialistCount= count($ContractSpecialist);
                if ($ContractSpecialistCount>=1) {
                    for ($cc = 0; $cc <$ContractSpecialistCount; $cc++) {
                        $SalesAdmin_emp_own= $this->check_area_master_by_id_area($ContractSpecialist[$cc], $area);
                        if ($SalesAdmin_emp_own===true) {
                            $ContractSpecialistMaster[]= $ContractSpecialist[$cc];
                            $ContractSpecialistMaster = $this->remove_duplicated_value($ContractSpecialistMaster);
                        } else {
                            $ContractSpecialistSlave[]= $ContractSpecialist[$cc];
                            $ContractSpecialistSlave = $this->remove_duplicated_value($ContractSpecialistSlave);
                        }
                    
                    }
                }
                
            } 
        }


        $participated_emp =array("ContractManagerMaster"=>$ContractManagerMaster, "ContractManagerSlave"=>$ContractManagerSlave,
        "ContractSpecialistMaster"=>$ContractSpecialistMaster,
        "ContractSpecialistSlave"=>$ContractSpecialistSlave);

        return $participated_emp;   
    }


    /////////////////////////////////////////////////////////////////////////////////////////////////
    // this function is retrive an array with all Sales master and slaves  
    // wiil be used incase there is a confilict (employess in different area)
    /////////////////////////////////////////////////////////////////////////////////////////////////
    public function calculate_Sales_participated_emp_conflict($emp_id_arr, $area){

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


        $SalesSepecialistMaster=array();
        $SalesSepecialistSlave=array();
        $SalesManagerMaster=array();
        $SalesManagerSlave=array();
        $CCOMaster=array();
        $CCOSlave=array();
        $SalesDirectorMaster=array();
        $SalesDirectorSlave=array();

        for ($AA = 0; $AA < $arrCount_all; $AA++) {
            $emp_job_title = $this->get_emp_job_title_by_id($all_emp_and_mangers[$AA]);
            if($emp_job_title==="Sales Sepecialist"){
                $SalesSepecialist[]= $all_emp_and_mangers[$AA];
                $SalesSepecialist = $this->remove_duplicated_value($SalesSepecialist);

                //  // get operation manger Master and slave 
                $SalesSepecialistCount= count($SalesSepecialist);
                if ($SalesSepecialistCount>=1) {
                    for ($BB = 0; $BB <$SalesSepecialistCount; $BB++) {
                        $SalesSepecialist_emp_own= $this->check_area_master_by_id_area($SalesSepecialist[$BB], $area);
                        if ($SalesSepecialist_emp_own===true) {
                            $SalesSepecialistMaster[]= $SalesSepecialist[$BB];
                            $SalesSepecialistMaster = $this->remove_duplicated_value($SalesSepecialistMaster);
                        } else {
                            $SalesSepecialistSlave[]= $SalesSepecialist[$BB];
                            $SalesSepecialistSlave = $this->remove_duplicated_value($SalesSepecialistSlave);
                        }
                    
                    }
                }
                 

            }elseif($emp_job_title==="Sales Manager"){
                $SalesManager [] = $all_emp_and_mangers[$AA];
                $SalesManager = $this->remove_duplicated_value($SalesManager);

                // get Sales Admin Master and slave 
                $SalesManagerCount= count($SalesManager);
                if ($SalesManagerCount>=1) {
                    for ($cc = 0; $cc <$SalesManagerCount; $cc++) {
                        $SalesManager_emp_own= $this->check_area_master_by_id_area($SalesManager[$cc], $area);
                        if ($SalesManager_emp_own===true) {
                            $SalesManagerMaster[]= $SalesManager[$cc];
                            $SalesManagerMaster = $this->remove_duplicated_value($SalesManagerMaster);
                        } else {
                            $SalesManagerSlave[]= $SalesManager[$cc];
                            $SalesManagerSlave = $this->remove_duplicated_value($SalesManagerSlave);
                        }
                    
                    }
                }
                

            }elseif($emp_job_title==="CCO"){
                $CCO [] = $all_emp_and_mangers[$AA];
                $CCO = $this->remove_duplicated_value($CCO);

                // get operation manger Master and slave 
                $CCOCount= count($CCO);
                if ($CCOCount>=1) {
                    for ($DD = 0; $DD <$CCOCount; $DD++) {
                        $CCO_emp_own= $this->check_area_master_by_id_area($CCO[$DD], $area);
                        if ($CCO_emp_own===true) {
                            $CCOMaster[]= $CCO[$DD];
                            $CCOMaster = $this->remove_duplicated_value($CCOMaster);
                        } else {
                            $CCOSlave[]= $CCO[$DD];
                            $CCOSlave = $this->remove_duplicated_value($CCOSlave);
                        }
                    
                    }
                }
               

            }elseif($emp_job_title==="Sales Director"){
                $SalesDirector [] = $all_emp_and_mangers[$AA];
                $SalesDirector = $this->remove_duplicated_value($SalesDirector);

                // get operation manger Master and slave 
                $SalesDirectorCount= count($SalesDirector);
                if ($SalesDirectorCount>=1) {
                    for ($EE = 0; $EE <$SalesDirectorCount; $EE++) {
                        $SalesDirector_emp_own= $this->check_area_master_by_id_area($SalesDirector[$EE], $area);
                        if ($SalesDirector_emp_own===true) {
                            $SalesDirectorMaster[]= $SalesDirector[$EE];
                            $SalesDirectorMaster = $this->remove_duplicated_value($SalesDirectorMaster);
                        } else {
                            $SalesDirectorSlave[]= $SalesDirector[$EE];
                            $SalesDirectorSlave = $this->remove_duplicated_value($SalesDirectorSlave);
                        }
                    
                    }
                }
                


            } 
        }


        $participated_emp =array("SalesSepecialistMaster"=>$SalesSepecialistMaster, 
        "SalesSepecialistSlave"=>$SalesSepecialistSlave, 
        "SalesManagerMaster"=>$SalesManagerMaster, 
        "SalesManagerSlave"=>$SalesManagerSlave, 
        "CCOMaster"=>$CCOMaster, 
        "CCOSlave"=>$CCOSlave, 
        "SalesDirectorMaster"=>$SalesDirectorMaster,
        "SalesDirectorSlave"=>$SalesDirectorSlave );


        return $participated_emp;  
    }






    // final Algo for operation calculate_operation_commission will return array with emp id and his commission
    public function calculate_operation_commission($empArr, $unitPrice, $area, $IsLaunch, $IsOverSeas ){

        $emp_id_and_commission = array();
        $isConfilict = $this->is_there_is_confilict($empArr);
        if ($IsLaunch==="yes" || $isConfilict===False) {
            $OperationManager_commission_value= $this->get_commission_value_by_title("Operation Manager");
            // if ($OperationManager_commission_value===NULL) {
            //     $OperationManager_commission_value= $this->get_commission_percentage_by_title("Operation Manager");
            // }
            $SalesAdmin_commission_value= $this->get_commission_value_by_title("Sales Admin");
            // if ($SalesAdmin_commission_value===NULL) {
            //     $SalesAdmin_commission_value= $this->get_commission_percentage_by_title("Sales Admin");
            // }
            $participated_emp = $this->calculate_operation_participated_emp($empArr);

            // operation manager array 
            $OperationManager= $participated_emp["OperationManager"];
            // Sales Admin array 
            $SalesAdmin=$participated_emp["SalesAdmin"] ;
            
            // check if OperationManager array not empty 
            if(count($participated_emp["OperationManager"])!==0){
                $OperationManager_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $OperationManager, NULL, $OperationManager_commission_value);
                $emp_id_and_commission+= $OperationManager_and_commission; 
            }
            // check if OperationManager array not empty 
            if(count($participated_emp["SalesAdmin"])!==0){
                $OperationManager_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesAdmin, NULL, $SalesAdmin_commission_value);
                $emp_id_and_commission+= $OperationManager_and_commission; 
            }

        } else {
            $OperationManager_commission_value= $this->get_commission_value_by_title("Operation Manager");
            $SalesAdmin_commission_value= $this->get_commission_value_by_title("Sales Admin");
            $participated_emp = $this->calculate_operation_participated_emp_conflict($empArr, $area);

            // operation manager array 
            $OperationManagerMaster= $participated_emp["OperationManagerMaster"];
            $OperationManagerSlave= $participated_emp["OperationManagerSlave"];
            // Sales Admin array 
            $SalesAdminMaster=$participated_emp["SalesAdminMaster"] ;
            $SalesAdminSlave=$participated_emp["SalesAdminSlave"] ;

            $master = $this->check_area_master_precentage("2", "master",$IsOverSeas);
            $salve = $this->check_area_master_precentage("2", "slave",$IsOverSeas);
            
            // check if OperationManager array not empty 
            if(count($participated_emp["OperationManagerMaster"])!==0 && count($participated_emp["OperationManagerSlave"])!==0){
                $OperationManagerMaster_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $OperationManagerMaster, NULL, $OperationManager_commission_value*$master);
                $emp_id_and_commission+= $OperationManagerMaster_and_commission; 
                $OperationManagerSlave_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $OperationManagerSlave, NULL, $OperationManager_commission_value*$salve);
                $emp_id_and_commission+= $OperationManagerSlave_and_commission; 
            }elseif(count($participated_emp["OperationManagerMaster"])!==0 && count($participated_emp["OperationManagerSlave"])===0){
                $OperationManagerMaster_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $OperationManagerMaster, NULL, $OperationManager_commission_value);
                $emp_id_and_commission+= $OperationManagerMaster_and_commission; 
            }elseif(count($participated_emp["OperationManagerMaster"])===0 && count($participated_emp["OperationManagerSlave"])!==0){
                $OperationManagerSlave_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $OperationManagerSlave, NULL, $OperationManager_commission_value);
                $emp_id_and_commission+= $OperationManagerSlave_and_commission;
            }

            // // check if OperationManager array not empty 
            if(count($participated_emp["SalesAdminMaster"])!==0 && count($participated_emp["SalesAdminSlave"])!==0){
                $SalesAdminMaster_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesAdminMaster, NULL, $SalesAdmin_commission_value*$master);
                $emp_id_and_commission+= $SalesAdminMaster_and_commission; 
                $SalesAdminSlave_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesAdminSlave, NULL, $SalesAdmin_commission_value*$salve);
                $emp_id_and_commission+= $SalesAdminSlave_and_commission; 
            }elseif(count($participated_emp["SalesAdminMaster"])!==0 && count($participated_emp["SalesAdminSlave"])===0){
                $SalesAdminMaster_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesAdminMaster, NULL, $SalesAdmin_commission_value);
                $emp_id_and_commission+= $SalesAdminMaster_and_commission; 
            }elseif(count($participated_emp["SalesAdminMaster"])===0 && count($participated_emp["SalesAdminSlave"])!==0){
                $SalesAdminSlave_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesAdminSlave, NULL, $SalesAdmin_commission_value);
                $emp_id_and_commission+= $SalesAdminSlave_and_commission;
            }


        }


        return $emp_id_and_commission;

    }

    // final Algo for operation calculate_Contract_commission will return array with emp id and his commission
    public function calculate_Contract_commission($empArr, $unitPrice, $area, $IsLaunch, $IsOverSeas ){

        $emp_id_and_commission = array();
        $isConfilict = $this->is_there_is_confilict($empArr);
        if ($IsLaunch==="yes" || $isConfilict===False) {
            $ContractManager_commission_value= $this->get_commission_value_by_title("Contract Manager");
            $ContractSpecialist_value= $this->get_commission_value_by_title("Contract Specialist");
            $participated_emp = $this->calculate_Contract_participated_emp($empArr);

            // Contract Manager array 
            $ContractManager= $participated_emp["ContractManager"];
            // Contract Specialist array 
            $ContractSpecialist=$participated_emp["ContractSpecialist"] ;
            
            // check if ContractManager array not empty 
            if(count($participated_emp["ContractManager"])!==0){
                $ContractManager_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $ContractManager, NULL, $ContractManager_commission_value);
                $emp_id_and_commission+= $ContractManager_and_commission; 
            }
            // check if ContractSpecialist array not empty 
            if(count($participated_emp["ContractSpecialist"])!==0){
                $ContractSpecialist_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $ContractSpecialist, NULL, $ContractSpecialist_value);
                $emp_id_and_commission+= $ContractSpecialist_and_commission; 
            }

        } else {
            $ContractManager_commission_value= $this->get_commission_value_by_title("Contract Manager");
            $ContractSpecialist_value= $this->get_commission_value_by_title("Contract Specialist");
            $participated_emp = $this->calculate_Contract_participated_emp_conflict($empArr, $area);

            // Contract Manager array 
            $ContractManagerMaster= $participated_emp["ContractManagerMaster"];
            $ContractManagerSlave= $participated_emp["ContractManagerSlave"];
            // Contract Specialist array 
            $ContractSpecialistMaster=$participated_emp["ContractSpecialistMaster"] ;
            $ContractSpecialistSlave=$participated_emp["ContractSpecialistSlave"] ;

            $master = $this->check_area_master_precentage("1", "master",$IsOverSeas);
            $salve = $this->check_area_master_precentage("1", "slave",$IsOverSeas);
            
            // check if ContractManager array not empty 
            if(count($participated_emp["ContractManagerMaster"])!==0 && count($participated_emp["ContractManagerSlave"])!==0){
                $ContractManagerMaster_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $ContractManagerMaster, NULL, $ContractManager_commission_value*$master);
                $emp_id_and_commission+= $ContractManagerMaster_and_commission; 
                $ContractManagerSlave_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $ContractManagerSlave, NULL, $ContractManager_commission_value*$salve);
                $emp_id_and_commission+= $ContractManagerSlave_and_commission; 
            }elseif(count($participated_emp["ContractManagerMaster"])!==0 && count($participated_emp["ContractManagerSlave"])===0){
                $ContractManagerMaster_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $ContractManagerMaster, NULL, $ContractManager_commission_value);
                $emp_id_and_commission+= $ContractManagerMaster_and_commission; 
            }elseif(count($participated_emp["ContractManagerMaster"])===0 && count($participated_emp["ContractManagerSlave"])!==0){
                $ContractManagerSlave_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $ContractManagerSlave, NULL, $ContractManager_commission_value);
                $emp_id_and_commission+= $ContractManagerSlave_and_commission;
            }

            // // check if ContractSpecialist array not empty 
            if(count($participated_emp["ContractSpecialistMaster"])!==0 && count($participated_emp["ContractSpecialistSlave"])!==0){
                $ContractSpecialistMaster_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $ContractSpecialistMaster, NULL, $ContractSpecialist_value*$master);
                $emp_id_and_commission+= $ContractSpecialistMaster_and_commission; 
                $ContractSpecialistSlave_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $ContractSpecialistSlave, NULL, $ContractSpecialist_value*$salve);
                $emp_id_and_commission+= $ContractSpecialistSlave_and_commission; 
            }elseif(count($participated_emp["ContractSpecialistMaster"])!==0 && count($participated_emp["ContractSpecialistSlave"])===0){
                $ContractSpecialistMaster_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $ContractSpecialistMaster, NULL, $ContractSpecialist_value);
                $emp_id_and_commission+= $ContractSpecialistMaster_and_commission; 
            }elseif(count($participated_emp["ContractSpecialistMaster"])===0 && count($participated_emp["ContractSpecialistSlave"])!==0){
                $ContractSpecialistSlave_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $ContractSpecialistSlave, NULL, $ContractSpecialist_value);
                $emp_id_and_commission+= $ContractSpecialistSlave_and_commission;
            }


        }


        return $emp_id_and_commission;

    }

    // final Algo for Sales calculate_Contract_commission will return array with emp id and his commission
    public function calculate_Sales_commission($empArr, $unitPrice, $area, $IsLaunch, $IsOverSeas ){

        $emp_id_and_commission = array();
        $isConfilict = $this->is_there_is_confilict($empArr);
        if ($IsLaunch==="yes" || $isConfilict===False) {
            $SalesSepecialist_commission_percentage= $this->get_commission_percentage_by_title("Sales Sepecialist");
            $SalesManager_commission_percentage= $this->get_commission_percentage_by_title("Sales Manager");
            $CCO_commission_percentage= $this->get_commission_percentage_by_title("CCO");
            $SalesDirector_commission_percentage= $this->get_commission_percentage_by_title("Sales Director");
            $participated_emp = $this->calculate_Sales_participated_emp($empArr);

            // SalesSepecialist array 
            $SalesSepecialist= $participated_emp["SalesSepecialist"];
            // SalesManager array 
            $SalesManager=$participated_emp["SalesManager"];
            // CCO array 
            $CCO= $participated_emp["CCO"];
            // Contract Specialist array 
            $SalesDirector=$participated_emp["SalesDirector"];
            
            // check if ContractManager array not empty 
            if(count($participated_emp["SalesSepecialist"])!==0){
                $SalesSepecialist_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesSepecialist, $SalesSepecialist_commission_percentage, NULL);
                $emp_id_and_commission+= $SalesSepecialist_and_commission; 
            }
            // check if ContractSpecialist array not empty 
            if(count($participated_emp["SalesManager"])!==0){
                $SalesManager_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesManager, $SalesManager_commission_percentage, NULL);
                $emp_id_and_commission+= $SalesManager_and_commission; 
            }
             // check if ContractManager array not empty 
             if(count($participated_emp["CCO"])!==0){
                $CCO_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $CCO, $CCO_commission_percentage, NULL);
                $emp_id_and_commission+= $CCO_and_commission; 
            }
            // check if ContractSpecialist array not empty 
            if(count($participated_emp["SalesDirector"])!==0){
                $SalesDirector_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesDirector, $SalesDirector_commission_percentage, NULL);
                $emp_id_and_commission+= $SalesDirector_and_commission; 
            }


        } else {
            $SalesSepecialist_commission_percentage= $this->get_commission_percentage_by_title("Sales Sepecialist");
            $SalesManager_commission_percentage= $this->get_commission_percentage_by_title("Sales Manager");
            $CCO_commission_percentage= $this->get_commission_percentage_by_title("CCO");
            $SalesDirector_commission_percentage= $this->get_commission_percentage_by_title("Sales Director");
            $participated_emp = $this->calculate_Sales_participated_emp_conflict($empArr, $area);

            // SalesSepecialist array 
            $SalesSepecialistMaster= $participated_emp["SalesSepecialistMaster"];
            $SalesSepecialistSlave= $participated_emp["SalesSepecialistSlave"];
            // SalesManager array 
            $SalesManagerMaster=$participated_emp["SalesManagerMaster"] ;
            $SalesManagerSlave=$participated_emp["SalesManagerSlave"] ;
            // CCO  array 
            $CCOMaster= $participated_emp["CCOMaster"];
            $CCOSlave= $participated_emp["CCOSlave"];
            // SalesDirector array 
            $SalesDirectorMaster=$participated_emp["SalesDirectorMaster"] ;
            $SalesDirectorSlave=$participated_emp["SalesDirectorSlave"] ;


            $master = $this->check_area_master_precentage("3", "master",$IsOverSeas);
            $salve = $this->check_area_master_precentage("3", "slave",$IsOverSeas);
            
            // check if SalesSepecialist array not empty 
            if(count($participated_emp["SalesSepecialistMaster"])!==0 && count($participated_emp["SalesSepecialistSlave"])!==0){
                $SalesSepecialistMaster_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesSepecialistMaster, $SalesSepecialist_commission_percentage*$master, NULL);
                $emp_id_and_commission+= $SalesSepecialistMaster_and_commission; 
                $SalesSepecialistSlave_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesSepecialistSlave, $SalesSepecialist_commission_percentage*$salve, NULL);
                $emp_id_and_commission+= $SalesSepecialistSlavee_and_commission; 
            }elseif(count($participated_emp["SalesSepecialistMaster"])!==0 && count($participated_emp["SalesSepecialistSlave"])===0){
                $SalesSepecialistMaster_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesSepecialistMaster, $SalesSepecialist_commission_percentage, NULL);
                $emp_id_and_commission+= $SalesSepecialistMaster_and_commission; 
            }elseif(count($participated_emp["SalesSepecialistMaster"])===0 && count($participated_emp["SalesSepecialistSlave"])!==0){
                $SalesSepecialistSlave_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesSepecialistSlave, $SalesSepecialist_commission_percentage, NULL);
                $emp_id_and_commission+= $SalesSepecialistSlave_and_commission;
            }

            // // check if SalesManager array not empty 
            if(count($participated_emp["SalesManagerMaster"])!==0 && count($participated_emp["SalesManagerSlave"])!==0){
                $SalesManagerMaster_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesManagerMaster, $SalesManager_commission_percentage*$master, NULL);
                $emp_id_and_commission+= $SalesManagerMaster_and_commission; 
                $SalesManagerSlave_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesManagerSlave, $SalesManager_commission_percentage*$salve, NULL);
                $emp_id_and_commission+= $SalesManagerSlave_and_commission; 
            }elseif(count($participated_emp["SalesManagerMaster"])!==0 && count($participated_emp["SalesManagerSlave"])===0){
                $SalesManagerMaster_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesManagerMaster, $SalesManager_commission_percentage, NULL);
                $emp_id_and_commission+= $SalesManagerMaster_and_commission; 
            }elseif(count($participated_emp["SalesManagerMaster"])===0 && count($participated_emp["SalesManagerSlave"])!==0){
                $SalesManagerSlave_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesManagerSlave, $SalesManager_commission_percentage, NULL);
                $emp_id_and_commission+= $SalesManagerSlave_and_commission;
            }

            // check if CCO array not empty 
            if(count($participated_emp["CCOMaster"])!==0 && count($participated_emp["CCOSlave"])!==0){
                $CCOMaster_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $CCOMaster, $CCO_commission_percentage*$master, NULL);
                $emp_id_and_commission+= $CCOMaster_and_commission; 
                $CCOSlave_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $CCOSlave, $CCO_commission_percentage*$salve, NULL);
                $emp_id_and_commission+= $CCOSlave_and_commission; 
            }elseif(count($participated_emp["CCOMaster"])!==0 && count($participated_emp["CCOSlave"])===0){
                $CCOMaster_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $CCOMaster, $CCO_commission_percentage, NULL);
                $emp_id_and_commission+= $CCOMaster_and_commission; 
            }elseif(count($participated_emp["CCOMaster"])===0 && count($participated_emp["CCOSlave"])!==0){
                $CCOSlave_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $CCOSlave, $CCO_commission_percentage, NULL);
                $emp_id_and_commission+= $CCOSlave_and_commission;
            }

            // // check if SalesDirector array not empty 
            if(count($participated_emp["SalesDirectorMaster"])!==0 && count($participated_emp["SalesDirectorSlave"])!==0){
                $SalesDirectorMaster_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesDirectorMaster, $SalesDirector_commission_percentage*$master, NULL);
                $emp_id_and_commission+= $SalesDirectorMaster_and_commission; 
                $SalesDirectorSlave_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesDirectorSlave, $SalesDirector_commission_percentage*$salve, NULL);
                $emp_id_and_commission+= $SalesDirectorSlave_and_commission; 
            }elseif(count($participated_emp["SalesDirectorMaster"])!==0 && count($participated_emp["SalesDirectorSlave"])===0){
                $SalesDirectorMaster_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesDirectorMaster, $SalesDirector_commission_percentage, NULL);
                $emp_id_and_commission+= $SalesDirectorMaster_and_commission; 
            }elseif(count($participated_emp["SalesDirectorMaster"])===0 && count($participated_emp["SalesDirectorSlave"])!==0){
                $SalesDirectorSlave_and_commission = $this->get_emp_commission_by_count_value($unitPrice, $SalesDirectorSlave, $SalesDirector_commission_percentage, NULL);
                $emp_id_and_commission+= $SalesDirectorSlave_and_commission;
            }


        }


        return $emp_id_and_commission;

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

    
    public function is_there_is_confilict($empArr){
        $commissiondb = new CommissionSystemDB;
        $employeeList = implode(", ",$empArr);
        $sql = "SELECT DISTINCT `area_id` FROM `employee` WHERE `id`IN ({$employeeList})";
        
        $result = $commissiondb->query($sql);
        
        if ($result->num_rows > 1) {
            return True;
          } else {
            return False;
          }

        $commissiondb->close_db_connection();

    }

    // this function is to check all emp array has the same area or not 
    public function check_area_master_by_id_area($empId, $area){

        $commissiondb = new CommissionSystemDB;
        
        $sql = "SELECT `area name` AS `area` 
        FROM (SELECT `e`.`id`, `e`.`name`,
        `e`.`area_id`, `a`.`name` AS `area name` 
        FROM `employee` AS `e`, `area` AS `a` 
        WHERE `e`.`area_id`=`a`.`id`) AS `T1` 
        WHERE `id`='{$empId}'";
        
        $result = $commissiondb->query($sql);
        while($row = $result->fetch_assoc()) {
            $area_name = $row["area"];
        }
        $commissiondb->close_db_connection();

        if($area===$area_name){
        $master= true;
        }else{
        $master= false;
        }

        return $master;   

    }

    public function check_area_master_precentage($dep_id, $masterOrSlave, $isOverSeas){
        $commissiondb = new CommissionSystemDB;

        if($masterOrSlave==="master"){
            $sql = "SELECT `area_master_percentage` FROM `area_direct_confilict` WHERE `department_id`='{$dep_id}' AND `is_over_seas`='{$isOverSeas}'";
            
            $result = $commissiondb->query($sql);
            while($row = $result->fetch_assoc()) {
                $percentage = $row["area_master_percentage"];
            }
        }else{
            $sql = "SELECT `area_slave_percentage` FROM `area_direct_confilict` WHERE `department_id`='{$dep_id}' AND `is_over_seas`='{$isOverSeas}'";
            
            $result = $commissiondb->query($sql);
            while($row = $result->fetch_assoc()) {
                $percentage = $row["area_slave_percentage"];
            }

        }
        $commissiondb->close_db_connection();
        $percentage =$percentage/100;
        return $percentage;

    }



    public function get_emp_manger($emp_id){
        $commissiondb = new CommissionSystemDB;
        
        $sql = "SELECT `manger_id` FROM `employee` WHERE `id`={$emp_id}";
        
        $result = $commissiondb->query($sql);

        if($result!==false){
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  $manger_id = $row["manger_id"];
    
                }
            } else {
            $manger_id = NULL;
            }

        }else{
            $manger_id = NULL;
        }
        $commissiondb->close_db_connection();
        return $manger_id;
        
    }

    public function get_emp_name_by_id($emp_id){

        $commissiondb = new CommissionSystemDB;
        
        $sql = "SELECT `name` FROM `employee` WHERE `id`={$emp_id}";
        
        $result = $commissiondb->query($sql);
        while($row = $result->fetch_assoc()) {
            $emp_name = $row["name"];
          }
          $commissiondb->close_db_connection();
        return $emp_name;
    }

    public function get_root_emp_manager_array($emp_id){

        $commissiondb = new CommissionSystemDB;
        
        $sql = "SELECT `level` FROM `employee` WHERE `id`={$emp_id}";
        
        $result = $commissiondb->query($sql);

        while($row = $result->fetch_assoc()) {
            $emp_level = (int)$row["level"];
        }
        $commissiondb->close_db_connection();

        $emp_manager_root_array=array($emp_id);
        $start_emp_id = $emp_id;

        for ($x = $emp_level; $x >= 0; $x--) {

            $emp_manger_id = $this->get_emp_manger($start_emp_id);
            array_push($emp_manager_root_array, (int)$emp_manger_id);
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
        $commissiondb->close_db_connection(); 
        return $job_title;
    }

    public function get_commission_value_by_title($title){
        $commissiondb = new CommissionSystemDB;

        $sql = "SELECT * FROM `job_title` WHERE `name`='{$title}'";
        
        $result = $commissiondb->query($sql);
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $commission_value = $row["commission_value"];
        }
        $commissiondb->close_db_connection();
        return $commission_value; 
    }

    public function get_commission_percentage_by_title($title){

        $commissiondb = new CommissionSystemDB;
        $sql = "SELECT * FROM `job_title` WHERE `name`='{$title}';";
        
        $result = $commissiondb->query($sql);
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $commission_percentage = $row["commission_percentage"];
        }
        $commissiondb->close_db_connection();
        return $commission_percentage;
        
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
        $commissiondb->close_db_connection(); 
        return $result;
         

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
        $commissiondb->close_db_connection();
        return $result;

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
        $commissiondb->close_db_connection();  
        return $result;

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
        $commissiondb->close_db_connection(); 
        return $result;
         

    }



    

    
}



?>