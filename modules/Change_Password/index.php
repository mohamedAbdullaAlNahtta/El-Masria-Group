<?php 
$userCurrentPassword = $user->password; 

if(isset($_POST['submit_change'])){

	$current_password = $_POST['current_password'];
	$new_password = $_POST['new_password'];
	$confirm_password = $_POST['confirm_password'];

	$password_changing_status = $user->change_user_password($user->username, 'web', $current_password, $new_password, $confirm_password);

}

?>
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
<!-- // Powered by ENG Muhammad Abdullah El Nahtta//////////////////////////////////// -->
<!-- // This Module  created bye ENG Muhammad Abdullah El Nahtta////////////////////// -->
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
<!-- // This Module  created bye ENG Muhammad Abdullah El Nahtta////////////////////// -->
<!-- // Powered by ENG Muhammad Abdullah El Nahtta//////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////////////// -->

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center"></div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->

        <!--==================================================================================================-->
        <!--==================================================================================================-->
        <!--=========================               Fisrt Row          =======================================-->
        <!--==================================================================================================-->
        <!--==================================================================================================-->
        <!--==================================================================================================-->
        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">
                <?php echo $lang['change user password'] ; ?>
                </h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo $lang['Setting'] ; ?></a></a></li>
                    <li class="breadcrumb-item active"><?php echo $lang['change user password'] ; ?></li>
                </ol>
            </div>
        </div>
        <div class="row login-box" style="width: 800px; flex-direction: row;border: 1px solid rgba(255,255,255,0.1); ">
            <div class="col-lg-6 card-block" id="leftcardblock">
                <div class="message-widget">
                    <!-- Message -->
                    <div class="mail-contnet">
                        <h4 style="text-align: center;"><img src="assets/images/logo_02.png" /><?php echo $lang['Strength Checker'];?></h4>
                        <div class="percentage" >
                            <div class="digit" id="digit">0</div>
                            %
                        </div>
                        <br />
                        <div class="progress">
                            <div id="progress_1" ></div>
                            <div id="progress_2" ></div>
                            <div id="progress_3" ></div>
                            <div id="progress_4" ></div>
                        </div>
						<center>
							<h3 id="lowerCase" style="color:#ff6666; margin-bottom:0px"><i class="mdi mdi-close"></i> <?php echo $lang['At Least 1 Lower Case Letter'];?> </h3>
							<h3 id="upperCase" style="color:#ff6666; margin-bottom:0px"><i class="mdi mdi-close"></i> <?php echo $lang['At Least 1 Upper Case Letter'];?></h3>
							<h3 id="numaricalChar" style="color:#ff6666; margin-bottom:0px"><i class="mdi mdi-close"></i> <?php echo $lang['At Least 1 Numrical Character'];?></h3>
							<h3 id="specialChar" style="color:#ff6666; margin-bottom:0px"><i class="mdi mdi-close"></i> <?php echo $lang['At Least 1 Special Character'];?></h3>
							<h3 id="charCount" style="color:#ff6666; margin-bottom:0px"><i class="mdi mdi-close"></i> <?php echo $lang['At Least 8 Character Letter'];?></h3>
						</center>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 card-block" id="myrightcardblock">
                <form class="form-horizontal" id="loginform" method="post" action="index?module=Change_Password">
                    <center>
                        <div class="user-img">
                            <img
                                style="background-color: #fff; width: 100px; position: relative; display: inline-block; margin: 0 10px 15px 0; border: 1px solid;"
                                src="<?php echo $user->user_profile_img; ?>"
                                alt="user"
                                class="img-circle"
                            />
                            <span class="profile-status online pull-right"></span>
                        </div>
                    </center>
                    <center>
                        <h4><?php echo $user->name; ?></h4>
                    </center>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i style="font-size: 20px;" class="mdi mdi-account-key"></i></div>
                            <input
                                type="password"
                                name="current_password"
                                onkeyup="myFunctionCheckCurrentPassword();"
                                class="form-control"
                                id="current_password"
                                placeholder="<?php echo $lang['current password']; ?>"
                                required="required"
                            />
                            <div class="input-group-addon">
                                <img id="correct" style="width: 30px; display: none;" src="modules/Change_Password/img/correct.png" />
                                <img id="incorrect" style="width: 30px;" src="modules/Change_Password/img/incorrect.png" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group" >
                        <div class="input-group">
                            <div class="input-group-addon"><i style="font-size: 20px;" class="mdi mdi-key"></i></div>
                            <input  type="password" name="new_password" class="form-control" id="new_password" placeholder="<?php echo $lang['new password']; ?>" required="required" onkeyup="checkPasswordStrength();" />
                            <div class="input-group-addon" style="cursor: pointer;" onclick="myFunctionShowPass();" ><i style="font-size: 20px;" id="showPass" class="mdi mdi-eye"></i></div>
                        </div>
                    </div>
                    <p id="new_password_res"></p>
                    <div class="form-group" >
                        <div class="input-group">
                            <div class="input-group-addon"><i style="font-size: 20px;" class="mdi mdi-key-change"></i></div>
                            <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="<?php echo $lang['confirm password']; ?>" required="required" onkeyup="myFunctionCompareNewPassWithConfirmPass();myFunctionReadyToChnage()" />
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
                                name="submit_change"
								id="submit"
								disabled="ture"
                                style="background-image: url('assets/images/logo-button.png'); background-repeat: repeat-y; border-radius: 5px; border-color: #fff;"
                                class="btn btn-info btn-lg btn-block waves-effect waves-light"
                            >
                                <?php echo $lang['Change Password']; ?>
                            </button>
                        </div>
                    </div>
                    <br />
                </form>
            </div>
        </div>
        <br />

        <!--==================================================================================================-->
        <!--==================================================================================================-->
        <!--=========================          end  Fisrt Row          =======================================-->
        <!--==================================================================================================-->
        <!--==================================================================================================-->
        <!--==================================================================================================-->

        <!--==================================================================================================-->
        <!--==================================================================================================-->
        <!-- ================================================================================================ -->
        <!-- End PAge Content -->
        <!--==================================================================================================-->
        <!--==================================================================================================-->

        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
</div>
