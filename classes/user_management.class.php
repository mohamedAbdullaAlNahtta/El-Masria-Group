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

class user_management{

    
    public function get_system_users()
    {
        $userdb = new ElmasriaDB;
        
        $sql = "SELECT `client_id`,`name`,`username`,`user_role_id`,`userType`,`systemtype`,`Status`,`creationDate`,`createdBy` FROM `users` WHERE `user_role_id` NOT IN ('1','2')";
        
        $result = $userdb->query($sql);
        return $result;
        $userdb->close_db_connection();  
        
    }

    public function add_user($name, $username, $password, $company_id, $group_id, $user_Type, $system_type)
    {
        
        $userdb = new ElmasriaDB;
        
        $created_by = $this->username;
        
        $lower_case_username = $this->lower_case($username);
        $lower_case_system_type = $this->lower_case($system_type);
        $encyripted_password = $this->encyript_password($password);
        $hashed_password     = $this->hashing_password($password);
        $user_already_exists = $this->user_exists($lower_case_username, $lower_case_system_type);
        
        if ($user_already_exists === true) {
            return " The User Name : (($username)) ,  with System Type : (($system_type)) ... Is already exists !!! .... please try another user name.  Thanks for trusting US....... Software Development Team";
        } else {
            $sql = "INSERT INTO `users` (`userId`, `name`, `username`, `secureH`, `password`, `companyId`, `groupId`, `userType`, `systemtype`, `Status`, `creationDate`, `createdBy`) VALUES (NULL, '$name', '$lower_case_username', '$hashed_password', '$encyripted_password', '$company_id', '$group_id', '$user_Type', '$system_type', 'I', SYSDATE(), '$created_by');";
            
            $insert_user = $userdb->query($sql);
            
            if ($insert_user === true) {
                $log_action = $this->log_add_new_user_success($name, $username, $company_id, $group_id, $user_Type, $system_type);
                if ($log_action === true) {
                    return "New User Account has been Created successfully.  Thanks for trusting US....... Software Development Team";
                }
                return "New User Account has been Created successfully. $log_action  Thanks for trusting US....... Software Development Team";
            } else {
                return " The User Not created... Something Went Wrong please contact the Developer ... Eng Muhammad El Nahtta as critical ";
            }
        }
        
        $userdb->close_db_connection();
        
    }

    

    
}



?>