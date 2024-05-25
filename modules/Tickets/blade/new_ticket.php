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

$user_manage = new user_management;

if(isset($_POST['submit'])){

    $new_full_name = $_POST['new_full_name'];
    $new_user_name = $_POST['new_user_name'];
    $new_password = $_POST['new_password'];
    $new_client_id = $_POST['new_client_id'];
    $new_user_role = $_POST['new_user_role'];
    $new_user_access_type =$_POST['new_user_access_type'];
    $new_user_status = $_POST['new_user_status'];
    $created_by = $user->username;

    $create_new_user = $user_manage->add_user($new_full_name, $new_user_name, $new_password, $new_user_role,  $new_user_access_type, $new_user_status, $created_by, $new_client_id);

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
                <h3 class="text-themecolor m-b-0 m-t-0"><?php echo $lang['Tickets']; ?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo $lang['Support']; ?></a></li>
                    <li class="breadcrumb-item active"><?php echo $lang['Tickets']; ?></li>
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
