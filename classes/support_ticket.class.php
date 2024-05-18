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

class support_ticket{

    public function get_all_tickets()
    {
        $userdb = new ElmasriaDB;
        
        $sql = "SELECT * FROM `support_tickets`";
        
        $result = $userdb->query($sql);
        return $result;
        $userdb->close_db_connection();  
        
    }

    public function get_client_tickets($client_id)
    {
        $userdb = new ElmasriaDB;
        
        $sql = "SELECT * FROM `support_tickets` WHERE `client_id`={$client_id} ";
        
        $result = $userdb->query($sql);
        return $result;
        $userdb->close_db_connection();  
        
    }

    public function create_ticket($client_id)
    {
        $userdb = new ElmasriaDB;
        
        $sql = "INSERT INTO `support_tickets` (`id`, `ticket_type`, `client_id`, `user_input`, 
        `Project_Name`, `unit_number`, `building_name`, `ticket_status`, 
        `support_input`, `created_by`, `creation_date`, `contact_number`, `last_update_date`) 
        VALUES (NULL, 'Request', '1', 'kindly i need your advice', 'Zinab failed to absorb ',
         '010930010', 'El3ezba el'3arbya', 'open ', '', 'Muhammad.elnahtta', 
         '2024-05-15 11:00:09.000000', '01093001070', '2024-05-15 11:00:09.000000');";
        
        $result = $userdb->query($sql);
        return $result;
        $userdb->close_db_connection();  
        
    }

    public function update_ticket($ticket_id)
    {
        $userdb = new ElmasriaDB;
        
        $sql = "UPDATE `support_tickets` SET `ticket_type` = 'Complaint' WHERE `support_tickets`.`id` = {$ticket_id};";
        
        $result = $userdb->query($sql);
        return $result;
        $userdb->close_db_connection();  
        
    }

    public function get_client_ticket_status() {

        $tstatus= array("open", "canceled" );
        return $tstatus;
    }

    public function get_all_ticket_status() {

        $tstatus= array("open", "canceled", "closed", "handled");
        return $tstatus;
    }

}

?>