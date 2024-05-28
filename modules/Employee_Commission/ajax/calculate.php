<?php
/////////////////////////////////////////////////////////////////////////////////
// Powered by ENG Muhammad Abdullah El Nahtta 
// This Class auto loader created from scratch by Powered by ENG Muhammad Abdullah El Nahtta
// Powered by ENG Muhammad Abdullah El Nahtta 
/////////////////////////////////////////////////////////////////////////////////
// you can contact me through mobile number 201093001070 or lanline 20 48 2327352
/////////////////////////////////////////////////////////////////////////////////
//                             &&&&&&&&&&&&&&&&,@                             
//                           &&&&&&&&&&&&&&&&&@&&&%&%                          
//                         *%&%&&%%%%#%%%%%%&%&&&&&&&                          
//                         &&&/,,,,,,...*,*,,***//(&&&%                        
//                       %&%&,,.....,,,,,,,,,,****//%&&                        
//                       %%#*,..... .........,,,,***/#&&                       
//                       &#*...........,...,,,,,,,****%&                       
//                       %(,....,...,......,,,###((***/&&*                     
//                     ..,#*,&#/,****@&*,,%/((#((/((*@#*,*                     
//                     .,..,@,,*(.&@(/,/.,@/((((*//*,*%**/                     
//                       ,,(,/..,,**,./..,**@,**,%&***//*                      
//                        .(,....,,,.....,******,,,,*/#,.                      
//                          (....,(...*..,*//***/#*//%                         
//                          %#,,//#(///((((#*//%%&/(%&                         
//                           #/#/*(..,,,,*,*//**#/%&&.                         
//                            /%#*/,...,,///****#&&&                           
//                             ,*%%#/(*//#(###%&&#/*,                          
//                            ,&..*/&&%&&&&&&&&#***,.&&                        
//                          @%   (....,,*///*****,  ..&&&&&&&&&&@              
//                     &&&&&%%%     *...,,,*,,,    ...&&&&&&&&&&&&&&&&&&&&&    
//             &%%%%%%%&&&%%%%%         ,,,,        .,&&&&&&&&&&&&&&&&&&&&&&&&&
//       %%%&&&%%%%%%%%%%&%%%%%%      @&#%%&&&&%  ...,&&&&&&&%&&&&%%%&&%&&&&&&&
//    %&&&%%%%%%%###%%%#%%%%%%%.     ,(/%#&&&&,.,# ...(&&&&&&&%&&&%%%%%%%%%%%&&
//    %%%%%%%#######%####%%%%%%%   ... *%#&&&,....   .*&&&&%&%%&&&&&%%%%%%%%%&&
//    %%################%%%%%%%&.        %%%&,....    /&&&%&%%%%&&&&&%%%%&&%&&%
//    %%###(#(((#(#(####%%%%%%%&,       %%%&&&...     .&&&&%%%%%&&&&&&&&&&&&&&&
/////////////////////////////////////////////////////////////////////////////////
// you can contact me through mobile number 201093001070 or lanline 20 48 2327352
/////////////////////////////////////////////////////////////////////////////////
// Powered by ENG Muhammad Abdullah El Nahtta 
// This Class auto loader created from scratch by Powered by ENG Muhammad Abdullah El Nahtta
// Powered by ENG Muhammad Abdullah El Nahtta 
/////////////////////////////////////////////////////////////////////////////////

spl_autoload_register("myAutoLoader");
function myAutoLoader($className){
    $server = $_SERVER['DOCUMENT_ROOT'];
    $path = "$server/El-Masria-Group/classes/";
    $extensiontype = ".class.php";
    $fullpath = $path . $className . $extensiontype;

	include $fullpath;

}

session_start();
error_reporting(0);  

http://localhost/El-Masria-Group/modules/Employee_Commission/ajax/calculate?salesText=11,14,15,16&contractText=6,12&operationText=20,21&unitPrice=1000000&area=West&IsLaunch=yes&IsOverSeas=yes

$newCommissionSystem = new CommissionSystem;

$salesText = $_GET['salesText'];
$contractText = $_GET['contractText'];
$operationText = $_GET['operationText'];

$unitPrice = $_GET['unitPrice'];
$area = $_GET['area'];
$IsLaunch = $_GET['IsLaunch'];
$IsOverSeas = $_GET['IsOverSeas'];

// echo $unitPrice;
// echo"<br>";
// echo $area;
// echo"<br>";
// echo $IsLaunch;
// echo"<br>";
// echo $IsOverSeas;
// echo"<br>";


$salesArr = explode(',', $salesText);
$contractArr = explode(',', $contractText);
$operationArr = explode(',', $operationText);

// var_dump($salesArr);
// echo"<br>";
// var_dump($contractArr);
// echo"<br>";
// var_dump($operationArr);
// echo"<br>";

// $empArr, $unitPrice, $area, $IsLaunch, $IsOverSeas
// var_dump($newCommissionSystem->calculate_Sales_commission($salesArr, $unitPrice, $area, $IsLaunch, $IsOverSeas));
// echo"<br>";
// var_dump($newCommissionSystem->calculate_Contract_commission($contractArr, $unitPrice, $area, $IsLaunch, $IsOverSeas));
// echo"<br>";
// var_dump($newCommissionSystem->calculate_operation_commission($operationArr, $unitPrice, $area, $IsLaunch, $IsOverSeas));
// echo"<br>";

$Sales_commission = $newCommissionSystem->calculate_Sales_commission($salesArr, $unitPrice, $area, $IsLaunch, $IsOverSeas);
$Contract_commission = $newCommissionSystem->calculate_Contract_commission($contractArr, $unitPrice, $area, $IsLaunch, $IsOverSeas);
$operation_commission = $newCommissionSystem->calculate_operation_commission($operationArr, $unitPrice, $area, $IsLaunch, $IsOverSeas);

echo "<table id='example23' class='display nowrap table table-hover table-striped table-bordered' cellspacing='0' width='100%'>
    <thead>
        <tr>
            <th> ID </th>
            <th> name </th> 
            <th> Manager </th>
            <th> department </th>
            <th> area </th>
            <th> job title </th>
            <th> mobile </th>
            <th> bank account </th>
            <th> level </th>
            <th> Commission </th>
        </tr>
    </thead>
    <tbody>";     
    foreach ($Sales_commission as $x => $y) {
        // echo "$x : $y <br>";
        echo "<tr>";
        echo "<td><i class='mdi mdi-account-card-details'></i> ".$newCommissionSystem->get_emp_data_by_id($x)['id']."</td>"; 
        echo "<td>".$newCommissionSystem->get_emp_data_by_id($x)['name']."</td>"; 
        echo "<td>".$newCommissionSystem->get_emp_data_by_id($x)['Manager']."</td>"; 
        echo "<td><img src='assets/images/bg/department.png' style='border-radius: 50%; border: 1px solid #000;' width='35'> ".$newCommissionSystem->get_emp_data_by_id($x)['department']."</td>"; 
        echo "<td>".$newCommissionSystem->get_emp_data_by_id($x)['area']."</td>"; 
        echo "<td>".$newCommissionSystem->get_emp_data_by_id($x)['job_title']."</td>"; 
        echo "<td><img src='assets/images/test/custom-select.png' style='border-radius: 50%; border: 1px solid #000;' width='35'> ".$newCommissionSystem->get_emp_data_by_id($x)['mobile']."</td>"; 
        echo "<td> <img src='assets/images/bg/bank.png' style='border-radius: 50%; border: 1px solid #000;' width='35'>".$newCommissionSystem->get_emp_data_by_id($x)['bank_account']."</td>"; 
        echo "<td>".$newCommissionSystem->get_emp_data_by_id($x)['level']."</td>"; 
        echo "<td>".$y."</td>"; 
        echo "</tr>"; 
    }     
    foreach ($Contract_commission as $a => $b) {
        // echo "$x : $y <br>";
        echo "<tr>";
        echo "<td><i class='mdi mdi-account-card-details'></i> ".$newCommissionSystem->get_emp_data_by_id($a)['id']."</td>"; 
        echo "<td>".$newCommissionSystem->get_emp_data_by_id($a)['name']."</td>"; 
        echo "<td>".$newCommissionSystem->get_emp_data_by_id($a)['Manager']."</td>"; 
        echo "<td><img src='assets/images/bg/department.png' style='border-radius: 50%; border: 1px solid #000;' width='35'> ".$newCommissionSystem->get_emp_data_by_id($a)['department']."</td>"; 
        echo "<td>".$newCommissionSystem->get_emp_data_by_id($a)['area']."</td>"; 
        echo "<td>".$newCommissionSystem->get_emp_data_by_id($a)['job_title']."</td>"; 
        echo "<td><img src='assets/images/test/custom-select.png' style='border-radius: 50%; border: 1px solid #000;' width='35'> ".$newCommissionSystem->get_emp_data_by_id($a)['mobile']."</td>"; 
        echo "<td><img src='assets/images/bg/bank.png' style='border-radius: 50%; border: 1px solid #000;' width='35'> ".$newCommissionSystem->get_emp_data_by_id($a)['bank_account']."</td>"; 
        echo "<td>".$newCommissionSystem->get_emp_data_by_id($a)['level']."</td>"; 
        echo "<td>".$b."</td>"; 
        echo "</tr>"; 
    } 
    foreach ($operation_commission as $c => $d) {
        // echo "$x : $y <br>";
        echo "<tr>";
        echo "<td><i class='mdi mdi-account-card-details'></i> ".$newCommissionSystem->get_emp_data_by_id($c)['id']."</td>"; 
        echo "<td>".$newCommissionSystem->get_emp_data_by_id($c)['name']."</td>"; 
        echo "<td>".$newCommissionSystem->get_emp_data_by_id($c)['Manager']."</td>"; 
        echo "<td><img src='assets/images/bg/department.png' style='border-radius: 50%; border: 1px solid #000;' width='35'> ".$newCommissionSystem->get_emp_data_by_id($c)['department']."</td>"; 
        echo "<td>".$newCommissionSystem->get_emp_data_by_id($c)['area']."</td>"; 
        echo "<td>".$newCommissionSystem->get_emp_data_by_id($c)['job_title']."</td>"; 
        echo "<td><img src='assets/images/test/custom-select.png' style='border-radius: 50%; border: 1px solid #000;' width='35'> ".$newCommissionSystem->get_emp_data_by_id($c)['mobile']."</td>"; 
        echo "<td><img src='assets/images/bg/bank.png' style='border-radius: 50%; border: 1px solid #000;' width='35'> ".$newCommissionSystem->get_emp_data_by_id($c)['bank_account']."</td>"; 
        echo "<td>".$newCommissionSystem->get_emp_data_by_id($c)['level']."</td>"; 
        echo "<td>".$d."</td>"; 
        echo "</tr>"; 
    }             
echo "</tbody>
</table>";


?>