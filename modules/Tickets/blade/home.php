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
                <h3 class="text-themecolor m-b-0 m-t-0"><?php echo $lang['Tickets']; ?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo $lang['Support']; ?></a></li>
                    <li class="breadcrumb-item active"><?php echo $lang['Tickets']; ?></li>
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
                        <button class="btn pull-right hidden-sm-down btn-success" onclick="location.href='index?module=Tickets&create_ticket=true';"><i class="mdi mdi-plus-circle"></i> Create Ticket </button>
                        <h4 class="card-title"><?php echo $lang['Data Export'] ;?></h4>
                        <h6 class="card-subtitle"><?php echo $lang['Export data to Copy, CSV, Excel, PDF & Print'] ;?></h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><i class='mdi mdi-account-convert'></i></th>
                                        <th>ID</th>
                                        <th>Ticket Type</th>
                                        <th>Client ID</th>
                                        <!-- <th>user_input</th>
                                        <th>Project_Name</th>
                                        <th>unit_number</th>
                                        <th>building_name</th> -->
                                        <!-- <th>support_input</th> -->
                                        <th>Created By</th>
                                        <th>Creation Date</th>
                                        <th>Contact Number</th>
                                        <th>Ticket Status</th>
                                        <th>Last Update</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th><i class='mdi mdi-account-convert'></i></th>
                                        <th>id</th>
                                        <th>ticket_type</th>
                                        <th>client_id</th>
                                        <!-- <th>user_input</th>
                                        <th>Project_Name</th>
                                        <th>unit_number</th>
                                        <th>building_name</th> -->
                                        <!-- <th>support_input</th> -->
                                        <th>created_by</th>
                                        <th>creation_date</th>
                                        <th>contact_number</th>
                                        <th>Ticket Status</th>
                                        <th>Last Update</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php 
                                $user_support_tickets = new support_ticket;
                                $user_manger = new user_management;
                                $result11 = $user_manger->get_my_user_role_by_username($user->username);
                                // output data of each row
                                while($row = $result11->fetch_assoc()) {
                                        $my_user_role_name =  $row["name"];
                                }

                                if ($my_user_role_name=="client") {
                                    $result = $user_support_tickets->get_client_tickets($user_manger->get_user_client_id($user->username));
                                    $end_user= new user();

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {               
                                            echo "<tr>";
                                            echo "<td> <i class='mdi mdi-account-convert'></i></td>";
                                            echo "<td> ".$row["id"]." </td>";
                                            echo "<td> ".$row["ticket_type"]." </td>";
                                            echo "<td> ".$row["client_id"]." </td>";
                                            echo "<td>  <img alt='user image' src='".$end_user->get_user_profile_image_by_user_name($row["created_by"])."' 
                                            style='border-radius: 50%; border: 1px solid #000;' width='35'> ".$row["created_by"]." </td>";
                                            echo "<td> <img src='modules/Tickets/img/dateicon.png' style='border-radius: 50%; border: 1px solid #000;' width='35'> ".$row["creation_date"]." </td>";
                                            echo "<td> <img src='assets/images/test/custom-select.png' style='border-radius: 50%; border: 1px solid #000;' width='35'>  ".$row["contact_number"]." </td>";
                                            echo "<td>  ".$row["ticket_status"]." </td>";
                                            echo "<td>  ".$row["last_update_date"]." </td>";
                                            echo"<td>
                                                    <a href='index?module=Tickets&view_ticket=".$row["id"]."' data-toggle='tooltip' data-original-title='View'><i class='mdi mdi-eye'></i></a> 
                                                    <a href='index?module=Tickets&edit_ticket=".$row["id"]."' data-toggle='tooltip' data-original-title='Edit'><i class='mdi mdi-lead-pencil'></i></a> 
                                                </td>";
                                            echo "</tr>";          
                                        }
                                    }
                                } else {
                                    $result = $user_support_tickets->get_all_tickets();
                                    $end_user= new user();

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {               
                                            echo "<tr>";
                                            echo "<td> <i class='mdi mdi-account-convert'></i></td>";
                                            echo "<td> ".$row["id"]." </td>";
                                            echo "<td> ".$row["ticket_type"]." </td>";
                                            echo "<td> ".$row["client_id"]." </td>";
                                            echo "<td>  <img alt='user image' src='".$end_user->get_user_profile_image_by_user_name($row["created_by"])."' 
                                            style='border-radius: 50%; border: 1px solid #000;' width='35'> ".$row["created_by"]." </td>";
                                            echo "<td> <img src='modules/Tickets/img/dateicon.png' style='border-radius: 50%; border: 1px solid #000;' width='35'> ".$row["creation_date"]." </td>";
                                            echo "<td> <img src='assets/images/test/custom-select.png' style='border-radius: 50%; border: 1px solid #000;' width='35'>  ".$row["contact_number"]." </td>";
                                            echo "<td>  ".$row["ticket_status"]." </td>";
                                            echo "<td>  ".$row["last_update_date"]." </td>";
                                            echo"<td>
                                                    <a href='index?module=Tickets&view_ticket=".$row["id"]."' data-toggle='tooltip' data-original-title='View'><i class='mdi mdi-eye'></i></a> 
                                                    <a href='index?module=Tickets&edit_ticket=".$row["id"]."' data-toggle='tooltip' data-original-title='Edit'><i class='mdi mdi-lead-pencil'></i></a> 
                                                </td>";
                                            echo "</tr>";          
                                        }
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
