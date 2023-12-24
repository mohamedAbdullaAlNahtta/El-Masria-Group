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
//nitiate session
session_start();
error_reporting(0);

$language =$_SESSION['language'];
$theme = $_SESSION['theme'];

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
<div class="sweet-overlay" tabindex="-1" style="opacity: 1.04; display: block;"></div>
<div
    class="sweet-alert showSweetAlert visible"
    data-custom-class=""
    data-has-cancel-button="true"
    data-has-confirm-button="true"
    data-allow-outside-click="false"
    data-has-done-function="true"
    data-animation="pop"
    data-timer="null"
    id="Choose"
    style="display: block; margin-top: -195px;width: 550px;
    -webkit-box-shadow: 0px 0px 15px 2px rgb(22, 100, 158);
    box-shadow: 0px 0px 15px 2px rgb(22, 100, 158);
    -moz-box-shadow: 0px 0px 15px 2px rgb(22, 100, 158);
    border: 1px solid #16649e;"
>
    <div class="sa-icon sa-warning pulseWarning" style="display: block;">
        <span class="sa-body pulseWarningIns"></span>
        <span class="sa-dot pulseWarningIns"></span>
    </div>

    <h2><?php echo $lang['Are you sure?']; ?></h2>
    <p style="display: block;"><?php echo $lang['Your Account Already Logged In from elsewhere With a different Token.!!!']; ?> </p>
    <p style="display: block;"><?php echo $lang['Thanks for trusting US!']; ?></p>
    <p style="display: block;"><?php echo $lang['Software Development Team!']; ?></p>
    <fieldset>
        <input type="text" tabindex="3" placeholder="" />
        <div class="sa-input-error"></div>
    </fieldset>
    <div class="sa-button-container">
        <button id="No-cancel-Login" onclick="NoCancelLogin();" class="cancel" tabindex="2" style="display: inline-block;color: #000;"><?php echo $lang['No, cancel Login!']; ?></button>
        <div class="sa-confirm-button-container">
            <button id="Yes-Login-here-please" onclick="YesLoginHerePlease();" class="confirm" tabindex="1" style="display: inline-block; background-color: rgb(221, 107, 85); box-shadow: rgba(221, 107, 85, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset;">
            <?php echo $lang['Yes, Login here please!'];?>
            </button>
            <div class="la-ball-fall">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</div>
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
    style="display: none; margin-top: -175px;
    -webkit-box-shadow: 0px 0px 15px 2px rgb(22, 100, 158);
    box-shadow: 0px 0px 15px 2px rgb(22, 100, 158);
    -moz-box-shadow: 0px 0px 15px 2px rgb(22, 100, 158);
    border: 1px solid #16649e;"
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
            <form action="../logout"  method="post">  
	            <button class="confirm" tabindex="1" style="display: inline-block; background-color: rgb(3, 38, 3); box-shadow: rgba(3, 38, 3, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset;"><?php echo $lang['Thanks']; ?></button>
	        </form>    
            <div class="la-ball-fall">
            </div>
        </div>
    </div>
</div>
<div
    class="sweet-alert showSweetAlert visible"
    data-custom-class=""
    data-has-cancel-button="false"
    data-has-confirm-button="true"
    data-allow-outside-click="false"
    data-has-done-function="true"
    data-animation="pop"
    data-timer="null"
    id="procced-login"
    style="display: none; margin-top: -175px;
    -webkit-box-shadow: 0px 0px 15px 2px rgb(22, 100, 158);
    box-shadow: 0px 0px 15px 2px rgb(22, 100, 158);
    -moz-box-shadow: 0px 0px 15px 2px rgb(22, 100, 158);
    border: 1px solid #16649e;"
>
 
    <div class="sa-icon sa-success animate" style="display: block;">
        <span class="sa-line sa-tip animateSuccessTip"></span>
        <span class="sa-line sa-long animateSuccessLong"></span>
    </div>
    <h2><?php echo $lang['Logging in'];?></h2>
    <p style="display: block;"><?php echo $lang['Login process looks Good'];?></p>
    <div class="sa-button-container">
        <div class="sa-confirm-button-container">
            <form action="token.login.process"  method="post">  
	            <button class="confirm" tabindex="1" style="display: inline-block; background-color: rgb(3, 38, 3); box-shadow: rgba(3, 38, 3, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset;"><?php echo $lang['Greate'];?></button>
                <input type="text" name="please_login" value="please_login" style="display: none">
	        </form>
        </div>
    </div>
</div>

<script type="text/javascript">
function NoCancelLogin(){
	document.getElementById("Choose").style.display = "none"; 
	document.getElementById("procced-login").style.display = "none"; 
	document.getElementById("cancel-login").style.display = "block"; 

}
function YesLoginHerePlease(){
	document.getElementById("Choose").style.display = "none"; 
	document.getElementById("procced-login").style.display = "block"; 
	document.getElementById("cancel-login").style.display = "none"; 
	
	
}

</script>
<!-- reset form values after refresh  -->
<script type="text/javascript">
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

</body>

</html>