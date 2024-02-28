<?php
error_reporting(0); 
$searcValue = $_GET['value'];
$searchTerm = $_GET['username'];
$searchLanguage = $_GET['lang'];

$root_path= $_SERVER['DOCUMENT_ROOT'];
if($searchLanguage==="en"){
    $Lang_path = $root_path."/AMCC/lang/en.php";
}else{
    $Lang_path = $root_path."/AMCC/lang/ar.php";
}
require($Lang_path);


// Database configuration 
$arbicssDbClassPath = $root_path."/AMCC/classes/ElmasriaDB.class.php";
require_once($arbicssDbClassPath);

$userdb = new ElmasriaDB;
$searcValue  = $userdb->escape_string($searcValue);
$searchTerm  = $userdb->escape_string($searchTerm);
$searchLanguage  = $userdb->escape_string($searchLanguage);

if($searchLanguage==="ar"){


    // seach for arabic value function 
    function dosearchfor($value, $lang){
            $langNew=array();
            $findme   = $value;
            foreach ($lang as $key => $value) {
            $pos = strpos($value, $findme);
                if ($pos !== false) {
                    $langNew[]=$key;
                } 
            }
            if (count($langNew)>=1){
                $langNewIndex="'";
                $langNewIndex .= implode("', '",$langNew);
                return $langNewIndex.="'";
            }else{
                $langNewIndex="";
            }    
    }
    $arabicsSearchValue = dosearchfor($searcValue , $lang);

    $sql = "SELECT * FROM 
    (SELECT `id`, `icon`, `link` FROM `module_menu` WHERE `type`='tab' AND `id` IN 
    (SELECT `module_menu_id` FROM `user_role_module_menu` WHERE `user_role_id`=
    (SELECT `user_role_id` FROM `users` WHERE `username`='{$searchTerm}'))) as `firstLayer` WHERE `id` IN({$arabicsSearchValue })";

}else{
    $sql = "SELECT * FROM 
    (SELECT `id`, `icon`, `link` FROM `module_menu` WHERE `type`='tab' AND `id` IN 
    (SELECT `module_menu_id` FROM `user_role_module_menu` WHERE `user_role_id`=
    (SELECT `user_role_id` FROM `users` WHERE `username`='{$searchTerm}'))) as `firstLayer` WHERE `id` LIKE '%{$searcValue}%'";

}


$result = $userdb->query($sql);


$hint='';
if ($result->num_rows > 0) {
	
  while($row = $result->fetch_assoc()) {
   $hint.= '<li class="ui-menu-item"><div id="ui-id-17" tabindex="-1" class="ui-menu-item-wrapper"><a href="'.$row['link'].'"><i class="'.$row['icon'].'"></i> '.$lang[$row['id']].'</a></div></li>';
} 

}else{
	$hint.= '<li class="ui-menu-item"><div id="ui-id-17" tabindex="-1" class="ui-menu-item-wrapper"><i class="fa fa-question-circle"></i> '.$lang['No Suggestion'].'</div></li>';

}

$response=$hint;
//output the response
echo $response;


?>