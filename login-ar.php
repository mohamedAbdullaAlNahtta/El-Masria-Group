<?php
include("includes/classautoloader.inc.php");
include 'lang/ar-login.php';
//nitiate session
session_start();
error_reporting(0);
error_reporting(E_ERROR | E_PARSE);

if (isset($_POST["submit"])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['systemType'] = 'web';

    $user = new User();
    $_SESSION['user'] = $user;

    $user_logged_in = $user->user_login($username,$password,'web');
    $_SESSION['token'] = $user->session_token;

    if ($user_logged_in === true) {
        header("location: index");
    }else{
        $loginMessage = $user_logged_in;
        $_SESSION['loginMessage'] = $loginMessage;
    }   
    
}

$loginMessage = $_SESSION['loginMessage'];

if ( $loginMessage === "") 
{
    $loginMessage ="Welcome....  How is Your day !?... We are so happy to have you with US,...Thanks for Trusting US...... We hope you enjoying your day.";
}
if ( $loginMessage === NULL) 
{
    $loginMessage ="Welcome....  How is Your day !?... We are so happy to have you with US,...Thanks for Trusting US...... We hope you enjoying your day.";
}

if (!isset($loginMessage)) 
{
    $loginMessage ="Welcome....  How is Your day !?... We are so happy to have you with US,...Thanks for Trusting US...... We hope you enjoying your day.";
}


?>


<!DOCTYPE html>
<html id="html-page" dir="rtl" lang="en">

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
        <link id="custom-css" href="thems/white-main-rtl/css/style.css" rel="stylesheet"/>
        <!-- login CSS -->
        <link id="login-css" href="thems/white-main-rtl/login.css" rel="stylesheet"/>
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
                    <div class="row login-box" id="login-box-style">
                        <div id="left-card-block-login" class="col-lg-6 card-block">
                            <div class="message-widget">
                                <!-- Message -->
                                <a href="#">
                                    <center>
                                        <div>
                                        <img
                                                id="mylogoImg"
                                                style="width: 200px; position: relative; display: inline-block; margin: 0 10px 15px 0;"
                                                src="assets/images/El Masria Group Logo 2022-10.png"
                                                alt="user"
                                            />
                                            <span class="profile-status online pull-right"></span>
                                        </div>
                                    </center>
                                    <div class="mail-contnet">
                                        <span class="time" id="typeWriterTime"></span>
                                        <br />
                                        <span class="mail-desc" id="typeWriter"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="right-card-block-login" class="col-lg-6 b-l card-block">
                            <div class="form-group" >
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="mdi mdi-theme-light-dark"> المظهر </i></div>
                                    <select id="changeTheme" name="changeTheme" class="form-control custom-select" onchange="changeThemeStyle();">
                                        <option value="white">صاطع</option>
                                        <option value="dark">ليلى </option>
                                    </select>
                                    <a id="currentLang" class="nav-link dropdown-toggle text-muted waves-effect waves-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-eg"></i></a>
                                    <div class="dropdown-menu  dropdown-menu-right animated bounceInDown"> <a href="login" id ="changeLang" class="dropdown-item" ><i class="flag-icon flag-icon-us"></i> English</a></div>
                                </div>
                            </div>
                            <form class="form-horizontal" id="loginform" method="post" action="login-ar.php">
                                <center>
                                <h2 class="box-title m-b-20" style="margin-bottom: 0;"><img id="mylogoImg2" src="assets/images/El Masria Group Logo 2.png" /></h2>
                                </center>
                                <center>
                                    <p style="padding-top: 2%; color: red;"></p>
                                </center>

                                <div class="form-group" >
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input type="text" name="username" class="form-control" id="username" placeholder="اسم المستخدم" required="required" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="mdi mdi-key"></i></div>
                                        <input  type="password" name="password" class="form-control" id="password" placeholder="كلمة المرور" required="required" />
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
                                            تسجيل الدخول
                                        </button>
                                    </div>
                                </div>
                                <br />
                            </form>
                           
                        </div>
                        <div>
                            <hr class="m-t-0" style="width: 800px;" />
                        </div>

                        <div id="login-page-footer" class="row" style="margin-right: 0px;">
                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                <div class="copyright_text">
                                    <p style="text-align: center;">
                                        تم التطوير من خلال <img src="assets/images/logo_02.png" /> فريق تطوير البرمجيات &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script>
                                        جميع الحقوق محفوظة
                                    </p>
                                </div>
                            </div>
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
            var i = 0;
            var txt = "<?php echo htmlentities($loginPagelang[$loginMessage]);?>";
            var speed = 50;

            function typeWriter() {
                if (i < txt.length) {
                    document.getElementById("typeWriter").innerHTML += txt.charAt(i);
                    i++;
                    setTimeout(typeWriter, speed);
                }
                function formatAMPM(date) {
                    var hours = date.getHours();
                    var minutes = date.getMinutes();
                    var ampm = hours >= 12 ? "pm" : "am";
                    hours = hours % 12;
                    hours = hours ? hours : 12; // the hour '0' should be '12'
                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    var strTime = hours + ":" + minutes + " " + ampm;
                    return strTime;
                }

                var textString = formatAMPM(new Date()) + " " + new Date().getFullYear() + "/" + new Date().getMonth() + "/" + new Date().getDate();

                document.getElementById("typeWriterTime").innerHTML = textString.toUpperCase();
            }
        </script>
        <script>
            function changeThemeStyle() {
                var x = document.getElementById("changeTheme").value;
                var z = document.getElementById("currentLang").innerHTML;
                if (x === "dark") {
                    document.getElementById("html-page").setAttribute("dir", "rtl");
                    document.getElementById("custom-css").setAttribute("href", "thems/dark-main-rtl/css/style.css");
                    document.getElementById("login-css").setAttribute("href", "thems/dark-main-rtl/login.css");
                    document.getElementById("mylogoImg").src = "assets/images/El Masria Group Logo 2022-10-White.png";
                    document.getElementById("mylogoImg2").src = "assets/images/El Masria Group Logo 2-white.png";
                } else if (x === "white") {
                    document.getElementById("html-page").setAttribute("dir", "rtl");
                    document.getElementById("custom-css").setAttribute("href", "thems/white-main-rtl/css/style.css");
                    document.getElementById("login-css").setAttribute("href", "thems/white-main-rtl/login.css");
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
                    document.getElementById("html-page").setAttribute("dir", "rtl");
                    document.getElementById("custom-css").setAttribute("href", "thems/dark-main-rtl/css/style.css");
                    document.getElementById("login-css").setAttribute("href", "thems/dark-main-rtl/login.css");
                    document.getElementById("mylogoImg").src = "assets/images/El Masria Group Logo 2022-10-White.png";
                    document.getElementById("mylogoImg2").src = "assets/images/El Masria Group Logo 2-white.png";
                } else if ("white" === "<?php echo $_GET['theme']; ?>") {
                    document.getElementById("html-page").setAttribute("dir", "rtl");
                    document.getElementById("custom-css").setAttribute("href", "thems/white-main-rtl/css/style.css");
                    document.getElementById("login-css").setAttribute("href", "thems/white-main-rtl/login.css");
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
