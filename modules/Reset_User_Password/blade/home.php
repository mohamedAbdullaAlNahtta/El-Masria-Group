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
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0"><?php echo $lang['Reset User Password'] ?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo $lang['Setting'] ?></a></li>
                    <li class="breadcrumb-item active"><?php echo $lang['Reset User Password'] ?></li>
                </ol>
            </div>
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
        <div class="row">
		<div class="col-12">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title"><?php echo $lang['Data Export'] ?></h4>
                        <h6 class="card-subtitle"><?php echo $lang['Export data to Copy, CSV, Excel, PDF & Print'] ?></h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><i class="mdi mdi-account-multiple-outline"></i></th>
                                        <th><?php echo $lang['User Name']; ?></th>
                                        <th><?php echo $lang['Name']; ?></th>
                                        <th><?php echo $lang['Access Type']; ?></th>
                                        <th><?php  echo $lang['Reset Password'];?> </th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th><i class="mdi mdi-account-multiple-outline"></i></th>
										<th><?php echo $lang['User Name']; ?></th>
                                        <th><?php echo $lang['Name']; ?></th>
                                        <th><?php echo $lang['Access Type']; ?></th>
                                        <th><?php  echo $lang['Reset Password'];?> </th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php 
                                $result = $user->get_system_users();

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {               
                                        echo "<tr>";
                                        echo"<td><i class='mdi mdi-account-multiple-outline'></i> </td>";
                                        echo "<td> <img class='img-circle' style='width:30px;height:30px;' src='".$user->get_user_profile_image_by_user_name($row["username"])."'> ".$row["username"]." </td>";
                                        echo "<td>".$row["name"]." </td>";
                                        if ($row["systemtype"]==='web') {
                                            echo "<td><i class='mdi mdi-google-chrome'></i>  ".$row["systemtype"]." </td>";
                                        } else {
                                            echo "<td> ".$row["systemtype"]." </td>";
                                        }
                                        ?>
                                        <td><button onclick="window.open('index?module=Reset_User_Password&rest_user=<?php echo $row['username'];?>&name=<?php echo $row['name'];?>&company=<?php echo $user->get_company_name_by_id($row['companyId']);?>&access_type=<?php echo $row['systemtype'];?>&user_image=<?php echo $user->get_user_profile_image_by_user_name($row['username']); ?>',' ','width=1200,height=200');" style="width: 35px;height: 35px;padding: 0px;font-size: 18px;" class="btn btn-info btn-circle btn-xl"><i class="fa fa-key"></i> </button> <?php  echo $lang['Reset Password'];?></td>
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
