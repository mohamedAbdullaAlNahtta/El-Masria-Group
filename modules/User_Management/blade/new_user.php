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
<?php 

if(isset($_POST['submit'])){

    $new_full_name = $_POST['new_full_name'];
    $new_user_name = $_POST['new_user_name'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    $new_client_id = $_POST['new_client_id'];
    $new_user_role = $_POST['new_user_role'];
    $new_user_access_type =$_POST['new_user_access_type'];

} else {
    // do nothing 
}


?>

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
                                <form action="index?module=User_Management&create_user=true" method="post" enctype="multipart/form-data">
                                    <div class="form-body" >
                                        <h3 class="card-title">New User Account</h3>
                                        <?php 

if(isset($_POST['submit'])){
echo $new_full_name;
echo '<br>';
echo $new_user_name;
echo '<br>';
echo $new_password;
echo '<br>';
echo $confirm_password;
echo '<br>';
echo $new_client_id;
echo '<br>';
echo $new_user_role;
echo '<br>';
echo $new_user_access_type;
}

                                        ?>
                                        <div class="row p-t-20" >
                                            <!--/span-->
                                            <div class="col-md-3" >
                                                <label class="control-label">Name</label>
                                                <div class="form-group" >
                                                    <input type="text" id="full_name" name="new_full_name" class="form-control" placeholder="" required="required" />
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-2" >
                                                <label class="control-label">User Name</label>
                                                <div class="form-group" >
                                                    <input type="text" id="new_user_name" name="new_user_name" class="form-control" placeholder="" required="required" />
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-3" id="new_remote_session_num" >
                                                <label class="control-label">Password</label>
                                                <div class="form-group" >
                                                    <div class="input-group" >
                                                        <div class="input-group-addon" ><i style="font-size: 20px;" class="mdi mdi-key"></i></div>
                                                        <input type="password" name="new_password" class="form-control" id="new_password" placeholder="new password" required="required">
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
                                            <div class="col-md-3" >
                                            <?php 
                                            $user_manage = new user_management;
                                            $result3 = $user_manage->get_client_id();
                                            ?>
                                                <label class="control-label">Linked Customer</label>
                                                <div class="form-group" >
                                                    <div class="input-group" bis_skin_checked="1">
                                                        <select id="new_client_id" name="new_client_id" class="form-control form-control-line">
                                                        <?php 
                                                        if ($result3->num_rows > 0) {
                                                            // output data of each row
                                                            while($row = $result3->fetch_assoc()) { 
                                                                echo "<option value='".$row["id"]."'>".$row["id"]."</option>";
                                                            }
                                                        }
                                                        ?>
                                                        </select>
                                                        <div class="input-group-addon" style="cursor: pointer;" onclick="myBlurFunction(1)"><i style="font-size: 20px;" class="mdi mdi-account-search"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <!--/span-->
                                            <div class="col-md-2" >
                                            <?php 
                                            $result = $user_manage->get_user_role();
                                            ?>
                                                <label>User Role</label>
                                                <div class="form-group" >
                                                    <select id="new_user_role" name="new_user_role" class="form-control form-control-line">
                                                    <?php 
                                                    if ($result->num_rows > 0) {
                                                        // output data of each row
                                                        while($row = $result->fetch_assoc()) { 
                                                            echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
                                                        }
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <!--/span-->
                                            <div class="col-md-3" id="new_handled_by">
                                            <?php 
                                            $result1 = $user_manage->get_user_systemtype();
                                            ?>
                                                <label class="control-label">Access Type</label>
                                                <div class="form-group" >
                                                    <select id="new_user_access_type" name="new_user_access_type" class="form-control form-control-line">
                                                        <?php 
                                                        if ($result1->num_rows > 0) {
                                                            // output data of each row
                                                            while($row = $result1->fetch_assoc()) { 
                                                                echo "<option value='".$row["systemType"]."'>".$row["systemType"]."</option>";
                                                            }
                                                        }
                                                        ?>
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
                                                <img src="modules/User_Management/img/dateicon.png" style="border-radius: 50%; border: 1px solid #000; margin-top: 20px;" width="50" />
                                            </div>
                                            <div class="col-md-3" >
                                                <label class="control-label">Creation Date</label>
                                                <div class="form-group" >
                                                    <input type="text" id="" name="new_creation_date" class="form-control" readonly="true" placeholder="<?php echo htmlentities(date("Y-m-d h:i:s A")); ?>" />
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <!--/span-->
                                            <div id="" class="col-md-.5 col-xs-6" >
                                                <img alt="user image" src="<?php echo $user->user_profile_img; ?>" style="border-radius: 50%; border: 1px solid #000; margin-top: 20px;" width="50" />
                                            </div>
                                            <div class="col-md-2.5 col-xs-6" >
                                                <label class="control-label"> Created By</label>
                                                <div class="form-group" >
                                                    <input type="text" id="" name="new_created_by" class="form-control" readonly="true" value="<?php echo $user->name; ?>" placeholder="<?php echo $user->name; ?>" />
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
                                </form>    
                            </div>
                        </div>

                    </div>
                </div>
                <div id="overlay"> 
                    <div class="card" id="popup">
                        <!-- <a href="javascript:myBlurFunction(0);">X</a>  -->
                            <div class="card-block">
                            <button onclick="myBlurFunction(0);" class="btn btn-inverse"> X </button>
                            <h1>
                            <?php
                            $xx = new Client();
                            ?>
                            </h1>
                            <div class="table-responsive m-t-40">
                                <table id="example24" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th><i class='mdi mdi-account-convert'></i></th>
                                            <th><?php echo $lang['ID'] ?></th>
                                            <th><?php echo $lang['Full Name'] ?></th>
                                            <th><?php echo $lang['Phone Number'] ?></th>
                                            <th><?php echo $lang['National ID'] ?></th>
                                            <th><?php echo $lang['Email'] ?></th>
                                            <th><?php echo $lang['Status'] ?></th>
                                            <th><i class="mdi mdi-account-check"></i> Select</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th><i class='mdi mdi-account-convert'></i></th>
                                            <th><?php echo $lang['ID'] ?></th>
                                            <th><?php echo $lang['Full Name'] ?></th>
                                            <th><?php echo $lang['Phone Number'] ?></th>
                                            <th><?php echo $lang['National ID'] ?></th>
                                            <th><?php echo $lang['Email'] ?></th>
                                            <th><?php echo $lang['Status'] ?></th>
                                            <th><i class="mdi mdi-account-check"></i> Select</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                    $clients = new Client();
                                    $result = $clients->get_unregistered_client();
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {               
                                            echo "<tr>";
                                            echo"<td><i class='mdi mdi-account-convert'></i> </td>";
                                            echo "<td> ".$row["id"]." </td>";
                                            echo "<td>".$row["full_name"]." </td>";
                                            echo "<td> ".$row["phone_number"]." </td>";
                                            echo "<td> ".$row["national_ID"]." </td>";
                                            echo "<td> ".$row["email"]." </td>";
                                            if ($row["reg_status"]==='registered') {
                                                echo "<td> <img style='width:20px;height:20px;' src='modules/Client_Registration/img/correct.png'> ".$row["reg_status"]." </td>";
                                            } else {
                                                echo "<td> <img style='width:20px;height:20px;' src='modules/Client_Registration/img/incorrect.png'> ".$row["reg_status"]." </td>";
                                            }
                                            ?>
                                            <td><button onclick="myFunctionChangeSelectedClient(<?php echo $row['id']; ?>);myBlurFunction(0);" style="width: 35px;height: 35px;padding: 0px;font-size: 18px;" class="clientIdSelected btn btn-info btn-circle btn-xl"><i class="mdi mdi-account-check"></i> </button></td>
                                            <?php        
                                            echo "</tr>";          
                                        }
                                    }
                                    ?>

                                   
                                    </tbody>
                                </table>
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
