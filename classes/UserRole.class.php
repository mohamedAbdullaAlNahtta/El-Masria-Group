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
class UserRole
{

    public $id;
    public $name;
    public $description;
    public $status;
    public $creationDate;
    public $createdBy;


    public function get_user_role($userName){

        ////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////
        // getting user role name and other data //////////////
        ////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////
        // Developed by engineer Muhammad Abdulla El Nahtta   //
        // Cell Phone +20 1093001070                          //
        ////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////// 

        // new object for Arabicss db 
        $db   = new ArabicssDB;

        $sql  ="SELECT `id`, `name`, `description`, `status`, `creationDate`, `createdBy`";
        $sql .="FROM `user_role` WHERE `id`=";
        $sql .="(SELECT `user_role_id` FROM `users` ";
        $sql .="WHERE `username`='{$userName}' AND `systemtype`='web')";

        $queryResult  = $db->query($sql);

        while($row = $queryResult->fetch_assoc()) {
            $this->id                = $row["id"];
            $this->name              = $row["name"];
            $this->description       = $row["description"];
            $this->status            = $row["status"];
            $this->creationDate      = $row["creationDate"];
            $this->createdBy         = $row["createdBy"];
        }
        return $this->id;


        $db->close_db_connection();

    }

    public function get_module_prev($userName, $moduleId){
       
        $this->get_user_role($userName);
        ////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////
        // getting user role module previlege     //////////////
        ////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////
        // Developed by engineer Muhammad Abdulla El Nahtta   //
        // Cell Phone +20 1093001070                          //
        ////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////// 

        // new object for Arabicss db 
        $db   = new ArabicssDB;

        $sql  ="SELECT `access_type` FROM `user_role_module_menu` WHERE `module_menu_id` ='{$moduleId}'";

        $queryResult  = $db->query($sql);
        
        if ($queryResult->num_rows > 0) {
            
            while($row = $queryResult->fetch_assoc()) {
                $access_type    = $row["access_type"];
            }
            return $access_type;

        } else {
            $access_type        ="Forbidden";

            return $access_type;
        }

        $db->close_db_connection();
        
    }





    
}

?>