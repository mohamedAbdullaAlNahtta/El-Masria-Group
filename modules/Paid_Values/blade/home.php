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
                <h3 class="text-themecolor m-b-0 m-t-0"><?php echo $lang['Paid Value'] ?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo $lang['Paid Value'] ?></a></li>
                    <li class="breadcrumb-item active"><?php echo $lang['Review Payments'] ?></li>
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
                        <div class="table-responsive m-t-40">
                            <div>
                            <?php
                            $new_client = new ElmasriaPortal("27507230103983");
                            ?>
                            </div>
                            <table class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><i class="mdi mdi-bank" style="color:#009efb;"></i> <?php echo $lang['Project Name']; ?></th>
                                        <td><i class="mdi mdi-home-modern"style="color:#009efb;"></i> <?php echo $lang['Building Name']; ?></th>
                                        <th><i class="mdi mdi-barcode"style="color:#009efb;"></i> <?php echo $lang['Unit Number']; ?></th>
                                        <th><?php echo $lang['Is Over Seas']; ?></th>
                                        <th><i class="mdi mdi-calendar-plus"style="color:#009efb;"></i> <?php echo $lang['Reservation Date']; ?></th>
                                        <th><i class="mdi mdi-calendar-check"style="color:#009efb;"></i> <?php echo $lang['Contract Date']; ?></th>
                                        <th><i class="mdi mdi-calendar-multiple-check"style="color:#009efb;"></i> <?php echo $lang['Contract Receiving Date']; ?></th>
                                        <th><i class="mdi mdi-calendar-clock"style="color:#009efb;"></i> <?php echo $lang['Actual Receiving Date']; ?></th>
                                        <th><?php echo $lang['Contracting Metdod']; ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th><?php echo $new_client->ProjectName; ?></th>
                                        <th><?php echo $new_client->BuildingName; ?></th>
                                        <th><?php echo $new_client->UnitNumber; ?></th>
                                        <th>. <?php echo $new_client->IsOverSeas; ?></th>
                                        <th><?php echo $new_client->Reservationdate; ?></th>
                                        <th><?php echo $new_client->ContractDate; ?></th>
                                        <th><?php echo $new_client->ContractReceivingDate; ?></th>                                       
                                        <th>. <?php echo $new_client->ActualReceivingDate; ?></th>
                                        <th><?php echo $new_client->ContractingMethod; ?></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-block">
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><?php echo $lang['Project']; ?></th>
                                        <th><?php echo $lang['Paied Amount']; ?></th>
                                        <th><?php echo $lang['Collection Type']; ?></th>
                                        <th><?php echo $lang['Comments']; ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    for ($x = 0; $x < count($new_client->PaidValues); $x++) {
                                        echo "<tr>";
                                        echo "<td><i class='mdi mdi-calendar-blank'></i> ".$new_client->PaidValues[$x]["CollectionDate"] ."</td>";

                                        ////////////////////////////////////////////////////////
                                        // checking postive value 
                                        echo "<td> <img style='width:20px;height:20px;' src='modules/Paid_Values/img/";
                                        // coloring postive value 
                                        if ($new_client->PaidValues[$x]["PaiedAmount"]>0) {
                                            echo 'grrn mi.png';
                                        } else {
                                            echo 'mi.png';
                                        }
                                        echo"'> ".$new_client->PaidValues[$x]["PaiedAmount"]."</td>";
                                        ////////////////////////////////////////////////////////



                                        ////////////////////////////////////////////////////////
                                        // checking postive value 
                                        echo "<td><i class='mdi ";
                                        if ($new_client->PaidValues[$x]["CollectionType"]=="شيكات") {
                                            echo"mdi-note-text";
                                        } else {
                                            echo "mdi mdi-cash";
                                        }
                                        echo"'></i> ".$new_client->PaidValues[$x]["CollectionType"] ."</td>";
                                        ////////////////////////////////////////////////////////
                                        echo "<td>".$new_client->PaidValues[$x]["Comments"] ."</td>";
                                        ////////////////////////////////////////////////////////
                                        echo "</tr>";
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
