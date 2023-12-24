<?php
/////////////////////////////////////////////////////////////////////////////////
// Powered by ENG Muhammad Abdullah El Nahtta 
// This code created from scratch by Powered by ENG Muhammad Abdullah El Nahtta
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
// This code created from scratch by Powered by ENG Muhammad Abdullah El Nahtta
// Powered by ENG Muhammad Abdullah El Nahtta 
/////////////////////////////////////////////////////////////////////////////////
spl_autoload_register("myAutoLoader");
function myAutoLoader($className){
    
    $path = "../classes/";
    $extensiontype = ".class.php";
    $fullpath = $path . $className . $extensiontype;

	include $fullpath;
}
session_start();
error_reporting(0);
$user = $_SESSION['user'];

$language =$_SESSION['language'];
$theme = $_SESSION['theme'];

$user->destroy_user_token($user->username, 'web', $user->session_token);

?>
<!DOCTYPE html>
<html>
<head>
	<title> Secure Login Process </title>
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <?php 
if ($language==='ar') {
    include 'token.lang/token.lang.ar.php';
  } else {
    include 'token.lang/token.lang.en.php';
  }

if ($theme==='dark') {
?>
      <!--alerts CSS -->
      <link id="csssweetalert" href="../thems/dark/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
<?php
  } else {
?>
        <!--alerts CSS -->
        <link id="csssweetalert" href="../thems/white/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
<?php
  }
?>
</head>
<body>
<?php 
$_SESSION['user']="";
//destroy session
session_destroy();
session_unset();


?>

<div class="sweet-overlay" tabindex="-1" style="opacity: 1.04; display: block;"></div>
<div
    class="sweet-alert showSweetAlert visible"
    data-custom-class=""
    data-has-cancel-button="false"
    data-has-confirm-button="true"
    data-allow-outside-click="false"
    data-has-done-function="false"
    data-animation="pop"
    data-timer="null"
    id="cancel-login"
    style="display: block; margin-top: -175px;
    -webkit-box-shadow: 0px 0px 15px 2px rgb(22, 100, 158);
    box-shadow: 0px 0px 15px 2px rgb(22, 100, 158);
    -moz-box-shadow: 0px 0px 15px 2px rgb(22, 100, 158);
    border: 1px solid #16649e"
>
    <div class="sa-icon sa-error animateErrorIcon" style="display: block;">
        <span class="sa-x-mark animateXMark">
            <span class="sa-line sa-left"></span>
            <span class="sa-line sa-right"></span>
        </span>
    </div>


    <h2><?php echo $lang['Cancel']; ?></h2>
    <p style="display: block;"><?php echo $lang['logging in Process Ended'];?></p>
    <div class="sa-error-container">
        <div class="icon">!</div>
        <p>Not valid!</p>
    </div>
    <div class="sa-button-container">
        <button class="cancel" tabindex="2" style="display: none; box-shadow: none;"><?php echo $lang['Cancel']; ?></button>
        <div class="sa-confirm-button-container">
            <form action="<?php if($language==='ar'){echo'../login-ar?theme='.$theme;}else{echo'../login?theme='.$theme;} ?>"  method="post">  
	            <button onclick="window.location.replace(<?php if($language==='ar'){echo'../login-ar?theme='.$theme;}else{echo'../login?theme='.$theme;} ?>);" class="confirm" tabindex="1" style="display: inline-block; background-color: rgb(3, 38, 3); box-shadow: rgba(3, 38, 3, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset;"><?php echo $lang['Thanks']; ?></button>
	        </form>    
            <div class="la-ball-fall">
            </div>
        </div>
    </div>
</div>

<!-- reset form values after refresh  -->
<script type="text/javascript">
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

</body>

</html>