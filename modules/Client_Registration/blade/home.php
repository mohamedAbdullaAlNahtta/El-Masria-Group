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
                <h3 class="text-themecolor m-b-0 m-t-0"><?php echo $lang['Login History'] ?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo $lang['Setting'] ?></a></li>
                    <li class="breadcrumb-item active"><?php echo $lang['Login Activity'] ?></li>
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
                        <h1>
                        <?php
                        $xx = new Client();
                        // var_dump($xx->gett_reg_status('12345678912378'));
                        // var_dump($xx->encrypt_pin_num('12345678912345'));
                        // var_dump($xx->decrypt_pin_num('4VcqfMk%2FL9p%2BzqaiELQ%3D'));
                        ?>
                        </h1>
                        <h4 class="card-title"><?php echo $lang['Data Export'] ?></h4>
                        <h6 class="card-subtitle"><?php echo $lang['Export data to Copy, CSV, Excel, PDF & Print'] ?></h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><i class='mdi mdi-account-convert'></i></th>
                                        <th><?php echo $lang['ID'] ?></th>
                                        <th><?php echo $lang['Full Name'] ?></th>
                                        <th><?php echo $lang['Phone Number'] ?></th>
                                        <th><?php echo $lang['National ID'] ?></th>
                                        <th><?php echo $lang['Email'] ?></th>
                                        <th><?php echo $lang['Status'] ?></th>
                                        <th><i class="mdi mdi-eye"></i></th>
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
                                        <th><i class="mdi mdi-eye"></i></th>
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
                                            echo "<td> <img style='width:20px;height:20px;' src='modules/Login_History/img/correct.png'> ".$row["reg_status"]." </td>";
                                        } else {
                                            echo "<td> <img style='width:20px;height:20px;' src='modules/Login_History/img/incorrect.png'> ".$row["reg_status"]." </td>";
                                        }
                                        ?>
                                        <td><button onclick="window.open('modules/Client_Registration/blade/view?national_id=<?php echo htmlentities($row['national_ID']); ?>',' ','width=1000,height=500');" style="width: 35px;height: 35px;padding: 0px;font-size: 18px;" class="btn btn-info btn-circle btn-xl"><i class="mdi mdi-email"></i> </button></td>
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
