<?php 

if ($language==='en'&& $theme==='dark') {
    ?>
      <!------------------- dark style ----------------->
      <!-- Custom CSS -->
      <link id="custom-css" href="thems/dark/css/style.css" rel="stylesheet">
      <!-- You can change the theme colors from here -->
      <link id="theme-color-css" href="thems/dark/css/colors/megna-dark.css" id="theme" rel="stylesheet">
      <!-- index CSS -->
      <link id="index-css" href="thems/dark/index.css" id="theme" rel="stylesheet">
      <!--alerts CSS -->
      <link id="csssweetalert" href="thems/dark/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
      <!-- change page direction  -->
      <script>
        document.getElementById("html-page").setAttribute("dir", "ltr");
        console.log('langauage english and theme dark');
      </script>
    <?php
    } else if($language==='en'&& $theme==='white'){
      ?>
      <!------------------- dark style ----------------->
      <!-- Custom CSS -->
      <link id="custom-css" href="thems/white/css/style.css" rel="stylesheet">
      <!-- You can change the theme colors from here -->
      <link id="theme-color-css" href="thems/white/css/colors/red.css" id="theme" rel="stylesheet">
      <!-- index CSS -->
      <link id="index-css" href="thems/white/index.css" id="theme" rel="stylesheet">
      <!--alerts CSS -->
      <link id="csssweetalert" href="thems/white/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
      <!-- change page direction  -->
      <script>
        document.getElementById("html-page").setAttribute("dir", "ltr");
        console.log('langauage english and theme white');
      </script>
    <?php
    } else if($language==='ar'&& $theme==='dark'){
      ?>
      <!------------------- dark style ----------------->
      <!-- Custom CSS -->
      <link id="custom-css" href="thems/dark-main-rtl/css/style.css" rel="stylesheet">
      <!-- You can change the theme colors from here -->
      <link id="theme-color-css" href="thems/dark-main-rtl/css/colors/megna-dark.css" id="theme" rel="stylesheet">
      <!-- index CSS -->
      <link id="index-css" href="thems/dark-main-rtl/index.css" id="theme" rel="stylesheet">
      <!--alerts CSS -->
      <link id="csssweetalert" href="thems/dark-main-rtl/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
      <!-- change page direction  -->
      <script>
        document.getElementById("html-page").setAttribute("dir", "rtl");
        console.log('langauage ar and theme dark');
      </script>
    <?php
    } else if($language==='ar'&& $theme==='white'){
      ?>
      <!------------------- dark style ----------------->
      <!-- Custom CSS -->
      <link id="custom-css" href="thems/white-main-rtl/css/style.css" rel="stylesheet">
      <!-- You can change the theme colors from here -->
      <link id="theme-color-css" href="thems/white-main-rtl/css/colors/red.css" id="theme" rel="stylesheet">
      <!-- index CSS -->
      <link id="index-css" href="thems/white-main-rtl/index.css" id="theme" rel="stylesheet">
      <!--alerts CSS -->
      <link id="csssweetalert" href="thems/white-main-rtl/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
      <!-- change page direction  -->
      <script>
        document.getElementById("html-page").setAttribute("dir", "rtl");
        console.log('langauage ar and theme white');
      </script>
    <?php
    }
    if ($theme === 'dark') {
      echo '<link id="module-style" href="modules/'.$module.'/themes/dark/style.css" rel="stylesheet">';
    } else {
      echo '<link id="module-style" href="modules/'.$module.'/themes/white/style.css" rel="stylesheet">';
    }
?>
