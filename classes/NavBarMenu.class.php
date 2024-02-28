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


class NavBarMenu
{
  ////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////
  // Note Maximum level of tabs is 3 levels 0, 1, and 2///
  ////////////////////////////////////////////////////////
  // Developed by engineer Muhammad Abdulla El Nahtta   //
  // Cell Phone +20 109 300 1070                        //
  ////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////// 
 

    public function get_html_nav_bar($user_role_mod)
    {

      ////////////////////////////////////////////////////////
      ////////////////////////////////////////////////////////
      // this function to get the html navgation bar only ////
      // the authorized tabs                               ///
      ////////////////////////////////////////////////////////
      // Developed by engineer Muhammad Abdulla El Nahtta   //
      // Cell Phone +20 109 300 1070                        //
      ////////////////////////////////////////////////////////
      //////////////////////////////////////////////////////// 

      $first_lavel = $this->get_1st_level_menu($user_role_mod);

      $tabCount = count($first_lavel['id']);

      $nav_trial  = "";

      for ($i=0; $i <$tabCount ; $i++) { 
            if ($first_lavel['HasChild'][$i]===false) {
                  // checking if there is sub menu for the first level tabs
                  $nav_trial .= $this->html_menu_tab($first_lavel['id'][$i]);
            } elseif($first_lavel['HasChild'][$i]===true) {

                  $nav_trial .="<li>";
                  $nav_trial .= $this->html_Parent_tab($first_lavel['id'][$i]);

                  // going through 2nd level tabs 
                  $second_lavel = $this->get_2nd_level_menu($first_lavel['id'][$i],$user_role_mod);
                  $secondLevelTabCount = count($second_lavel['id']);
                  $nav_trial .="<ul>";
                  for ($x=0; $x <$secondLevelTabCount; $x++) { 
                            
                            if ($second_lavel['HasChild'][$x]===false) {
                                    $nav_trial .= $this->html_menu_tab($second_lavel['id'][$x],$user_role_mod);
                            } elseif($second_lavel['HasChild'][$x]===true) {
                                    # code...
                                    $nav_trial .= $this->html_parent_menu_child_tab_final($second_lavel['id'][$x],$user_role_mod);
                            }
                             
                  }
                  $nav_trial .="</ul>"; 
                  $nav_trial .="</li>";
            }
      }

      // $nav_trial .= "</ul>";

      return $nav_trial;
    }

    public function get_first_module_page($user_role_mo)
    {
      $db = new ElmasriaDB;
      $sql ='SELECT `link` FROM `module_menu` 
      WHERE `id` IN (SELECT `module_menu_id` FROM `user_role_module_menu` 
      WHERE `user_role_id`=(SELECT `users`.`user_role_id` FROM `users` WHERE `username`="'.$user_role_mo.'" )) 
      AND `level`= (SELECT MAX(`level`) FROM (SELECT * FROM `module_menu`
      WHERE `id` IN (SELECT `module_menu_id` FROM `user_role_module_menu` 
      WHERE`user_role_id`=(SELECT `users`.`user_role_id` FROM `users` WHERE `username`="'.$user_role_mo.'" ))) as `sub1`) limit 1';
      $result = $db->query($sql);
      while($row = $result->fetch_assoc()) {
        $default_page= $row["link"];
      }
      $module = substr($default_page,13);
      if(strpos($module,"&")!==False){
        $positionof = strpos($module,"&");
        $module = substr($module,0,$positionof);
        return $module;
      }
      return $module;
      $db->close_db_connection();

    }
    public function check_module_authorization($user_role_mo, $modulename)
    {
      $modulelink ="index?module=".$modulename;
      $db = new ElmasriaDB;
      $sql ='SELECT * FROM `user_role_module_menu` WHERE `user_role_id`=(SELECT `users`.`user_role_id` FROM `users` WHERE `username`="'.$user_role_mo.'") AND `module_menu_id`=(SELECT `id` FROM `module_menu` WHERE `link`LIKE"'.$modulelink.'%"LIMIT 1)';
      $result = $db->query($sql);

      if ($result->num_rows > 0) {
        return true;
      } else {
        return false;
      }

      $db->close_db_connection();

    }
 
    
    private function get_1st_level_menu($user_role_mod)
    {
      ////////////////////////////////////////////////////////
      ////////////////////////////////////////////////////////
      // getting the first level tabs and menus            ///
      ////////////////////////////////////////////////////////
      // Developed by engineer Muhammad Abdulla El Nahtta   //
      // Cell Phone +20 109 300 1070                        //
      ////////////////////////////////////////////////////////
      ////////////////////////////////////////////////////////
      $root         = $this->get_menu("",false,"",true,"","0",$user_role_mod);
      $id           = $root['navbar']['id'];
      $Child_Count     = $root['navbar']['Child_Count'];

      $recordCount  = $root['resCount'];
      
      for ($i=0; $i < $recordCount ; $i++) { 
        if ($Child_Count[$i]>0) 
              $HasChild[$i]    = true;
        else  $HasChild[$i]    = false;
      }

      $menu     = array(
        "id"          => $id,
        "HasChild"    => $HasChild,
      );
      return $menu;
    }  


    private function get_2nd_level_menu($parent,$user_role_mod)
    {
      $root         = $this->get_menu("",$parent,"",true,"","1",$user_role_mod);
      $id           = $root['navbar']['id'];
      $Child_Count     = $root['navbar']['Child_Count'];

      $recordCount  = $root['resCount'];
      
      for ($i=0; $i < $recordCount ; $i++) { 
        if ($Child_Count[$i]>0) 
              $HasChild[$i]    = true;
        else  $HasChild[$i]    = false;
      }

      $menu     = array(
        "id"          => $id,
        "HasChild"    => $HasChild,
      );
      return $menu;
      
    } 
    
   
    private function html_menu_tab($tabName)
    {
      $menutab         = $this->get_menu($tabName)['navbar'];
      $navgationBar    =  "<li><a href='".$menutab["link"][0]."' ><i class='".$menutab["icon"][0]."'></i> <span class='hide-menu'>".$GLOBALS['lang'][$menutab["name"][0]]."</span></a></li>";
      return $navgationBar;

    }

    private function html_parent_menu_child_tab_final($parentName, $user_role_mod)
    {
      $htmlNav     = "<li>";
      $parentTree  = $this->get_menu($parentName) ['navbar'];
      $parentHtml  = $this->html_Parent_tab($parentName);
      $htmlNav    .= $parentHtml; 

      $childTree  = $this->get_menu("",$parentName,"","","","",$user_role_mod) ['navbar'];
      $childHtml  = $this->html_child_menu($childTree);

      $htmlNav    .= $childHtml;
      $htmlNav    .= "</li>"; 

      return $htmlNav;

    }

    private function html_child_menu($tabArray)
    {
      ////////////////////////////////////////////////////////
      ////////////////////////////////////////////////////////
      ////////////////////                    ////////////////
      /////////////////   function description  //////////////
      /////////////////                         //////////////
      // this function genrate html based on the parameters //
      // which you put the count of tabs and the array which//
      // has the data itself and return a string which      //
      // contain the html <li> menu                         //
      ////////////////////////////////////////////////////////
      // Developed by engineer Muhammad Abdulla El Nahtta   //
      // Cell Phone +20 1093001070                          //
      ////////////////////////////////////////////////////////
      //////////////////////////////////////////////////////// 
      $tabCount    = count($tabArray[array_keys($tabArray)[0]]);
      $navgationBar='<ul>';
      for ($i=0; $i < $tabCount ; $i++) {
        
        $navgationBar .= "<li><a href='".$tabArray["link"][$i]."' >".$GLOBALS['lang'][$tabArray["name"][$i]]."</a></li>";
        
      }
      $navgationBar .="</ul>";

      return $navgationBar;
      
    }
    
    private function html_Parent_tab($parentName)
    {
      ////////////////////////////////////////////////////////
      ////////////////////////////////////////////////////////
      ////////////////////                    ////////////////
      /////////////////   function description  //////////////
      /////////////////                         //////////////
      // this function genrate html based on the parameters //
      // which you put the count of tabs and the array which//
      // has the data itself and return a string which      //
      // contain the html <a> menu tab                      //
      ////////////////////////////////////////////////////////
      // Developed by engineer Muhammad Abdulla El Nahtta   //
      // Cell Phone +20 1093001070                          //
      ////////////////////////////////////////////////////////
      //////////////////////////////////////////////////////// 
      $tabArray      = $this->get_menu($parentName);
      $navgationBar  ="<a class='has-arrow' href='#' aria-expanded='true'>";        
      $navgationBar .= "<span class='hide-menu'><i class='".$tabArray["navbar"]["icon"][0]."'></i>".$GLOBALS['lang'][$tabArray["navbar"]["name"][0]]."</span>";
      $navgationBar .="</a>";
  
      return $navgationBar;
      
    }

    private function get_menu($get_id="", $get_id_parent="", $get_type="", $get_HasChild="", $get_link="", $get_level="", $get_user_role="")
    {
        ////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////
        ////////////////////                    ////////////////
        /////////////////   function description  //////////////
        /////////////////                         //////////////
        // this function genrate a dynamic query based on the //
        //parameters which you put and return an array with   //
        // the query itself, query result, row count, also    //
        // the returned data into a multi dimention array     //
        // result
        // 1- sql_query the dynamic genrated sql quer itself 
        // 2- queryResult  the reslut in case there is sql error
        // 3- resCount the row count
        // 4- navbar the row data itself
        ////////////////////////////////////////////////////////
        // Developed by engineer Muhammad Abdulla El Nahtta   //
        // Cell Phone +20 1093001070                          //
        ////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////// 

        // new object for Arabicss db 
        $db = new ElmasriaDB;
        //php Creating a dynamic search query with PHP and MySQL
        $whereArr = array();
        if ($get_id != "")
        {
        $whereArr[] = "`id` = '{$get_id}'";
        }

        if ($get_user_role != "")
        {
        $whereArr[] = "`id` IN (SELECT `module_menu_id` FROM `user_role_module_menu` WHERE `user_role_id`={$get_user_role} )";
        }

        if($get_id_parent === true){
          $whereArr[] = "`id_parent` IS NOT NULL";
        }elseif ($get_id_parent === false ){
          $whereArr[] = "`id_parent` IS NULL";
        }elseif ($get_id_parent !== "" && $get_id_parent !== true && $get_id_parent !== false){
          $whereArr[] = "`id_parent` = '{$get_id_parent}'";
        }

        if ($get_type != "")
        {
        $whereArr[] = "`type` = '{$get_type}'";
        }
        if ($get_HasChild != "" && $get_HasChild != "true") {
          $whereArr[] = "`HasChild` = '{$get_HasChild}'";
        }
        
        if ($get_level !== "") {
          $whereArr[] = "`level` = '{$get_level}'";
        }

        if($get_link === true){
          $whereArr[] = "`link` IS NOT NULL";
         }elseif($get_link === false){
          $whereArr[] = "`link` IS NULL";
         }elseif($get_link !== "" && $get_link !== true && $get_link !== false){
          $whereArr[] = "`link` = '{$get_link}'";
         } 


        // escaping the WHERE clause in case no parameter entered 
        // Array to string for WHERE clause  
        if ($whereArr == null) {
          $whereStr = "";
        } else {
          $whereStr = "WHERE " . implode(" AND ", $whereArr);
        }

        if ($get_HasChild != "") {
          // getting how many child per id if the value passed
          $menu_sql_query ="SELECT * FROM (SELECT m1.*, 
          (SELECT COUNT(*) FROM `module_menu` `m2` WHERE `m2`.`id_Parent`=`m1`.`id`)
          AS `HasChild` FROM `module_menu` `m1`) AS `testy` {$whereStr} ORDER BY `order_no`;";

        } else {
          // getting only the main 
          $menu_sql_query ="SELECT * FROM `module_menu` {$whereStr} ORDER BY `order_no`;";

        }

        // genrate mysql query
        $queryResult = $db->query($menu_sql_query);

        while($row = $queryResult->fetch_assoc()) {
            $id[]             = $row["id"];
            $id_parent[]      = $row["id_parent"];
            $icon[]           = $row["icon"];
            $link[]           = $row["link"];
            $name[]           = $row["name"];
            $type[]           = $row["type"];
            $order_no[]       = $row["order_no"];
            $level[]          = $row["level"];
          if($get_HasChild != ""){
            $Child_Count[]  = $row["HasChild"];
          }else{
            $Child_Count[]  = "";
          }
        }
        
        $navBar= array(
          "id"           =>   $id, 
          "id_parent"    =>   $id_parent, 
          "icon"         =>   $icon,
          "link"         =>   $link, 
          "name"         =>   $name, 
          "type"         =>   $type, 
          "order_no"     =>   $order_no, 
          "level"        =>   $level, 
          "Child_Count"  =>   $Child_Count
        );
          
          // rest variables to avoid confilct 
          $id[]           = '';
          $id_parent[]    = '';
          $icon[]         = '';
          $link[]         = '';
          $name[]         = '';
          $type[]         = '';
          $order_no[]     = '';
          $level[]        = '';
          $Child_Count[]  = '';


        $resCount = $queryResult->num_rows;

        $query_data = array(
          "sql_query"     =>   $menu_sql_query, 
          "queryResult"   =>   $queryResult, 
          "resCount"      =>   $resCount, 
          "navbar"        =>   $navBar
        );
        return $query_data;

        $db->close_db_connection();


    }



}


?>