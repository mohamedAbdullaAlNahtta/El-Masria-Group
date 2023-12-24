

<script>
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
    // Show New Password Function
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////

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

    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
    // check current password
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////

    function myFunctionCheckCurrentPassword() {
        var currentPasswordUserInput = document.getElementById("current_password").value;
        var currentPasswordUserInputHashed = md5(currentPasswordUserInput);
        if (currentPasswordUserInputHashed === '<?php echo htmlentities($GLOBALS["userCurrentPassword"]); ?>') {
            document.getElementById("incorrect").style.display = "none";
            document.getElementById("correct").style.display = "block";
            return true;
        } else {
            document.getElementById("incorrect").style.display = "block";
            document.getElementById("correct").style.display = "none";
            return false;
        }
    }
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
    // check compar new password with confirm password
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
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

    /////////////////////////////////////////////
    /////////////////////////////////////////////
    // Password Strength Checking function
    /////////////////////////////////////////////
    /////////////////////////////////////////////

    function checkPasswordStrength() {
        var password = document.getElementById("new_password").value;

        // Initialize variables
        var passwordStrengthPrecentage = 0;

        // Check for uppercase
        if (password.match(/[A-Z]/)) {
            passwordStrengthPrecentage += 15;
            document.getElementById("upperCase").innerHTML= '<i class="mdi mdi-check-circle"></i><?php echo $GLOBALS['lang']['Upper Case Letter']; ?>';
            document.getElementById("upperCase").style.color='#39e600';
        } else {
            document.getElementById("upperCase").innerHTML= '<i class="mdi mdi-close"></i><?php echo $GLOBALS['lang']['At Least 1 Upper Case Letter'];?>';
            document.getElementById("upperCase").style.color='#ff6666';
        }
        // Check for lowercase
        if (password.match(/[a-z]/)) {
            passwordStrengthPrecentage += 15;
            document.getElementById("lowerCase").innerHTML= '<i class="mdi mdi-check-circle"></i><?php echo $GLOBALS['lang']['Lower Case Letter']; ?>';
            document.getElementById("lowerCase").style.color='#39e600';
        } else {
            document.getElementById("lowerCase").innerHTML= '<i class="mdi mdi-close"></i> <?php echo $GLOBALS['lang']['At Least 1 Lower Case Letter'];?>';
            document.getElementById("lowerCase").style.color='#ff6666';
        }

        // Check for numbers
        if (password.match(/\d/)) {
            passwordStrengthPrecentage += 15;
            document.getElementById("numaricalChar").innerHTML= '<i class="mdi mdi-check-circle"></i><?php echo $GLOBALS['lang']['Numrical Character']; ?>';
            document.getElementById("numaricalChar").style.color='#39e600';
        } else {
            document.getElementById("numaricalChar").innerHTML= '<i class="mdi mdi-close"></i> <?php echo $GLOBALS['lang']['At Least 1 Numrical Character'];?>';
            document.getElementById("numaricalChar").style.color='#ff6666';
           
        }

        // Check for special characters
        if (password.match(/[^a-zA-Z\d]/)) {
            passwordStrengthPrecentage += 15;
            document.getElementById("specialChar").innerHTML= '<i class="mdi mdi-check-circle"></i><?php echo $GLOBALS['lang']['Special Character']; ?> ';
            document.getElementById("specialChar").style.color='#39e600';
        } else {
            document.getElementById("specialChar").innerHTML= '<i class="mdi mdi-close"></i> <?php echo $GLOBALS['lang']['At Least 1 Special Character'];?> ';
            document.getElementById("specialChar").style.color='#ff6666';
        }

         // Check password length
         if (password.length >= 8) {
            passwordStrengthPrecentage += 10;
            document.getElementById("charCount").innerHTML= '<i class="mdi mdi-check-circle"></i><?php echo $GLOBALS['lang']['8 Character Letter']; ?>';
            document.getElementById("charCount").style.color='#39e600';
        } else {
            document.getElementById("charCount").innerHTML= '<i class="mdi mdi-close"></i> <?php echo $GLOBALS['lang']['At Least 8 Character Letter'];?>';
            document.getElementById("charCount").style.color='#ff6666';
        }

        // Check password length
        if (password.length >= 10) {
            passwordStrengthPrecentage += 10;
        } 
        // Check password length
        if (password.length >= 12) {
            passwordStrengthPrecentage += 10;
        }
        // Check password length
        if (password.length >= 14) {
            passwordStrengthPrecentage += 3;
        }
        // Check password length
        if (password.length >= 16) {
            passwordStrengthPrecentage += 2;
        } 
        // Check password length
        if (password.length >= 16) {
            passwordStrengthPrecentage += 1;
        } 

        document.getElementById("digit").innerHTML= passwordStrengthPrecentage;

        if(passwordStrengthPrecentage>=95) {
            document.getElementById("progress_1").style.backgroundColor ='green';
            document.getElementById("progress_2").style.backgroundColor ='green';
            document.getElementById("progress_3").style.backgroundColor ='green';
            document.getElementById("progress_4").style.backgroundColor ='green';
            return true
        }else if(passwordStrengthPrecentage>=93) {
            document.getElementById("progress_1").style.backgroundColor ='green';
            document.getElementById("progress_2").style.backgroundColor ='green';
            document.getElementById("progress_3").style.backgroundColor ='green';
            document.getElementById("progress_4").style.backgroundColor ='yellow';
            return true
        }else if(passwordStrengthPrecentage>=90) {
            document.getElementById("progress_1").style.backgroundColor ='green';
            document.getElementById("progress_2").style.backgroundColor ='green';
            document.getElementById("progress_3").style.backgroundColor ='yellow';
            document.getElementById("progress_4").style.backgroundColor ='yellow';
            return true
        }else if(passwordStrengthPrecentage>=80) {
            document.getElementById("progress_1").style.backgroundColor ='green';
            document.getElementById("progress_2").style.backgroundColor ='yellow';
            document.getElementById("progress_3").style.backgroundColor ='yellow';
            document.getElementById("progress_4").style.backgroundColor ='yellow';
            return true
        }else if(passwordStrengthPrecentage>=70) {
            document.getElementById("progress_1").style.backgroundColor ='yellow';
            document.getElementById("progress_2").style.backgroundColor ='yellow';
            document.getElementById("progress_3").style.backgroundColor ='yellow';
            document.getElementById("progress_4").style.backgroundColor ='yellow';
            return true
        }else if(passwordStrengthPrecentage>=60) {
            document.getElementById("progress_1").style.backgroundColor ='yellow';
            document.getElementById("progress_2").style.backgroundColor ='yellow';
            document.getElementById("progress_3").style.backgroundColor ='yellow';
        }else if(passwordStrengthPrecentage>=45) {
            document.getElementById("progress_1").style.backgroundColor ='yellow';
            document.getElementById("progress_2").style.backgroundColor ='yellow';
            document.getElementById("progress_3").style.backgroundColor ='yellow';
            return false;
        } else if(passwordStrengthPrecentage>=30) {
            document.getElementById("progress_1").style.backgroundColor ='yellow';
            document.getElementById("progress_2").style.backgroundColor ='yellow';
            return false;
        }else if (passwordStrengthPrecentage>=15) {
            document.getElementById("progress_1").style.backgroundColor ='red';
            return false;
        }
        else{
            document.getElementById("progress_1").style.backgroundColor ='#000';
            document.getElementById("progress_2").style.backgroundColor ='#000';
            document.getElementById("progress_3").style.backgroundColor ='#000';
            document.getElementById("progress_4").style.backgroundColor ='#000';
            return false;
        }
    }

    function myFunctionReadyToChnage(){
        if (checkPasswordStrength() === true && myFunctionCompareNewPassWithConfirmPass() === true && myFunctionCheckCurrentPassword()=== true ) {
            document.getElementById("submit").disabled = false; 
            console.log('good');
        } else {
            document.getElementById("submit").disabled = true; 
            console.log('not good');
            
        }
    }
</script>

<?php

if (isset($GLOBALS['password_changing_status'])) {
    $xxx = $GLOBALS['password_changing_status'];

if ($xxx !== false) { ?>
 <!-- reset form values after refresh  -->
 <script type="text/javascript">
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<script type="text/javascript">
     swal({
                title: "Good job", 
                text: "<?php echo $GLOBALS['lang'][$xxx]; ?>", 
                type: "success",
                confirmButtonText: 'Log Out!',
                closeOnConfirm: false,
                closeOnCancel: false
                },
            function(){ 
                location.replace("logout?language=<?php echo$GLOBALS['language']; ?>&theme=<?php echo$GLOBALS['theme']; ?>");
            }
        );

</script>
<?php 
}
}
?>
