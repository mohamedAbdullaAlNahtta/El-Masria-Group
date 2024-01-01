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

    public function get_reg_data($pin_number){
        $user = new Client();
        $National_ID = $user->decrypt_pin_num($pin_number);

        $db   = new ArabicssDB;
        $sql  = "SELECT * FROM `client_user` WHERE `national_ID`='$National_ID';";
        $result = $db ->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $client_id = $row["id"];
                $client_email = $row["email"];
                $client_full_name = $row["full_name"];
            }
        }
        $reg_data ['client_id']=$client_id;
        $reg_data ['client_email']=$client_email;
        $reg_data ['client_full_name']=$client_full_name;

        return $reg_data;

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

    public function get_reg_status($pin_number){
        $reg_status ='';
        $db   = new ArabicssDB;
        $sql = "SELECT `reg_status` FROM `client_user` WHERE `client_user`.`pin_number`='$pin_number'";
        $result = $db ->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {  
                $reg_status = $row["reg_status"];
            }
        }
        return $reg_status;

    }
    public function set_reg_status($pin_number){
        $reg_status ='';
        $db   = new ArabicssDB;
        $sql = " UPDATE `client_user` set `reg_status`='in progress' WHERE `client_user`.`pin_number`='$pin_number'";
        $result = $db ->query($sql);
        return $reg_status;

    }

    public function encrypt_pin_num($pin_number){
        // Store a string into the variable which
        // needs to be encrypted
        $simple_string = $pin_number;

        // Store the cipher method
        $ciphering = "AES-128-CTR";
        
        // Use OpenSSl Encryption method
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        
        // Non-NULL Initialization Vector for encryption
        $encryption_iv = '1234567891011121';
        
        // Store the encryption key
        $encryption_key = "GeeksforGeeks";
        
        // Use openssl_encrypt() function to encrypt the data
        $encryption = openssl_encrypt($simple_string, $ciphering,
            $encryption_key, $options, $encryption_iv);

        return urlencode($encryption);

    }
    public function decrypt_pin_num($pin_number){

        $encryption = urldecode($pin_number);

         // Store the cipher method
         $ciphering = "AES-128-CTR";
        
         // Use OpenSSl Encryption method
         $iv_length = openssl_cipher_iv_length($ciphering);
         $options = 0;
         
         // Non-NULL Initialization Vector for encryption
         $encryption_iv = '1234567891011121';
         
         // Store the encryption key
         $encryption_key = "GeeksforGeeks";

        // Decryption process
        $decryption = openssl_decrypt($encryption, $ciphering,
        $encryption_key, $options, $encryption_iv);

        return $decryption;
        
    }

}

?>