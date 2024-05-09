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

    protected function lower_case($username)
    {
        
        $userdb              = new ElmasriaDB;
        $username_escaped    = $userdb->escape_string("$username");
        $lower_case = strtolower($username_escaped);
        return $lower_case;
        
    }
    
    protected function encyript_password($password)
    {
        
        $userdb              = new ElmasriaDB;
        $password_escaped    = $userdb->escape_string("$password");
        $encyripted_password = md5($password_escaped);
        return $encyripted_password;
        
    }
    
    protected function hashing_password($password)
    {
        
        $userdb           = new ElmasriaDB;
        $password_escaped = $userdb->escape_string("$password");
        $hashed_password  = sha1($password_escaped);
        return $hashed_password;
        
    }

    protected function user_exists($username, $system_type)
    {
        
        $userdb = new ElmasriaDB;
        
        $lower_case_username = $this->lower_case($username);
        
        
        $sql = "SELECT * FROM `users` WHERE `username`='$lower_case_username' AND `systemtype`='$system_type'";
        
        $result    = $userdb->query($sql);
        $user_data = mysqli_fetch_array($result);
        
        if ($user_data <= 0) {
            
            return "User Doesn't Exists.!!! Please check your User Name, and if still the same problem please contact your Administrator. Thanks for trusting US........ Software Development Team";
            
        } else {
            
            return true;
        }
        
        $userdb->close_db_connection();
    }


    
    public function get_system_users()
    {
        $userdb = new ElmasriaDB;
        
        $sql = "SELECT `A`.`userId`,`A`.`name`, `A`.`username`, `A`.`userType`, `A`.`systemtype`, `A`.`Status`, `A`.`creationDate`, `A`.`createdBy`,
         `B`.`name` AS  `user_role_id` 
         FROM (SELECT`userId`, `client_id`,`name`,`username`,`user_role_id`,`userType`,
         `systemtype`,`Status`,`creationDate`,`createdBy` 
         FROM `users` WHERE `user_role_id` NOT IN ('1','2')) AS `A`, `user_role` AS `B`
          WHERE `A`.`user_role_id`=`B`.`id`;";
        
        $result = $userdb->query($sql);
        return $result;
        $userdb->close_db_connection();  
        
    }

    public function get_user_role()
    {
        $userdb = new ElmasriaDB;
        
        $sql = "SELECT * FROM `user_role` WHERE `id` NOT IN (1,2)";
        
        $result = $userdb->query($sql);
        return $result;
        $userdb->close_db_connection();  
        
    }
    public function get_user_systemtype()
    {
        $userdb = new ElmasriaDB;
        
        $sql = "SELECT DISTINCT `systemType` FROM `users`;";
        
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