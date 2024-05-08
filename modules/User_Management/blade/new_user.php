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
        <div class="row" bis_skin_checked="1">
            <div class="col-3" bis_skin_checked="1">
                <button onclick="location.href='index?module=User_Management'" class="btn pull-left hidden-sm-down btn-success"><i class="mdi mdi-arrow-left-bold"></i> Back</button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-block">
                        <div class="tab-pane active" id="TicketInfo" role="tabpanel" bis_skin_checked="1" aria-expanded="true">
                            <div class="card-block" bis_skin_checked="1">
                                <div class="form-body" bis_skin_checked="1">
                                    <h3 class="card-title">New Ticket</h3>
                                    <div class="row p-t-20" bis_skin_checked="1">
                                        <!--/span-->
                                        <div class="col-md-2" bis_skin_checked="1">
                                            <label class="control-label">Company</label>
                                            <div class="form-group" bis_skin_checked="1">
                                                <select id="myselect" name="new_ticket_company" class="form-control form-control-line">
                                                    <option value="1">Arabicss</option>
                                                    <option value="215">Diet-Hub</option>
                                                    <option value="216">Shefae</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-2" bis_skin_checked="1">
                                            <label class="control-label">Ticket Type</label>
                                            <div class="form-group" bis_skin_checked="1">
                                                <select id="new_ticket_type" name="new_ticket_type" class="form-control form-control-line">
                                                    <option value="Inquiry">Inquiry</option>

                                                    <option value="Request">Request</option>

                                                    <option value="Technical Issue">Technical Issue</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-3" bis_skin_checked="1">
                                            <label class="control-label">Reported By</label>
                                            <div class="form-group" bis_skin_checked="1">
                                                <input type="text" id="" name="new_reported_by" class="form-control" placeholder="" required="required" />
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <!--/span-->
                                        <div class="col-md-3" id="new_remote_session_num" bis_skin_checked="1">
                                            <label class="control-label">Remote Session number</label>
                                            <div class="form-group" bis_skin_checked="1">
                                                <input type="text" id="new_remote_session_num_inp" name="new_remote_session_num" class="form-control" placeholder="" />
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-2" bis_skin_checked="1">
                                            <label>Status</label>
                                            <div class="form-group" bis_skin_checked="1">
                                                <select id="new_ticket_status" name="new_ticket_status" class="form-control form-control-line">
                                                    <option value="Open">Open</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Handled">Handled</option>
                                                    <option value="Cancelled">Cancelled</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <!--/span-->
                                        <div class="col-md-3" id="new_handled_by" style="display: none;" bis_skin_checked="1">
                                            <label class="control-label">Handled By</label>
                                            <div class="form-group" bis_skin_checked="1">
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
                                    <div class="row" bis_skin_checked="1">
                                        <!--/span-->
                                        <div id="" class="col-md-.5 col-xs-6" style="padding-left: 1%;" bis_skin_checked="1">
                                            <img src="modules/Technical_Support_Ticket/img/dateicon.png" style="border-radius: 50%; border: 1px solid #000; margin-top: 20px;" width="50" />
                                        </div>
                                        <div class="col-md-3" bis_skin_checked="1">
                                            <label class="control-label">Creation Date</label>
                                            <div class="form-group" bis_skin_checked="1">
                                                <input type="text" id="" name="new_creation_date" class="form-control" readonly="true" placeholder="2024-05-08 02:18:41 AM" />
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <!--/span-->
                                        <div id="" class="col-md-.5 col-xs-6" bis_skin_checked="1">
                                            <img alt="user image" src="assets/images/User_profile_img/User-default.png" style="border-radius: 50%; border: 1px solid #000; margin-top: 20px;" width="50" />
                                        </div>
                                        <div class="col-md-2.5 col-xs-6" bis_skin_checked="1">
                                            <label class="control-label"> Created By</label>
                                            <div class="form-group" bis_skin_checked="1">
                                                <input type="text" id="" name="new_created_by" class="form-control" readonly="true" value="admin.01" placeholder="admin.01" />
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="card-block" bis_skin_checked="1">
                                        <!--/hr-->
                                        <hr>
                                        <div class="form-actions" bis_skin_checked="1">
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
