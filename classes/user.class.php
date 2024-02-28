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

class User  
{

    ////////////////////////////////////////////////////////
    // Developed by engineer Muhammad Abdulla El Nahtta   //
    // Cell Phone +20 1093001070                          //
    ////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////// 
    
    public $id;
    public $name;
    public $username;
    public $password_H;
    public $password;
    public $type;
    public $group_id;
    public $company_id;
    public $status;
    public $creation_date;
    public $created_by;
    public $session_token;
    public $user_profile_img;
    public $user_token;
    
    public function user_login($username, $password, $system_type)
    {
        ////////////////////////////////////////////////////////
        // Developed by engineer Muhammad Abdulla El Nahtta   //
        // Cell Phone +20 1093001070                          //
        ////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////// 

        $block_user  = $this->block_user($username, $system_type);
        $user_exists = $this->user_exists($username, $system_type);
        
        if ($user_exists === true) {
            
            $user_active_status = $this->validate_user_status($username, $system_type);
            if ($user_active_status === true) {
                $validate_user_blocked = $this->validate_user_blocked($username, $system_type);
                if ($validate_user_blocked === true) {
                    $validate_password = $this->validate_password($username, $password, $system_type);
                    if ($validate_password === true) {
                        $token_result = $this->user_login_new_token($username, $system_type);
                        if ($token_result === true) {
                            $this->initiate_user($username, $system_type);
                            $system_log=$this->log_add_user_login_success($username, $system_type);
                            if ($system_log === true) {
                                return true;
                            } else {
                                return $system_log;
                            }
                            
                        } else {
                            return $token_result;
                        }
                        
                    } else {
                        return $validate_password;
                    }
                    
                } else {
                    return $validate_user_blocked;
                }
                
            } else {
                return $user_active_status;
            }
            
            
        } else {
            return $user_exists;
        }
        
    }

    public function validate_session_token($username, $system_type, $token)
    {
        ////////////////////////////////////////////////////////
        // Developed by engineer Muhammad Abdulla El Nahtta   //
        // Cell Phone +20 1093001070                          //
        ////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////// 

        $userdb = new ElmasriaDB;
        
        $lower_case_username = $this->lower_case($username);
        
        $sql = "SELECT * FROM `users_login_sessions` WHERE `username`='$lower_case_username' AND `systemtype`='$system_type' AND `token`='$token' AND `logOutTime` IS NULL";
        
        $result    = $userdb->query($sql);

        if ($result->num_rows===0) {
            return false;
        }else{
            return true;
        }
        
    }
    public function validate_token_session_count($username, $system_type){
        ////////////////////////////////////////////////////////
        // Developed by engineer Muhammad Abdulla El Nahtta   //
        // Cell Phone +20 1093001070                          //
        ////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////// 
        $userdb = new ElmasriaDB;
        $lower_case_username = $this->lower_case($username);

        $sql = "SELECT * FROM `users_login_sessions` WHERE `username`='$lower_case_username' AND `systemtype`='$system_type' AND `logOutTime` IS NULL";
        $result = $userdb->query($sql);
        if ($result->num_rows > 1) {
            return false;
        }else{
            return true;
        }

    }
    
    public function destroy_other_session_token($username, $system_type, $token)
    {
        $userdb = new ElmasriaDB;
        $this->log_user_logout_success_end_other_session_token($username, $system_type);
        $lower_case_username = $this->lower_case($username);
        
        $sql = "UPDATE `users_login_sessions` SET `logOutTime` = NOW() WHERE `username`='$username' AND `systemtype`='$system_type'  AND `token`!='$token' AND `logOutTime` IS NULL;";
        $result    = $userdb->query($sql);

        if ($result === true) {  
            return true;
        } else {  
            return false;
        }

    }

    public function destroy_user_token($username, $system_type, $token)
    {
        $userdb = new ElmasriaDB;
        $this->log_user_logout_success($username, $system_type);
        $lower_case_username = $this->lower_case($username);
        
        $sql = "UPDATE `users_login_sessions` SET `logOutTime` = NOW() WHERE `username`='$username' AND `systemtype`='$system_type'  AND `token`='$token' AND `logOutTime` IS NULL;";
        $result    = $userdb->query($sql);

        if ($result === true) {  
            return true;
        } else {  
            return false;
        }

    }

    public function unblock_user($username, $system_type)
    {
        ////////////////////////////////////////////////////////
        // Developed by engineer Muhammad Abdulla El Nahtta   //
        // Cell Phone +20 1093001070                          //
        ////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////// 
        
        $userdb   = new ElmasriaDB;
        $lower_case_username = $this->lower_case($username);
        $actionBy = $this->$username;

        $block_time_frame = date(' Y-m-d H:i:s ',strtotime('-1 hour ',strtotime(date('Y-m-d H:i:s '))));
        
        $sql = "DELETE FROM `users_blocked` WHERE `username`='$lower_case_username' AND `systemtype`='$system_type';";
        $sql .= "UPDATE `users_logs` SET `actionApproval`='Approved' WHERE `username`='$lower_case_username' AND `systemtype`='$system_type' AND `action`='log in' AND `status`='Failed' AND `actionDateTime`>'$block_time_frame'";
        
        $unblock_user = $userdb->multi_query($sql);
        
        if ($unblock_user === true) {
            $this->log_unblock_user($lower_case_username, $system_type);
            return "User has been unblocked.  Thanks for trusting US....... Software Development Team";
        } else {
            return false;
        }
        
        $userdb->close_db_connection();
        
    }
    
    public function get_system_users()
    {
        $userdb = new ElmasriaDB;
        
        $sql = "SELECT * FROM `users` WHERE `user_role_id` NOT IN ('1','2')";
        
        $result = $userdb->query($sql);
        $userdb->close_db_connection();
        return $result;
        
        
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
    
    public function activate_user($username, $system_type)
    {
        $userdb = new ElmasriaDB;
        
        $lower_case_username = $this->lower_case($username);
        
        $sql = "UPDATE `users` SET `Status` = 'A' WHERE `users`.`username` = '$lower_case_username' AND `systemtype`='$system_type'";
        
        $activate_user = $userdb->query($sql);
        
        if ($activate_user === true) {
            
            $log_action = $this->log_activate_user($username, $system_type);
            if ($log_action !== true) {
                return "User has been Activated." . $log_action . "  Thanks for trusting US....... Software Development Team";
            } else {
                return "User has been Activated.  Thanks for trusting US....... Software Development Team";
            }
            
        } else {
            return false;
        }
        
        $userdb->close_db_connection();
        
    }
    
    public function deactivate_user($username, $system_type)
    {
        $userdb = new ElmasriaDB;
        
        $lower_case_username = $this->lower_case($username);
        
        $sql = "UPDATE `users` SET `status` = 'I' WHERE `users`.`username` = '$lower_case_username' AND `systemtype`='$system_type'";
        
        $deactivate_user = $userdb->query($sql);
        
        if ($deactivate_user === true) {
            $log_action = $this->log_deactivate_user($username, $system_type);
            if ($log_action !== true) {
                return "User has been Deactivated." . $log_action . "  Thanks for trusting US....... Software Development Team";
            } else {
                return "User has been Deactivated.  Thanks for trusting US....... Software Development Team";
            }
        } else {
            return false;
        }
        
        $userdb->close_db_connection();
        
    }
    
    public function change_user_group($username, $system_type, $newGroupId)
    {
        $userdb = new ElmasriaDB;
        
        $lower_case_username = $this->lower_case($username);
        
        $sql = "UPDATE `users` SET `groupId` = '$newGroupId' WHERE `users`.`username` = '$lower_case_username' AND `systemtype`='$system_type'";
        
        $change_user_group = $userdb->query($sql);
        
        if ($change_user_group === true) {
            $log_process= $this->log_change_user_group($username, $system_type, $newGroupId);
           if ($log_process === true) {
            return "User Group has been changed.  Thanks for trusting US....... Software Development Team";
           } else {
            return "Failed to log the action to the system logs!!  ... "."User Group has been changed.  Thanks for trusting US....... Software Development Team";
           }
           
        } else {
            return false;
        }
        
        $userdb->close_db_connection();
        
    }
    
    public function change_user_password($username, $system_type, $current_password, $new_password, $confirm_password)
    {
        
        
        $validate_password = $this->validate_password($username, $current_password ,$system_type);
        
        if ($validate_password !== true) {
            # code...
            return $validate_password;
            
        } else if ($new_password !== $confirm_password) {
            # code...
            return "your new password doesn't match the confirmed password please re-type both again.  Thanks for trusting US....... Software Development Team";
            
        } else {
            # code...
            $userdb = new ElmasriaDB;
            
            $lower_case_username = $this->lower_case($username);
            $encyripted_password = $this->encyript_password($new_password);
            $hashed_password     = $this->hashing_password($new_password);
            
            
            $sql = "UPDATE `users` SET `secureH` = '$hashed_password', `password` = '$encyripted_password' WHERE `users`.`username` = '$lower_case_username' AND `systemtype`='$system_type'";
            
            $change_password = $userdb->query($sql);
            
            if ($change_password === true) {
                $log_process= $this->log_change_user_password($username, $system_type);
               if ($log_process === true) {
                return "Your password has been Changed successfully.  Thanks for trusting US....... Software Development Team";
               } else {
                return "Failed to log the process to the sytem logs!! ... Your password has been Changed successfully.  Thanks for trusting US....... Software Development Team";
               }
               
            } else {
                return false;
            }
            
            
            $userdb->close_db_connection();
            
        }
        
        
    }
    
    public function reset_user_password($username, $system_type, $restPass)
    {
        
        $userdb = new ElmasriaDB;
        
        $lower_case_username = $this->lower_case($username);
        $encyripted_password = $this->encyript_password($restPass);
        $hashed_password     = $this->hashing_password($restPass);
        
        
        $sql = "UPDATE `users` SET `secureH` = '$hashed_password', `password` = '$encyripted_password' WHERE `users`.`username` = '$lower_case_username' AND `systemtype`='$system_type'";
        
        $change_password = $userdb->query($sql);
        
        if ($change_password === true) {
            $log_process = $this->log_reset_user_password($username, $system_type);
           if ($log_process === true) {
            return "User password has been reset.  Thanks for trusting US....... Software Development Team";
           } else {
            return "Falied to log the action in The System log !! ... "."User password has been reset.  Thanks for trusting US....... Software Development Team";
           }
           
        } else {
            return false;
        }
        
        
        $userdb->close_db_connection();
        
    }

    public function first_time_login($username, $system_type)
    {
        $userdb = new ElmasriaDB;
        
        $lower_case_username = $this->lower_case($username);
        
        $sql = "SELECT * FROM `users_login_sessions` WHERE `username`='$lower_case_username' AND `systemtype`='$system_type'";
        
        $result    = $userdb->query($sql);
        $session_data = mysqli_num_rows($result);

        if ($session_data > 1) {
            return false;
        } else {
            return true;
        }
        
    }

    public function get_blocked_users(){
        $inquiry_db   = new ElmasriaDB;
        $sql = "SELECT * FROM `users_blocked`";

        $result = $inquiry_db->query($sql);
        return $result;
        $inquiry_db->close_db_connection();

    }
    public function get_user_profile_image_by_name($user_full_name){
        $inquiry_db   = new ElmasriaDB;
        $sql = "SELECT `Profile_image` FROM `users_profiles` WHERE `user_id`=(SELECT `userId` FROM `users` WHERE `name`='{$user_full_name}') ";

        $result = $inquiry_db->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                return $row['Profile_image'];     
            }  
        }else{
            return 'assets/images/User_profile_img/User-default.png';
        }
        
        $inquiry_db->close_db_connection();

    }

    public function get_user_profile_image_by_user_name($username){
        $inquiry_db   = new ElmasriaDB;
        $sql = "SELECT `Profile_image` FROM `users_profiles` WHERE `user_id`=(SELECT `userId` FROM `users` WHERE `username`='{$username}') ";

        $result = $inquiry_db->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                return $row['Profile_image'];     
            }  
        }else{
            return 'assets/images/User_profile_img/User-default.png';
        }
        
        $inquiry_db->close_db_connection();

    }

    public function get_user_logs($username){

        $userdb = new ElmasriaDB;
        if ($username==="") {
            $sql = "SELECT * FROM `users_logs` ORDER BY `id` DESC Limit 25";
        } else {
            $sql = "SELECT * FROM `users_logs` WHERE  `username`='$username' ORDER BY `id` DESC Limit 25";
        }
        $result    = $userdb->query($sql);

        return $result;
        $userdb->close_db_connection();

    }

    public function get_user_block_reason_logs($username){

        $userdb = new ElmasriaDB;
        
        $sql = "SELECT * FROM `users_logs` WHERE `username`='$username' AND `action`='log in' AND `status`='Failed' AND `actionApproval`='Not Approved' 
                UNION
                SELECT * FROM `users_logs` WHERE `username`='$username' AND `action`='User Blocked' AND `status`='Success' AND `actionApproval`='Not Approved' ORDER BY `actionDateTime` DESC LIMIT 10";
        
        $result    = $userdb->query($sql);

        return $result;
        $userdb->close_db_connection();

    }
    public function get_user_log_desc($id){

        $userdb = new ElmasriaDB;
        
        $sql = "SELECT * FROM `users_logs` WHERE  `id`='{$id}'";
        
        $result    = $userdb->query($sql);

        return $result;

    }
    public function get_user_login_session($username){

        $userdb = new ElmasriaDB;

        $sql = "SELECT * FROM `users_login_sessions` WHERE  `username`='$username' ORDER BY `id` DESC Limit 25";
        
        $result    = $userdb->query($sql);

        return $result;

    }

    public function log_user_activity($username, $system_type, $action, $status)
    {
        //get browser data
        $x               = new UserAgent();
        $y               = $x->getBrowser();
        $userAgent       = $y['userAgent'];
        $browserName     = $y['name'];
        $browserVersion  = $y['version'];
        $browserPlatform = $y['platform'];
        $browserPattern  = $y['pattern'];
        $uip             = $_SERVER['REMOTE_ADDR'];
        // end of getting brwoser data 
        
        $userdb = new ElmasriaDB;
        
        $lower_case_username = $this->lower_case($username);
        
        $sql = "INSERT INTO `users_logs` (`username`, `systemtype`,  `userIP`, `action`,  `status`, `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$lower_case_username', '$system_type',  '$uip', '$action',  '$status',  '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern')";
        
        $add_log = $userdb->query($sql);
        
        if ($add_log === true) {
            return true;
        } else {
            return false;
        }
        
        $userdb->close_db_connection();
    }
    
    public function get_company_image_by_id($company_id){
        $inquiry_db   = new ElmasriaDB;
        $sql = "SELECT `companyLogo` FROM `companies`  
        WHERE `companyid`='{$company_id}'";

        $result = $inquiry_db->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                if($row['companyLogo']!==NULL){
                    return $row['companyLogo'];     
                }else{
                    return 'assets/images/Company_logo_img/1.png';
                }    
            }  
        }

        $inquiry_db->close_db_connection();

    }
    public function get_company_name_by_id($company_id){
        $inquiry_db   = new ElmasriaDB;
        $sql = "SELECT `companyName` FROM `companies`  
        WHERE `companyid`='{$company_id}'";

        $result = $inquiry_db->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                return $row['companyName'];     
            }  
        }else{
            return 'failed to get company name';
        }

        $inquiry_db->close_db_connection();

    }
    
    
    ///////////////////////////////////////
    ///////////////////////////////////////
    // Protected functions  start from here
    ///////////////////////////////////////
    ///////////////////////////////////////
    protected function initiate_user($username, $system_type)
    {
        
        $userdb = new ElmasriaDB;
        
        $lower_case_username = $this->lower_case($username);
        
        $sql = "SELECT * FROM `users` WHERE `username`='$lower_case_username' AND `systemtype`='$system_type'";
        
        $result    = $userdb->query($sql);
        $user_data = mysqli_fetch_array($result);
        
        if ($user_data > 0) {
            
            $this->id         = $user_data["userId"];
            $this->name       = $user_data["name"];
            $this->username   = $user_data["username"];
            $this->password_H = $user_data["secureH"];
            $this->password   = $user_data["password"];
            
            $this->type       = $user_data["userType"];
            $this->group_id   = $user_data["groupId"];
            $this->company_id = $user_data["companyId"];
            
            $this->status = $user_data["Status"];
            
            $this->creation_date = $user_data["creationDate"];
            $this->created_by    = $user_data["createdBy"];
            
            // if ($this->type=='P'||$this->type=='p') {
            //     $this->company_id= null;
            // } else {
            //     $this->company_id= $user_data["companyId"];            
            // }
            $this->get_user_profile_img();
            $this->user_profile_img = $this->get_user_profile_image_by_user_name($user_data["username"]);
            
            return true;
            
        } else {
            
            return false;
        }
        
        $userdb->close_db_connection();
        
        
    }
    
    protected function block_user($username, $system_type)
    {
        $userdb = new ElmasriaDB;
        
        $trial = $this->get_login_failed_trials_last_hour($username, $system_type);
        
        if ($trial >= 5) {
            $uip = $_SERVER['REMOTE_ADDR'];
            $sql = "SELECT * FROM  `users_blocked` WHERE `username`='$username'AND `systemtype`='$system_type'";
            $result = $userdb->query($sql);

            if ($result->num_rows > 0) {
                # do nothing
            }else{
                $sql = "INSERT INTO `users_blocked`  (`username`, `systemtype`, `IP`)
                VALUES ('$username', '$system_type', '$uip')";
                
                $block_user = $userdb->query($sql);
                
                if ($block_user === true) {
                    $this->log_system_blocked_user($username, $system_type);
                    return "User has been blocked.  Thanks for trusting US....... Software Development Team";
                } else {
                    return false;
                }

            } 
        }
        
        return true;
        
        $userdb->close_db_connection();
    }
    
    protected function get_login_failed_trials_last_hour($username, $system_type)
    {
        $userdb = new ElmasriaDB;
        
        $logoutdate = date(' Y-m-d H:i:s ', strtotime('-1 hour ', strtotime(date('Y-m-d H:i:s '))));
        
        $sql = "SELECT count(`id`) as `trials` FROM `users_logs` WHERE `username`='$username' AND `systemtype`='$system_type' AND `action`='log in' AND `status`='Failed' AND `actionApproval`='Not Approved' AND `actionDateTime`>'$logoutdate'";
        
        $result      = $userdb->query($sql);
        $user_trials = mysqli_fetch_array($result);
        
        $trials = (int) $user_trials["trials"];
        
        return $trials;
        
        // $users_data = mysqli_fetch_array($result);
        $userdb->close_db_connection();
        
        
    }
    
    protected function validate_user_blocked($username, $system_type)
    {
        
        $userdb = new ElmasriaDB;
        
        $lower_case_username = $this->lower_case($username);
        
        $sql = "SELECT * FROM `users_blocked` WHERE `username`='$lower_case_username' AND `systemtype`='$system_type'";
        
        $result    = $userdb->query($sql);
        $user_data = mysqli_fetch_array($result);
        $userdb->close_db_connection();
        
        if ($user_data > 0) {
            
            $this->log_add_user_login_failed_blocked($lower_case_username, $system_type);
            return "Your Account has been blocked.!!! Please contact your Administrator. Thanks for trusting US....... Software Development Team";
            
        } else {
            
            return true;
        }
        
        $userdb->close_db_connection();
        
    }
    
    protected function validate_user_status($username, $system_type)
    {
        
        $userdb = new ElmasriaDB;
        
        $lower_case_username = $this->lower_case($username);
        
        $sql = "SELECT * FROM `users` WHERE `username`='$lower_case_username' AND `systemtype`='$system_type' AND `Status` ='A'";
        
        $result    = $userdb->query($sql);
        $user_data = mysqli_fetch_array($result);
        $userdb->close_db_connection();
        
        if ($user_data <= 0) {
            
            $this->log_add_user_login_failed_deactivated($lower_case_username, $system_type);
            return "Your Account has been deactivated.!!! Please contact your Sales Account Manager. Thanks for trusting US....... Software Development Team";
            
        } else {
            
            return true;
        }
        $userdb->close_db_connection();
        
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
    
    protected function validate_password($login_username, $login_password, $system_type)
    {
        
        $userdb = new ElmasriaDB;
        
        $password      = $this->encyript_password($login_password);
        $password_hash = $this->hashing_password($login_password);
          
        $lower_case_username = $this->lower_case($login_username);
        
        
        $sql = "SELECT * FROM `users` WHERE `username`='$lower_case_username' AND `password` ='$password' AND `secureH` ='$password_hash' AND `systemtype`='$system_type'";
        
        $result    = $userdb->query($sql);
        $user_data = mysqli_fetch_array($result);
        
        if ($user_data <= 0) {
            
            $this->log_add_user_login_failed_wrong_password($lower_case_username, $system_type);
            return "Incorrect password.!!! Please check your password, and if still the same problem please contact your Administrator. Thanks for trusting US....... Software Development Team";
            
        } else {
            
            return true;
        }
        
        
    }
  
    protected function user_login_new_token($username, $system_type)
    {
        $userdb = new ElmasriaDB;
        $lower_case_username = $this->lower_case($username);
        $token = $this->generate_token();
        $this->user_token=$token;
        $this->session_token = $token;
        
        $sql = "INSERT INTO `users_login_sessions` ( `username`, `systemtype`, `token`, `loginTme`) VALUES ('$lower_case_username', '$system_type', '$token', NOW())";
        $result    = $userdb->query($sql);
        if ($result === true) {  
            $this->session_token = $token;
            return true;
        } else {  
            return "New Token not Updated on DB.!!! please retry again and if still the same problem please contact your Administrator. Thanks for trusting US........ Software Development Team";
        }

    }

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

    protected function generate_token()
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet); // edited
        
        for ($i=0; $i < 10; $i++) {
            $token .= $codeAlphabet[random_int(0, $max-1)];
        }

        $new_token = md5($token);
        $new_token .= $token;
        $new_token .= sha1($token);
        // $new_token .= $token;
        
        return $new_token;
        
    }

    protected function get_user_profile_img(){

        $userdb = new ElmasriaDB;

        $sql = "SELECT `Profile_image` FROM `users_profiles` WHERE `user_id`='{$this->id}';";

        $result = $userdb->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $this->user_profile_img = $row["Profile_image"];
            }
          } else {
            $this->user_profile_img = "assets/images/User_profile_img/User-default.png";
          }

          $userdb->close_db_connection();
       

    }
    //////////////////////////////////////////
    //////////////////////////////////////////
    // Protected functions  end here from here
    //////////////////////////////////////////
    //////////////////////////////////////////
    
    
    /////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////
    // Start=>> Protected functions for system logs  start  here from here
    /////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////
    protected function log_user_logout_success($username, $system_type)
    {
        //get browser data
        $x               = new UserAgent();
        $y               = $x->getBrowser();
        $userAgent       = $y['userAgent'];
        $browserName     = $y['name'];
        $browserVersion  = $y['version'];
        $browserPlatform = $y['platform'];
        $browserPattern  = $y['pattern'];
        $uip             = $_SERVER['REMOTE_ADDR'];
        // end of getting brwoser data 
        
        $userdb = new ElmasriaDB;
        
        $lower_case_username = $this->lower_case($username);
        
        $sql = "INSERT INTO `users_logs` (`username`, `systemtype`, `userIP`, `action`,  `status`, `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$username', '$system_type', '$uip', 'log out',  'Success',  '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern')";
        
        $add_log = $userdb->query($sql);
        
        if ($add_log === true) {
            return true;
        } else {
            return false;
        }
        
        $userdb->close_db_connection();
        
    }
    protected function log_user_logout_success_end_other_session_token($username, $system_type)
    {
        //get browser data
        $x               = new UserAgent();
        $y               = $x->getBrowser();
        $userAgent       = $y['userAgent'];
        $browserName     = $y['name'];
        $browserVersion  = $y['version'];
        $browserPlatform = $y['platform'];
        $browserPattern  = $y['pattern'];
        $uip             = $_SERVER['REMOTE_ADDR'];
        // end of getting brwoser data 
        
        $userdb = new ElmasriaDB;
        
        $lower_case_username = $this->lower_case($username);
        
        $sql = "INSERT INTO `users_logs` (`username`, `systemtype`, `userIP`, `action`,  `status`, `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$username', '$system_type', '$uip', 'destroy other session token',  'Success',  '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern')";
        
        $add_log = $userdb->query($sql);
        
        if ($add_log === true) {
            return true;
        } else {
            return false;
        }
        
        $userdb->close_db_connection();
        
    }
    protected function log_unblock_user($username, $system_type)
    {
        //get browser data
        $x               = new UserAgent();
        $y               = $x->getBrowser();
        $userAgent       = $y['userAgent'];
        $browserName     = $y['name'];
        $browserVersion  = $y['version'];
        $browserPlatform = $y['platform'];
        $browserPattern  = $y['pattern'];
        $uip             = $_SERVER['REMOTE_ADDR'];
        // end of getting brwoser data 
        
        $userdb   = new ElmasriaDB;
        $actionBy = $this->username;
        
        $lower_case_username = $this->lower_case($username,$system_type);
        
        $sql = "INSERT INTO `users_logs` (`username`, `systemtype`, `userIP`, `action`, `description` , `status`, `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$actionBy', '$system_type', '$uip', 'Unblock User', 'Unblock User $lower_case_username', 'Success',  '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern');";
        $sql .= "INSERT INTO `users_logs` (`username`,`systemtype`, `userIP`, `action`, `description` , `status`, `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$lower_case_username', '$system_type', '$uip', 'User Unblocked', 'User Unblocked by $actionBy', 'Success',  '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern')";
        
        $add_log = $userdb->multi_query($sql);
        
        if ($add_log === true) {
            return true;
        } else {
            return false;
        }
        
        $userdb->close_db_connection();
    }
    protected function log_change_user_password($username, $system_type)
    {
        //get browser data
        $x               = new UserAgent();
        $y               = $x->getBrowser();
        $userAgent       = $y['userAgent'];
        $browserName     = $y['name'];
        $browserVersion  = $y['version'];
        $browserPlatform = $y['platform'];
        $browserPattern  = $y['pattern'];
        $uip             = $_SERVER['REMOTE_ADDR'];
        // end of getting brwoser data 
        
        $userdb = new ElmasriaDB;
        
        $lower_case_username = $this->lower_case($username);
        
        $sql = "INSERT INTO `users_logs` (`username`, `systemtype`,  `userIP`, `action`,  `status`, `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$lower_case_username', '$system_type',  '$uip', 'change password',  'Success',  '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern')";
        
        $add_log = $userdb->query($sql);
        
        if ($add_log === true) {
            return true;
        } else {
            return false;
        }
        
        $userdb->close_db_connection();
    }
    protected function log_reset_user_password($username, $system_type)
    {
        //get browser data
        $x               = new UserAgent();
        $y               = $x->getBrowser();
        $userAgent       = $y['userAgent'];
        $browserName     = $y['name'];
        $browserVersion  = $y['version'];
        $browserPlatform = $y['platform'];
        $browserPattern  = $y['pattern'];
        $uip             = $_SERVER['REMOTE_ADDR'];
        // end of getting brwoser data 
        
        $userdb              = new ElmasriaDB;
        $created_by          = $this->username;
        $lower_case_username = $this->lower_case($username);
        
        $sql = "INSERT INTO `users_logs` (`username`, `systemtype`, `userIP`, `action`, `description`,  `status`, `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$created_by', '$system_type', '$uip', 'Reset password', 'Rest Password for user : $lower_case_username', 'Success',  '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern');";
        $sql .= "INSERT INTO `users_logs` (`username`, `systemtype`, `userIP`, `action`, `description`,  `status`, `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$lower_case_username', '$system_type', '$uip', 'Password Reset', 'password reset by : $created_by', 'Success',  '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern')";
        
        $add_log = $userdb->multi_query($sql);
        
        if ($add_log === true) {
            return true;
        } else {
            return false;
        }
        
        $userdb->close_db_connection();
    }
    protected function log_change_user_group($username, $system_type, $newGroupId)
    {
        //get browser data
        $x               = new UserAgent();
        $y               = $x->getBrowser();
        $userAgent       = $y['userAgent'];
        $browserName     = $y['name'];
        $browserVersion  = $y['version'];
        $browserPlatform = $y['platform'];
        $browserPattern  = $y['pattern'];
        $uip             = $_SERVER['REMOTE_ADDR'];
        // end of getting brwoser data 
        
        $userdb              = new ElmasriaDB;
        $actionBy            = $this->username;
        $lower_case_username = $this->lower_case($username);
        
        $sql = "INSERT INTO `users_logs` (`username`,`systemtype`, `userIP`, `action`,  `status`, `description`, `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$actionBy', '$system_type', '$uip', 'Change User Group',  'Success', ' change User Group for user name  :$username to Group ID: newGroupId', '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern');";
        $sql .= "INSERT INTO `users_logs` (`username`,`systemtype`, `userIP`, `action`,  `status`, `description`, `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$lower_case_username', '$system_type', '$uip', 'User Group Changed',  'Success', ' change user group id to :$newGroupId by $actionBy ', '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern')";
        
        $add_log = $userdb->multi_query($sql);
        
        if ($add_log === true) {
            return true;
        } else {
            return false;
        }
        
        $userdb->close_db_connection();
        
    }
    protected function log_add_new_user_success($name, $username, $company_id, $group_id, $user_Type, $system_type)
    {
        //get browser data
        $x               = new UserAgent();
        $y               = $x->getBrowser();
        $userAgent       = $y['userAgent'];
        $browserName     = $y['name'];
        $browserVersion  = $y['version'];
        $browserPlatform = $y['platform'];
        $browserPattern  = $y['pattern'];
        $uip             = $_SERVER['REMOTE_ADDR'];
        // end of getting brwoser data 
        
        $userdb   = new ElmasriaDB;
        $actionBy = $this->username;
        
        $lower_case_username = $this->lower_case($username);
        
        $sql = "INSERT INTO `users_logs` (`username`,`systemtype`, `userIP`, `action`, `status`, `description`,   `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$lower_case_username', '$system_type', '$uip', ' User Created ',  'Success', 'the User has been Created by $actionBy', '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern');";
        
        $sql .= "INSERT INTO `users_logs` (`username`, `systemtype`, `userIP`, `action`, `status`, `description`,   `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$actionBy', '$system_type', '$uip', 'Create User ',  'Success', ' Create User:  $lower_case_username With Name: $name, Company ID: $company_id,  User Group ID: $group_id, User Type: $user_Type, and System Type: $system_type', '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern')";
        
        $add_log = $userdb->multi_query($sql);
        
        if ($add_log === true) {
            return true;
        } else {
            return "falied to log the process in the System logs";
        }
        
        $userdb->close_db_connection();
        
    }
    protected function log_system_blocked_user($username, $system_type)
    {
        //get browser data
        $x               = new UserAgent();
        $y               = $x->getBrowser();
        $userAgent       = $y['userAgent'];
        $browserName     = $y['name'];
        $browserVersion  = $y['version'];
        $browserPlatform = $y['platform'];
        $browserPattern  = $y['pattern'];
        $uip             = $_SERVER['REMOTE_ADDR'];
        // end of getting brwoser data 
        
        $userdb = new ElmasriaDB;
        
        $lower_case_username = $this->lower_case($username);
        
        $sql = "INSERT INTO `users_logs` (`username`, `systemtype`, `userIP`, `action`,  `status`, `description`, `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('System', '$system_type', '$uip', 'Block User',  'Success', ' System Block User :$username due to 5 trials of falied login', '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern');";
        $sql .= "INSERT INTO `users_logs` (`username`, `systemtype`, `userIP`, `action`,  `status`, `description`, `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$username', '$system_type', '$uip', 'User Blocked',  'Success', ' System Block User :$username due to 5 trials of falied login', '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern')";
        
        $add_log = $userdb->multi_query($sql);
        
        if ($add_log === true) {
            return true;
        } else {
            return false;
        }
        
        $userdb->close_db_connection();
        
    }
    protected function log_add_user_login_success($username, $system_type)
    {
        //get browser data
        $x               = new UserAgent();
        $y               = $x->getBrowser();
        $userAgent       = $y['userAgent'];
        $browserName     = $y['name'];
        $browserVersion  = $y['version'];
        $browserPlatform = $y['platform'];
        $browserPattern  = $y['pattern'];
        $uip             = $_SERVER['REMOTE_ADDR'];
        // end of getting brwoser data 
        
        $userdb = new ElmasriaDB;
        
        $lower_case_username = $this->lower_case($username, $system_type);
        
        $sql = "INSERT INTO `users_logs` (`username`,`systemtype`, `userIP`, `action`,  `status`, `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$username', '$system_type', '$uip', 'log in',  'Success',  '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern')";
        
        $add_log = $userdb->query($sql);
        
        if ($add_log === true) {
            return true;
        } else {
            return false;
        }
        
        $userdb->close_db_connection();
        
    }
    
    
    protected function log_add_user_login_failed_deactivated($username, $system_type)
    {
        //get browser data
        $x               = new UserAgent();
        $y               = $x->getBrowser();
        $userAgent       = $y['userAgent'];
        $browserName     = $y['name'];
        $browserVersion  = $y['version'];
        $browserPlatform = $y['platform'];
        $browserPattern  = $y['pattern'];
        $uip             = $_SERVER['REMOTE_ADDR'];
        // end of getting brwoser data 
        
        $userdb = new ElmasriaDB;
        
        $lower_case_username = $this->lower_case($username);
        
        $sql = "INSERT INTO `users_logs` (`username`, `systemtype`, `userIP`, `action`, `status`, `description`,   `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$username', '$system_type', '$uip', 'log in',  'Failed', 'Account has been deactivated', '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern')";
        
        $add_log = $userdb->query($sql);
        
        if ($add_log === true) {
            return true;
        } else {
            return false;
        }
        
        $userdb->close_db_connection();
        
    }
    
    protected function log_add_user_login_failed_blocked($username, $system_type)
    {
        //get browser data
        $x               = new UserAgent();
        $y               = $x->getBrowser();
        $userAgent       = $y['userAgent'];
        $browserName     = $y['name'];
        $browserVersion  = $y['version'];
        $browserPlatform = $y['platform'];
        $browserPattern  = $y['pattern'];
        $uip             = $_SERVER['REMOTE_ADDR'];
        // end of getting brwoser data 
        
        $userdb = new ElmasriaDB;
        
        $lower_case_username = $this->lower_case($username);
        
        $sql = "INSERT INTO `users_logs` (`username`, `systemtype`, `userIP`, `action`, `status`, `description`,   `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$username', '$system_type', '$uip', 'log in',  'Failed', 'Account has been blocked', '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern')";
        
        $add_log = $userdb->query($sql);
        
        if ($add_log === true) {
            return true;
        } else {
            return false;
        }
        
        $userdb->close_db_connection();
        
    }
    
    protected function log_add_user_login_failed_wrong_password($username, $system_type)
    {
        //get browser data
        $x               = new UserAgent();
        $y               = $x->getBrowser();
        $userAgent       = $y['userAgent'];
        $browserName     = $y['name'];
        $browserVersion  = $y['version'];
        $browserPlatform = $y['platform'];
        $browserPattern  = $y['pattern'];
        $uip             = $_SERVER['REMOTE_ADDR'];
        // end of getting brwoser data 
        
        $userdb = new ElmasriaDB;
        
        $lower_case_username = $this->lower_case($username);
        
        $sql = "INSERT INTO `users_logs` (`username`, `systemtype`, `userIP`, `action`, `status`, `description`,   `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$username', '$system_type', '$uip', 'log in',  'Failed', 'Wrong Password', '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern')";
        
        $add_log = $userdb->query($sql);
        
        if ($add_log === true) {
            return true;
        } else {
            return false;
        }
        
        $userdb->close_db_connection();
        
    }
    
    protected function log_activate_user($username, $system_type)
    {
        //get browser data
        $x               = new UserAgent();
        $y               = $x->getBrowser();
        $userAgent       = $y['userAgent'];
        $browserName     = $y['name'];
        $browserVersion  = $y['version'];
        $browserPlatform = $y['platform'];
        $browserPattern  = $y['pattern'];
        $uip             = $_SERVER['REMOTE_ADDR'];
        // end of getting brwoser data 
        
        $userdb   = new ElmasriaDB;
        $actionBy = $this->username;
        
        $lower_case_username = $this->lower_case($username);
        
        $sql = "INSERT INTO `users_logs` (`username`, `systemtype`, `userIP`, `action`, `status`, `description`,   `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$lower_case_username', '$system_type', '$uip', ' User Activated ',  'Success', 'the User has been activated by $actionBy', '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern');";
        
        $sql .= "INSERT INTO `users_logs` (`username`, `systemtype`, `userIP`, `action`, `status`, `description`,   `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$actionBy', '$system_type', '$uip', 'Activate User ',  'Success', ' Activated User  $lower_case_username', '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern')";
        
        $add_log = $userdb->multi_query($sql);
        
        if ($add_log === true) {
            return true;
        } else {
            return "falied to log the process in the System logs";
        }
        
        $userdb->close_db_connection();
        
    }
    
    protected function log_deactivate_user($username, $system_type)
    {
        //get browser data
        $x               = new UserAgent();
        $y               = $x->getBrowser();
        $userAgent       = $y['userAgent'];
        $browserName     = $y['name'];
        $browserVersion  = $y['version'];
        $browserPlatform = $y['platform'];
        $browserPattern  = $y['pattern'];
        $uip             = $_SERVER['REMOTE_ADDR'];
        // end of getting brwoser data 
        
        $userdb   = new ElmasriaDB;
        $actionBy = $this->username;
        
        $lower_case_username = $this->lower_case($username);
        
        $sql = "INSERT INTO `users_logs` (`username`, `systemtype`, `userIP`, `action`, `status`, `description`,   `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$lower_case_username', '$system_type', '$uip', ' user deactivated ',  'Success', 'the User has been deactivated by $actionBy', '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern');";
        
        $sql .= "INSERT INTO `users_logs` (`username`, `systemtype`, `userIP`, `action`, `status`, `description`,   `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`)
        VALUES ('$actionBy', '$system_type', '$uip', 'dectivate user ',  'Success', ' Deactivated User  $lower_case_username', '$userAgent', '$browserName', '$browserVersion', '$browserPlatform', '$browserPattern')";
        
        $add_log = $userdb->multi_query($sql);
        
        if ($add_log === true) {
            return true;
        } else {
            return "falied to log the process in the System logs";
        }
        
        $userdb->close_db_connection();
        
    }
    
    /////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////
    // End=>> Protected functions for system logs    here from here
    /////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////
    
    
} 