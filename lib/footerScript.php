 <!-- All Jquery -->
 <!-- ============================================================== -->
 <script id="jsjquery.min.js" src="assets/plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap tether Core JavaScript -->
 <script id="jstether.min.js" src="assets/plugins/bootstrap/js/tether.min.js"></script>
 <script id="jsbootstrap.min.js" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
 <!--stickey kit -->
 <script id="jssticky-kit.min.js" src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
 <!-- ============================================================== -->
 <!-- ============================================================== -->
 <!-- Style select -->
 <!-- ============================================================== -->
 <script id="jsbootstrap-select.min.js" src="assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

 
<!-- slimscrollbar scrollbar JavaScript -->
<script id="slimscrolljs" src="thems/dark/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script id="jswaves" src="thems/dark/js/waves.js"></script>
<!--Menu sidebar -->
<script id="sidebarmenujs" src="thems/dark/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script id="customminjs" src="thems/dark/js/custom.min.js"></script>
<!-- Sweet-Alert  -->
<script id="jssweetalert.min.js" src="thems/dark/sweetalert/sweetalert.min.js"></script>
<script id="isjquery.sweet-alert.custom.js" src="thems/dark/sweetalert/jquery.sweet-alert.custom.js"></script>

<!-- changeThemeStyle -->
<script>
function changeThemeStyle() {
    var x = document.getElementById("changeTheme").value;
    var z = '<?php echo $language; ?>';

    if (x === "dark") {
        // change sweet alert theme
        document.getElementById("jssweetalert.min.js").setAttribute("src", "thems/dark/sweetalert/sweetalert.min.js");
        document.getElementById("isjquery.sweet-alert.custom.js").setAttribute("src", "thems/dark/sweetalert/jquery.sweet-alert.custom.js");
        document.getElementById("csssweetalert").setAttribute("href", "thems/dark/sweetalert/sweetalert.css");
        document.getElementById("module-style").setAttribute("href", "modules/<?php echo $module;?>/themes/dark/style.css");
        document.getElementById("logo-colo").setAttribute("src", "assets/images/elmasria_logo_mini2.png");

        if (z === 'ar') {
            document.getElementById("html-page").setAttribute("dir", "rtl");
            document.getElementById("custom-css").setAttribute("href", "thems/dark-main-rtl/css/style.css");
            document.getElementById("theme-color-css").setAttribute("href", "thems/dark-main-rtl/css/colors/megna-dark.css");
            document.getElementById("index-css").setAttribute("href", "thems/dark-main-rtl/index.css");
        } else if (z === 'en') {
            document.getElementById("html-page").setAttribute("dir", "ltr");
            document.getElementById("custom-css").setAttribute("href", "thems/dark/css/style.css");
            document.getElementById("theme-color-css").setAttribute("href", "thems/dark/css/colors/megna-dark.css");
            document.getElementById("index-css").setAttribute("href", "thems/dark/index.css");
        }
    } else if (x === "white") {
        // change sweet alert theme
        document.getElementById("jssweetalert.min.js").setAttribute("src", "thems/white/sweetalert/sweetalert.min.js");
        document.getElementById("isjquery.sweet-alert.custom.js").setAttribute("src", "thems/white/sweetalert/jquery.sweet-alert.custom.js");
        document.getElementById("csssweetalert").setAttribute("href", "thems/white/sweetalert/sweetalert.css");
        document.getElementById("module-style").setAttribute("href", "modules/<?php echo $module;?>/themes/white/style.css");
        document.getElementById("logo-colo").setAttribute("src", "assets/images/elmasria_logo_mini2-white.png");

        if (z === 'ar') {
            document.getElementById("html-page").setAttribute("dir", "rtl");
            document.getElementById("custom-css").setAttribute("href", "thems/white-main-rtl/css/style.css");
            document.getElementById("theme-color-css").setAttribute("href", "thems/white-main-rtl/css/colors/red.css");
            document.getElementById("index-css").setAttribute("href", "thems/white-main-rtl/index.css");
        } else if (z === 'en') {
            document.getElementById("html-page").setAttribute("dir", "ltr");
            document.getElementById("custom-css").setAttribute("href", "thems/white/css/style.css");
            document.getElementById("theme-color-css").setAttribute("href", "thems/white/css/colors/red.css");
            document.getElementById("index-css").setAttribute("href", "thems/white/index.css");
        }
    }
}


function changeSelectedThemeStyle(x) {
    var z = '<?php echo $language; ?>';

    if (x === "dark") {
        // change sweet alert theme
        document.getElementById("jssweetalert.min.js").setAttribute("src", "thems/dark/sweetalert/sweetalert.min.js");
        document.getElementById("isjquery.sweet-alert.custom.js").setAttribute("src", "thems/dark/sweetalert/jquery.sweet-alert.custom.js");
        document.getElementById("csssweetalert").setAttribute("href", "thems/dark/sweetalert/sweetalert.css");
        document.getElementById("module-style").setAttribute("href", "modules/<?php echo $module;?>/themes/dark/style.css");
        document.getElementById("logo-colo").setAttribute("src", "assets/images/elmasria_logo_mini2.png");

        if (z === 'ar') {
            document.getElementById("html-page").setAttribute("dir", "rtl");
            document.getElementById("custom-css").setAttribute("href", "thems/dark-main-rtl/css/style.css");
            document.getElementById("theme-color-css").setAttribute("href", "thems/dark-main-rtl/css/colors/megna-dark.css");
            document.getElementById("index-css").setAttribute("href", "thems/dark-main-rtl/index.css");
        } else if (z === 'en') {
            document.getElementById("html-page").setAttribute("dir", "ltr");
            document.getElementById("custom-css").setAttribute("href", "thems/dark/css/style.css");
            document.getElementById("theme-color-css").setAttribute("href", "thems/dark/css/colors/megna-dark.css");
            document.getElementById("index-css").setAttribute("href", "thems/dark/index.css");
        }
    } else if (x === "white") {
        // change sweet alert theme
        document.getElementById("jssweetalert.min.js").setAttribute("src", "thems/white/sweetalert/sweetalert.min.js");
        document.getElementById("isjquery.sweet-alert.custom.js").setAttribute("src", "thems/white/sweetalert/jquery.sweet-alert.custom.js");
        document.getElementById("csssweetalert").setAttribute("href", "thems/white/sweetalert/sweetalert.css");
        document.getElementById("module-style").setAttribute("href", "modules/<?php echo $module;?>/themes/white/style.css");
        document.getElementById("logo-colo").setAttribute("src", "assets/images/elmasria_logo_mini2-white.png");

        if (z === 'ar') {
            document.getElementById("html-page").setAttribute("dir", "rtl");
            document.getElementById("custom-css").setAttribute("href", "thems/white-main-rtl/css/style.css");
            document.getElementById("theme-color-css").setAttribute("href", "thems/white-main-rtl/css/colors/red.css");
            document.getElementById("index-css").setAttribute("href", "thems/white-main-rtl/index.css");
        } else if (z === 'en') {
            document.getElementById("html-page").setAttribute("dir", "ltr");
            document.getElementById("custom-css").setAttribute("href", "thems/white/css/style.css");
            document.getElementById("theme-color-css").setAttribute("href", "thems/white/css/colors/red.css");
            document.getElementById("index-css").setAttribute("href", "thems/white/index.css");
        }
    }
}

</script>


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

