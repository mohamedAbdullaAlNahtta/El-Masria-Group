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



class Client{

    public function get_unregistered_client()
    {
        $db   = new ArabicssDB;
        $sql  = "SELECT * FROM `client_user` WHERE `reg_status`='not registered'";
        $result = $db ->query($sql);
        return $result;
    }

    public function create_user($client_id, $email, $full_name ){

        $user_name = $email;
        $name = $full_name;
        $user_role_id = '6';
        $user_status = 'D';

        $db   = new ArabicssDB;
        $sql  = "INSERT INTO `users` (`userId`, `name`, `username`, `secureH`, `password`, 
        `companyId`, `user_role_id`, `userType`, `systemtype`, `gui_language`, `gui_theme`, `Status`, 
        `creationDate`, `createdBy`, `client_id`)
        VALUES (NULL, '$name ', '$user_name', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8',
         '5f4dcc3b5aa765d61d8327deb882cf99', '1', '$user_role_id', 'C', 'web', '1', '1', '$user_status', now(),
          'System', '$client_id');";
        $result = $db ->query($sql);
        return $result;

    }

    public function set_new_password($username, $new_password){

        $secureH = sha1($new_password);
        $pass = md5($new_password);
        $db   = new ArabicssDB;
        $sql = "UPDATE `users` SET `secureH` = '$secureH' WHERE `users`.`username` = '$username'; 
        UPDATE `users` SET `password` = '$pass' WHERE `users`.`username` = '$username'; ";
        $result = $db ->query($sql);
        return $result;

    } 

    public function acivate_user($username){
        $db   = new ArabicssDB;
        $sql = "UPDATE `users` SET `users`.`Status` = 'A' WHERE `users`.`username` = '$username';";
        $result = $db ->query($sql);
        return $result;

    }

}

?>