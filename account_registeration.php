<?php
include("includes/classautoloader.inc.php");
//nitiate session
session_start();
error_reporting(0);
error_reporting(E_ERROR | E_PARSE);
//end of initiate session

$pin_number = urlencode($_GET["pin_number"]);

$user = new Client();

$National_ID = $user->decrypt_pin_num($pin_number);


$reg_data = $user->get_reg_data($pin_number);



// if (isset($_POST["submit"])) {

//     $username = $_POST['username'];
//     $password = $_POST['password'];

    
  
// }



?>


<!DOCTYPE html>
<html id="html-page" lang="en">

<!-- ///////////////////////////////////////////////////////////////////////////////// -->
<!-- // Powered by ENG Muhammad Abdullah El Nahtta//////////////////////////////////// -->
<!-- // This frameWork  created bye ENG Muhammad Abdullah El Nahtta/////////////////// -->
<!-- // Powered by ENG Muhammad Abdullah El Nahtta//////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
<!-- // you can contact me through mobile number 201093001070 or lanline 20 48 2327352 -->
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////&&&&&&&&&&&&&&&&,@///////////////////////////////// -->
<!-- ////////////////////////////&&&&&&&&&&&&&&&&&@&&&%&%///////////////////////////// -->
<!-- ///////////////////////////*%&%&&%%%%#%%%%%%&%&&&&&&&//////////////////////////// -->
<!-- ///////////////////////////&&&/,,,,,,...*,*,,***//(&&&%////////////////////////// -->
<!-- /////////////////////////%&%&,,.....,,,,,,,,,,****//%&&////////////////////////// -->
<!-- /////////////////////////%%#*,..... .........,,,,***/#&&///////////////////////// -->
<!-- /////////////////////////&#*...........,...,,,,,,,****%&///////////////////////// -->
<!-- /////////////////////////%(,....,...,......,,,###((***/&&*/////////////////////// -->
<!-- ///////////////////////..,#*,&#/,****@&*,,%/((#((/((*@#*,*/////////////////////// -->
<!-- ///////////////////////.,..,@,,*(.&@(/,/.,@/((((*//*,*%**//////////////////////// -->
<!-- /////////////////////////,,(,/..,,**,./..,**@,**,%&***//*//////////////////////// -->
<!-- //////////////////////////.(,....,,,.....,******,,,,*/#,.//////////////////////// -->
<!-- ////////////////////////////(....,(...*..,*//***/#*//%/////////////////////////// -->
<!-- /////////////////////////////%#,,//#(///((((#*//%%&/(%&////////////////////////// -->
<!-- /////////////////////////////#/#/*(..,,,,*,*//**#/%&&./////////////////////////// -->
<!-- ///////////////////////////////%#*/,...,,///****#&&&///////////////////////////// -->
<!-- ///////////////////////////////,*%%#/(*//#(###%&&#/*,//////////////////////////// -->
<!-- //////////////////////////////,&..*/&&%&&&&&&&&#***,.&&////////////////////////// -->
<!-- ////////////////////////////@%///(....,,*///*****,//..&&&&&&&&&&@//////////////// -->
<!-- ///////////////////////&&&&&%%%/////*...,,,*,,,////...&&&&&&&&&&&&&&&&&&&&&////// -->
<!-- ///////////////&%%%%%%%&&&%%%%%/////////,,,,////////.,&&&&&&&&&&&&&&&&&&&&&&&&&// -->
<!-- /////////%%%&&&%%%%%%%%%%&%%%%%%//////@&#%%&&&&%//...,&&&&&&&%&&&&%%%&&%&&&&&&&// -->
<!-- //////%&&&%%%%%%%###%%%#%%%%%%%./////,(/%#&&&&,.,# ...(&&&&&&&%&&&%%%%%%%%%%%&&// -->
<!-- //////%%%%%%%#######%####%%%%%%%///.../*%#&&&,....///.*&&&&%&%%&&&&&%%%%%%%%%&&// -->
<!-- //////%%################%%%%%%%&.////////%%%&,..../////&&&%&%%%%&&&&&%%%%&&%&&%// -->
<!-- //////%%###(#(((#(#(####%%%%%%%&,///////%%%&&&.../////.&&&&%%%%%&&&&&&&&&&&&&&&// -->
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
<!-- // you can contact me through mobile number 201093001070 or lanline 20 48 2327352 -->
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
<!-- // Powered by ENG Muhammad Abdullah El Nahtta//////////////////////////////////// -->
<!-- // This frameWork  created bye ENG Muhammad Abdullah El Nahtta/////////////////// -->
<!-- // Powered by ENG Muhammad Abdullah El Nahtta//////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////////////// -->

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon icon -->
        <link rel="icon" type="dark/image/png" sizes="16x16" href="assets/images/favicon.png" />
        <title>El Masria Group Developments</title>
        <!-- Bootstrap Core CSS -->
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Custom CSS -->
        <link id="custom-css" href="thems/white/css/style.css" rel="stylesheet"/>
        <!-- login CSS -->
        <link id="login-css" href="thems/white/login.css" rel="stylesheet"/>
    </head>

    <body onload="typeWriter()">
        <div id="particles-js">
            <!-- ============================================================== -->
            <!-- Preloader - style you can find in spinners.css -->
            <!-- ============================================================== -->
            <div class="preloader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                </svg>
            </div>
            <!-- ============================================================== -->
            <!-- Main wrapper - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <section id="wrapper">
                <div class="login-register">
                    <div class="row login-box">
                        <div id="right-card-block-login" class="col-lg-12 b-l card-block">
                            <div class="form-group" >
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="mdi mdi-theme-light-dark"> Theme </i></div>
                                    <select id="changeTheme" name="changeTheme" class="form-control custom-select" onchange="changeThemeStyle();">
                                        <option value="white">White</option>
                                        <option value="dark">Dark </option>
                                    </select>
                                    <a id="currentLang" class="nav-link dropdown-toggle text-muted waves-effect waves-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i></a>
                                    <div class="dropdown-menu  dropdown-menu-right animated bounceInDown"> <a href="account_registeration-ar" id ="changeLang" class="dropdown-item" ><i class="flag-icon flag-icon-eg"></i> اللغة العربية</a></div>
                                </div>
                            </div>
                            <form class="form-horizontal" id="loginform" method="post" action="login.php">
                                <center>
                                    <h2 class="box-title m-b-20" style="margin-bottom: 0;"><img id="mylogoImg2" src="assets/images/El Masria Group Logo 2.png" /></h2>
                                </center>
                                <center>
                                    <p style="padding-top: 2%; color: red;"><?php var_dump($National_ID);?></p>
                                </center>

                                <div class="form-group" >
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input type="text" name="username" class="form-control" id="username" value="<?php echo $reg_data['client_email'];?>" placeholder="<?php echo $reg_data['client_email'];?>" required="required" />
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <div class="input-group">
                                        <div class="input-group-addon"><i style="font-size: 20px;" class="mdi mdi-key"></i></div>
                                        <input  type="password" name="new_password" class="form-control" id="new_password" placeholder="new password" required="required" onkeyup="checkPasswordStrength();" />
                                        <div class="input-group-addon" style="cursor: pointer;" onclick="myFunctionShowPass();" ><i style="font-size: 20px;" id="showPass" class="mdi mdi-eye"></i></div>
                                    </div>
                                </div>
                                <p id="new_password_res"></p>
                                <div class="form-group" >
                                    <div class="input-group">
                                        <div class="input-group-addon"><i style="font-size: 20px;" class="mdi mdi-key-change"></i></div>
                                        <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="confirm password" required="required" onkeyup="myFunctionCompareNewPassWithConfirmPass();myFunctionReadyToChnage()" />
                                        <div class="input-group-addon">
                                            <img id="correctRetype" style="width: 30px; display: none;" src="modules/Change_Password/img/correct.png" />
                                            <img id="incorrectRetype" style="width: 30px;" src="modules/Change_Password/img/incorrect.png" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group text-center m-t-20">
                                    <div class="col-xs-12">
                                        <button
                                            type="submit"
                                            name="submit"
                                            style="background-image: url('assets/images/El-Masria-Group-Logo-button.png'); background-repeat: repeat-y; border-radius: 5px; border-color: #fff;"
                                            class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                                            type="submit"
                                        >
                                            ٌRegister 
                                        </button>
                                    </div>
                                </div>
                                <br />
                            </form>
                           
                        </div>
                       
                  
                    </div>
                </div>
            </section>
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="assets/plugins/bootstrap/js/tether.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="thems/white/js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="thems/white/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="thems/white/js/sidebarmenu.js"></script>
        <!--stickey kit -->
        <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
        <!--Custom JavaScript -->
        <script src="thems/white/js/custom.min.js"></script>
        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
        <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

        <!-- Na7tta Canvas  -->
        <script src="canvas/particles.js"></script>
        <script src="canvas/js/app.js"></script>

        <!-- script that reset forms after submit and never store again when i refresh page-->
        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
        <script>
        function myFunctionShowPass() {
                var li = document.getElementById("showPass").className;
                if (li === "mdi mdi-eye") {
                    document.getElementById("showPass").setAttribute("class", "mdi mdi-eye-off");
                    document.getElementById("new_password").setAttribute("type", "text");
                } else if (li === "mdi mdi-eye-off") {
                    document.getElementById("showPass").setAttribute("class", "mdi mdi-eye");
                    document.getElementById("new_password").setAttribute("type", "password");
                }
            }
            function myFunctionCompareNewPassWithConfirmPass() {
                var newPasswordUserInput = document.getElementById("new_password").value;
                var confirmPasswordUserInput = document.getElementById("confirm_password").value;
                if (newPasswordUserInput === confirmPasswordUserInput) {
                    document.getElementById("incorrectRetype").style.display = "none";
                    document.getElementById("correctRetype").style.display = "block";
                    return true;
                } else {
                    document.getElementById("incorrectRetype").style.display = "block";
                    document.getElementById("correctRetype").style.display = "none";
                    return false;
                }
            }
        </script>
        <script>
            function changeThemeStyle() {
                var x = document.getElementById("changeTheme").value;
                var z = document.getElementById("currentLang").innerHTML;
                if (x === "dark") {
                    document.getElementById("html-page").setAttribute("dir", "ltr");
                    document.getElementById("custom-css").setAttribute("href", "thems/dark/css/style.css");
                    document.getElementById("login-css").setAttribute("href", "thems/dark/login.css");
                    document.getElementById("mylogoImg").src = "assets/images/El Masria Group Logo 2022-10-White.png";
                    document.getElementById("mylogoImg2").src = "assets/images/El Masria Group Logo 2-white.png";
                } else if (x === "white") {
                    document.getElementById("html-page").setAttribute("dir", "ltr");
                    document.getElementById("custom-css").setAttribute("href", "thems/white/css/style.css");
                    document.getElementById("login-css").setAttribute("href", "thems/white/login.css");
                    document.getElementById("mylogoImg").src = "assets/images/El Masria Group Logo 2022-10.png";
                    document.getElementById("mylogoImg2").src = "assets/images/El Masria Group Logo 2.png";
                }
            }

        </script>
        <?php 
        if(isset($_GET['theme'])){
            ?>
            <script>
            function changeThemeStyleLoginPage() {
                if ("dark" === "<?php echo $_GET['theme']; ?>") {
                    document.getElementById("html-page").setAttribute("dir", "ltr");
                    document.getElementById("custom-css").setAttribute("href", "thems/dark/css/style.css");
                    document.getElementById("login-css").setAttribute("href", "thems/dark/login.css");
                    document.getElementById("mylogoImg").src = "assets/images/El Masria Group Logo 2022-10-White.png";
                    document.getElementById("mylogoImg2").src = "assets/images/El Masria Group Logo 2-white.png";
                } else if ("white" === "<?php echo $_GET['theme']; ?>") {
                    document.getElementById("html-page").setAttribute("dir", "ltr");
                    document.getElementById("custom-css").setAttribute("href", "thems/white/css/style.css");
                    document.getElementById("login-css").setAttribute("href", "thems/white/login.css");
                    document.getElementById("mylogoImg").src = "assets/images/El Masria Group Logo 2022-10.png";
                    document.getElementById("mylogoImg2").src = "assets/images/El Masria Group Logo 2.png";
                }
            }
            changeThemeStyleLoginPage();

        </script>


            <?php

        }
        
        ?>
    </body>

<!-- ///////////////////////////////////////////////////////////////////////////////// -->
<!-- // Powered by ENG Muhammad Abdullah El Nahtta//////////////////////////////////// -->
<!-- // This frameWork  created bye ENG Muhammad Abdullah El Nahtta/////////////////// -->
<!-- // Powered by ENG Muhammad Abdullah El Nahtta//////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
<!-- // you can contact me through mobile number 201093001070 or lanline 20 48 2327352 -->
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////&&&&&&&&&&&&&&&&,@///////////////////////////////// -->
<!-- ////////////////////////////&&&&&&&&&&&&&&&&&@&&&%&%///////////////////////////// -->
<!-- ///////////////////////////*%&%&&%%%%#%%%%%%&%&&&&&&&//////////////////////////// -->
<!-- ///////////////////////////&&&/,,,,,,...*,*,,***//(&&&%////////////////////////// -->
<!-- /////////////////////////%&%&,,.....,,,,,,,,,,****//%&&////////////////////////// -->
<!-- /////////////////////////%%#*,..... .........,,,,***/#&&///////////////////////// -->
<!-- /////////////////////////&#*...........,...,,,,,,,****%&///////////////////////// -->
<!-- /////////////////////////%(,....,...,......,,,###((***/&&*/////////////////////// -->
<!-- ///////////////////////..,#*,&#/,****@&*,,%/((#((/((*@#*,*/////////////////////// -->
<!-- ///////////////////////.,..,@,,*(.&@(/,/.,@/((((*//*,*%**//////////////////////// -->
<!-- /////////////////////////,,(,/..,,**,./..,**@,**,%&***//*//////////////////////// -->
<!-- //////////////////////////.(,....,,,.....,******,,,,*/#,.//////////////////////// -->
<!-- ////////////////////////////(....,(...*..,*//***/#*//%/////////////////////////// -->
<!-- /////////////////////////////%#,,//#(///((((#*//%%&/(%&////////////////////////// -->
<!-- /////////////////////////////#/#/*(..,,,,*,*//**#/%&&./////////////////////////// -->
<!-- ///////////////////////////////%#*/,...,,///****#&&&///////////////////////////// -->
<!-- ///////////////////////////////,*%%#/(*//#(###%&&#/*,//////////////////////////// -->
<!-- //////////////////////////////,&..*/&&%&&&&&&&&#***,.&&////////////////////////// -->
<!-- ////////////////////////////@%///(....,,*///*****,//..&&&&&&&&&&@//////////////// -->
<!-- ///////////////////////&&&&&%%%/////*...,,,*,,,////...&&&&&&&&&&&&&&&&&&&&&////// -->
<!-- ///////////////&%%%%%%%&&&%%%%%/////////,,,,////////.,&&&&&&&&&&&&&&&&&&&&&&&&&// -->
<!-- /////////%%%&&&%%%%%%%%%%&%%%%%%//////@&#%%&&&&%//...,&&&&&&&%&&&&%%%&&%&&&&&&&// -->
<!-- //////%&&&%%%%%%%###%%%#%%%%%%%./////,(/%#&&&&,.,# ...(&&&&&&&%&&&%%%%%%%%%%%&&// -->
<!-- //////%%%%%%%#######%####%%%%%%%///.../*%#&&&,....///.*&&&&%&%%&&&&&%%%%%%%%%&&// -->
<!-- //////%%################%%%%%%%&.////////%%%&,..../////&&&%&%%%%&&&&&%%%%&&%&&%// -->
<!-- //////%%###(#(((#(#(####%%%%%%%&,///////%%%&&&.../////.&&&&%%%%%&&&&&&&&&&&&&&&// -->
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
<!-- // you can contact me through mobile number 201093001070 or lanline 20 48 2327352 -->
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
<!-- // Powered by ENG Muhammad Abdullah El Nahtta//////////////////////////////////// -->
<!-- // This frameWork  created bye ENG Muhammad Abdullah El Nahtta/////////////////// -->
<!-- // Powered by ENG Muhammad Abdullah El Nahtta//////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////////////// -->

</html>
