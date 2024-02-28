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

class UserGroup 
{
    public $username;
    public $id;
    public $name;
    
    
    
    public function get_pages()
    {
        
        $userGroupId = $this->id;
        $usergroup   = new ElmasriaDB;
        
        $sql = "SELECT * FROM `systempages` WHERE `pageId` IN(SELECT `pageId` FROM `usergroup` WHERE `groupId`=$userGroupId)";
        
        $result = $usergroup->query($sql);
        
        $usergroup->close_db_connection();
        return $result;
        
        
    }
    
    public function get_page_premession($pageId)
    {
        
        $userGroupId = $this->id;
        $usergroup   = new ElmasriaDB;
        
        $sql = "SELECT `read`, `write` FROM `usergroup` WHERE `groupId`=$userGroupId and `pageId`=$pageId";
        
        $result = $usergroup->query($sql);
        
        $usergroup->close_db_connection();
        return $result;
        
        
    }
    
    public function add_new_group($groupName, $pageId, $read, $Write)
    {
        
        $group         = new ElmasriaDB;
        $last_group_id = $this->get_last_group_id();
        $new_group_id  = $last_group_id + 1;
        
        $sql = "INSERT INTO `usergroup` (`groupId`, `groupName`, `pageId`, `read`, `write`)
        VALUES ('$new_group_id','$groupName', $pageId, '$read', '$Write')";
        
        $add_group = $group->query($sql);
        
        if ($add_group === true) {
            return "New Group Added Success fully.  Thanks for trusting US....... Software Development Team";
        } else {
            return false;
        }
        
        $group->close_db_connection();
        
    }
    
    public function add_group_page($group_id, $groupName, $pageId, $read, $Write)
    {
        
        $group = new ElmasriaDB;
        
        $sql = "INSERT INTO `usergroup` (`groupId`, `groupName`, `pageId`, `read`, `write`)
        VALUES ('$group_id','$groupName', $pageId, '$read', '$Write')";
        
        $add_group = $group->query($sql);
        
        if ($add_group === true) {
            return true;
        } else {
            return false;
        }
        
        $group->close_db_connection();
        
    }
    
    public function get_last_group_id()
    {
        # Get last group id as it's unique
        $usergroup = new ElmasriaDB;
        
        $sql = "SELECT MAX(`groupId`)as last_group_id FROM `usergroup` ";
        
        $result = $usergroup->query($sql);
        
        while ($row = $result->fetch_array()) {
            $max_id = (int) $row["last_group_id"];
        }
        
        $usergroup->close_db_connection();
        return $max_id;
    }
    
    
    
}
