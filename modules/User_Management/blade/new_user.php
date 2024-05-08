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
        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0"><?php echo $lang['System Administration']; ?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo $lang['Security']; ?></a></li>
                    <li class="breadcrumb-item active"><?php echo $lang['User Management']; ?></li>
                </ol>
            </div>
        </div>
        <!-- Bread crumb and right sidebar toggle -->
        <div class="row" >
            <div class="col-3" >
                <button onclick="location.href='index?module=User_Management'" class="btn pull-left hidden-sm-down btn-success"><i class="mdi mdi-arrow-left-bold"></i> Back</button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-block">
                        <div class="tab-pane active" id="TicketInfo" role="tabpanel"  aria-expanded="true">
                            <div class="card-block" >
                                <div class="form-body" >
                                    <h3 class="card-title">New Ticket</h3>
                                    <div class="row p-t-20" >
                                        <!--/span-->
                                        <div class="col-md-3" >
                                            <label class="control-label">Name</label>
                                            <div class="form-group" >
                                                <input type="text" id="" name="new_reported_by" class="form-control" placeholder="" required="required" />
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-3" >
                                            <label class="control-label">User Name</label>
                                            <div class="form-group" >
                                                <input type="text" id="" name="new_reported_by" class="form-control" placeholder="" required="required" />
                                            </div>
                                        </div>
                                         <!--/span-->
                                         <div class="col-md-3" id="new_remote_session_num" >
                                            <label class="control-label">Password</label>
                                            <div class="form-group" >
                                                <div class="input-group" >
                                                    <div class="input-group-addon" ><i style="font-size: 20px;" class="mdi mdi-key"></i></div>
                                                    <input type="password" name="new_password" class="form-control" id="new_password" placeholder="new password" required="required" onkeyup="checkPasswordStrength();">
                                                    <div class="input-group-addon" style="cursor: pointer;" onclick="myFunctionShowPass();" ><i style="font-size: 20px;" id="showPass" class="mdi mdi-eye"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-3" id="new_remote_session_num" >
                                            <label class="control-label">Confirm Password</label>
                                            <div class="form-group" >
                                                <div class="input-group" >
                                                    <div class="input-group-addon" ><i style="font-size: 20px;" class="mdi mdi-key-change"></i></div>
                                                    <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="confirm password" required="required" onkeyup="myFunctionCompareNewPassWithConfirmPass();myFunctionReadyToChnage()">
                                                    <div class="input-group-addon" >
                                                        <img id="correctRetype" style="width: 30px; display: none;" src="modules/Change_Password/img/correct.png">
                                                        <img id="incorrectRetype" style="width: 30px;" src="modules/Change_Password/img/incorrect.png">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-2" >
                                            <label class="control-label">Access Type</label>
                                            <div class="form-group" >
                                                <select id="new_ticket_type" name="new_ticket_type" class="form-control form-control-line">
                                                    <option value="Inquiry">Inquiry</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <!--/span-->
                                        <div class="col-md-2" >
                                            <label>User Role</label>
                                            <div class="form-group" >
                                                <select id="new_ticket_status" name="new_ticket_status" class="form-control form-control-line">
                                                    <option value="Open">Open</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <!--/span-->
                                        <div class="col-md-3" id="new_handled_by" style="display: none;" >
                                            <label class="control-label">Handled By</label>
                                            <div class="form-group" >
                                                <select id="new_handled_by_select" name="new_handled_by" class="form-control form-control-line">
                                                    <option value="">Choose One</option>
                                                    <option value="Eng Muhammad ElNahtta">Eng Muhammad ElNahtta</option>
                                                    <option value="Eng Marwa Awad">Eng Marwa Awad</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <!--/row-->
                                    <hr />
                                    <div class="row" >
                                        <!--/span-->
                                        <div id="" class="col-md-.5 col-xs-6" style="padding-left: 1%;" >
                                            <img src="modules/Technical_Support_Ticket/img/dateicon.png" style="border-radius: 50%; border: 1px solid #000; margin-top: 20px;" width="50" />
                                        </div>
                                        <div class="col-md-3" >
                                            <label class="control-label">Creation Date</label>
                                            <div class="form-group" >
                                                <input type="text" id="" name="new_creation_date" class="form-control" readonly="true" placeholder="2024-05-08 02:18:41 AM" />
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <!--/span-->
                                        <div id="" class="col-md-.5 col-xs-6" >
                                            <img alt="user image" src="assets/images/User_profile_img/User-default.png" style="border-radius: 50%; border: 1px solid #000; margin-top: 20px;" width="50" />
                                        </div>
                                        <div class="col-md-2.5 col-xs-6" >
                                            <label class="control-label"> Created By</label>
                                            <div class="form-group" >
                                                <input type="text" id="" name="new_created_by" class="form-control" readonly="true" value="admin.01" placeholder="admin.01" />
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="card-block" >
                                        <!--/hr-->
                                        <hr>
                                        <div class="form-actions" >
                                            <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-check"></i> Save</button>
                                            <button type="button" onclick="location.href='index?module=User_Management'" class="btn btn-inverse">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
</div>
