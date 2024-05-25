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

class CommissionConfiguration {

    public function get_department()
    {
        $commissiondb = new CommissionSystemDB;
        
        $sql = "SELECT * FROM `department`";
        
        $result = $commissiondb->query($sql);
        return $result;
        $commissiondb->close_db_connection();  
        
    }
    public function get_job_title()
    {
        $commissiondb = new CommissionSystemDB;
        
        $sql = "SELECT * FROM `job_title`";
        
        $result = $commissiondb->query($sql);
        return $result;
        $commissiondb->close_db_connection();  
        
    }

    public function get_area()
    {
        $commissiondb = new CommissionSystemDB;
        
        $sql = "SELECT * FROM `area`";
        
        $result = $commissiondb->query($sql);
        return $result;
        $commissiondb->close_db_connection();  
        
    }

    public function get_area_direct_confilict()
    {
        $commissiondb = new CommissionSystemDB;
        
        $sql = "SELECT * FROM `area_direct_confilict`";
        
        $result = $commissiondb->query($sql);
        return $result;
        $commissiondb->close_db_connection();  
        
    }
    public function get_area_indirect_confilict()
    {
        $commissiondb = new CommissionSystemDB;
        
        $sql = "SELECT * FROM `area_indirect_confilict`";
        
        $result = $commissiondb->query($sql);
        return $result;
        $commissiondb->close_db_connection();  
        
    }

}