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
                <h3 class="text-themecolor m-b-0 m-t-0">Commission System</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Sold Units</a></li>
                    <li class="breadcrumb-item active">Commission System</li>
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
        <?php
        $newCommissionSystem = new CommissionSystem;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $selectedOptions = $_POST['empMySelect'];
            $selectedUnit = $_POST['new_unit_id'];
          
            var_dump($selectedOptions);
            var_dump($selectedUnit);
          }
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">
                        <form action="index?module=Employee_Commission" method="post" enctype="multipart/form-data">
                            <h4 class="card-title">Multiple Select</h4>
                            <h6 class="card-subtitle"> Use a <code>select multiple</code> as your input element.</h6>
                            <div class="row">
                                <!--/span-->
                                <div class="col-md-3" >
                                <?php 
                                $result3 = $newCommissionSystem->get_sold_units();
                                ?>
                                    <label class="control-label">Sold Units</label>
                                    <div class="form-group" >
                                        <div class="input-group" bis_skin_checked="1">
                                            <select id="new_unit_id" name="new_unit_id" class="form-control form-control-line">
                                                <option value="xxxx">xxxx</option>
                                                <option value="123">123</option>
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
                                <!-- <table  class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>

                                    </thead>
                                    <tbody>
                                   
                                    </tbody>
                                </table> -->
                                 <!--/span-->
                                 <div class="col-lg-12 col-xlg-12  m-b-30">
                                    <h5 class="box-title">Select Employees from <code>Sales</code> Department Shown as Name===Job Title===area</h5>
                                    <select id='pre-selected-options2'  name="empMySelect[]" multiple='multiple'>
                                        <?php
                                        $result02 = $newCommissionSystem->get_all_sales_emp();
                                        if ($result02->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result02->fetch_assoc()) {               
                                                echo "<option value='".$row["id"]."'> ".$row["name"]."===".$row["job_title"]."===".$row["area"]."</option>";         
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <!--/span-->
                                <div class="col-lg-6 col-xlg-6  m-b-30">
                                    <h5 class="box-title">Select Employees from <code>Contract</code> Department Shown as Name===Job Title</h5>
                                    <select id='pre-selected-options0'  name="empMySelect[]" multiple='multiple'>
                                        <?php
                                        $result00 = $newCommissionSystem->get_all_Contract_emp();
                                        if ($result00->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result00->fetch_assoc()) {               
                                                echo "<option value='".$row["id"]."'> ".$row["name"]."===".$row["job_title"]."</option>";         
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                 <!--/span-->
                                 <div class="col-lg-6 col-xlg-6  m-b-30">
                                    <h5 class="box-title">Select Employees from <code>Operation</code> Department Shown as Name===Job Title</h5>
                                    <select id='pre-selected-options1'  name="empMySelect[]" multiple='multiple'>
                                        <?php
                                        $result01 = $newCommissionSystem->get_all_operation_emp();
                                        if ($result01->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result01->fetch_assoc()) {               
                                                echo "<option value='".$row["id"]."'> ".$row["name"]."===".$row["job_title"]."</option>";         
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                
                            </div>
                            <hr>
                            <div class="form-actions" >
                                <button type="submit" id='submit' name="submit" class="btn btn-success" ><i class="fa fa-check"></i> Save</button>
                            </div>
                        </form>   
                    </div>
                </div>
            </div>
            <div id="overlay" >
                    <div class="card" id="popup">
                        <div class="card-block">
                        <button onclick="myBlurFunction(0);" class="btn btn-inverse"> X </button>
                            <div class="table-responsive m-t-40">
                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th><?php echo $lang['ID']; ?></th>
                                            <th><?php echo $lang['Unit Number']; ?></th> 
                                            <th><?php echo $lang['Building Number']; ?></th>
                                            <th><?php echo $lang['Project Name']; ?></th>
                                            <th><?php echo $lang['Unit Price']; ?></th>
                                            <th><?php echo $lang['Contract Date']; ?></th>
                                            <th><?php echo $lang['Is Over Seas']; ?></th>
                                            <th><?php echo $lang['Is Launch']; ?></th>
                                            <th><?php echo $lang['area']; ?></th>
                                            <th>Select</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th><?php echo $lang['ID']; ?></th>
                                            <th><?php echo $lang['Unit Number']; ?></th> 
                                            <th><?php echo $lang['Building Number']; ?></th>
                                            <th><?php echo $lang['Project Name']; ?></th>
                                            <th><?php echo $lang['Unit Price']; ?></th>
                                            <th><?php echo $lang['Contract Date']; ?></th>
                                            <th><?php echo $lang['Is Over Seas']; ?></th>
                                            <th><?php echo $lang['Is Launch']; ?></th>
                                            <th><?php echo $lang['area']; ?></th>
                                            <th>Select</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                    $newCommissionSystem = new CommissionSystem;

                                    $result = $newCommissionSystem->get_sold_units();

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {               
                                            echo "<tr>";
                                            echo "<td> ".$row["id"]." </td>"; 
                                            echo "<td> ".$row["unit_number"]." </td>"; 
                                            echo "<td> ".$row["building_name"]." </td>"; 
                                            echo "<td> ".$row["project_name"]." </td>"; 
                                            echo "<td> ".$row["unit_price"]." </td>"; 
                                            echo "<td><img src='modules/\Sold_Units/img/dateicon.png' style='border-radius: 50%; border: 1px solid #000;' width='35'>".$row["Contract_Date"]." </td>"; 
                                            echo "<td> ".$row["is_over_seas"]." </td>"; 
                                            echo "<td> ".$row["is_launch"]." </td>"; 
                                            echo "<td> ".$row["area"]." </td>"; 
                                            ?>
                                            <td><button onclick="myFunctionChangeSelectedUnit(<?php echo $row['id']; ?>);myBlurFunction(0);" style="width: 35px;height: 35px;padding: 0px;font-size: 18px;" class="clientIdSelected btn btn-info btn-circle btn-xl"><i class="mdi mdi-home"></i> </button></td>
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
