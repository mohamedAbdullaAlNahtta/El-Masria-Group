<?php
include("includes/classautoloader.inc.php");
session_start();
error_reporting(0);
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $logout_logs = $user->destroy_user_token($user->username, 'web', $user->session_token);

    if ($logout_logs === true) {
        $lang = $_GET['language'];
        $themeStyle = $_GET['theme'];
        $user="";
        $_SESSION['user']="";
        $_SESSION['username']="";
        $_SESSION['password']="";
        $_SESSION['token']="";
        $_SESSION['systemType']="";
        $_SESSION['loginMessage']="";

        // getting Login Message before destroying the session 
        $loginMessage=$_SESSION['loginMessage'];

        // destroying the session varibales 
        session_destroy();
        session_unset();

        // adding te login Message into  a session variables 
        session_start();
        error_reporting(0);
        $_SESSION['loginMessage']=$loginMessage;

        if($lang ==='ar'){
        // go back to login page 
        header("location:login-ar?theme=".$themeStyle);
        }else{
        // go back to login page 
        header("location:login?theme=".$themeStyle);
        }
    }else{
        echo "failed";
    }
} else {
     // go back to login page 
     header("location:login");

}





?>