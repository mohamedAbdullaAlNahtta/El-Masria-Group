<?php
/////////////////////////////////////////////////////////////////////////////////
// Powered by ENG Muhammad Abdullah El Nahtta 
// This Class created from scratch by Powered by ENG Muhammad Abdullah El Nahtta
// Powered by ENG Muhammad Abdullah El Nahtta 
/////////////////////////////////////////////////////////////////////////////////
// you can contact me through mobile number 201093001070 or lanline 20 48 2327352
/////////////////////////////////////////ZIZI////////////////////////////////////
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
//////////////////////////////////////////ZIZI///////////////////////////////////
// you can contact me through mobile number 201093001070 or lanline 20 48 2327352
/////////////////////////////////////////////////////////////////////////////////
// Powered by ENG Muhammad Abdullah El Nahtta 
// This Class created from scratch by Powered by ENG Muhammad Abdullah El Nahtta
// Powered by ENG Muhammad Abdullah El Nahtta 
/////////////////////////////////////////////////////////////////////////////////
class ElmasriaPortal
{
    public $client_id;
    public $client_data;
    

    public $ClientID;
    public $UnitID;
    public $ProjectID;
    public $BuildingID;
    public $IDNumber;
    public $IDType;
    public $ProjectName;
    public $BuildingName;
    public $UnitNumber;
    public $ClientName;
    public $IsOverSeas;
    public $HasLawProcedures;
    public $Reservationdate;
    public $ContractDate;
    public $ContractReceivingDate;
    public $ActualReceivingDate;
    public $ContractingMethod;



    function __construct($ClientID) {
        $this->client_data = $ClientID;

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.elmasriagroupco.com/api/Customers/GetCustomerUnits?ID='.$ClientID.'&IDType=1',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Basic QVBJVXNlcjpvVWk5NEEyUiFRQ3g='
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $res = json_decode($response, true);

        $this->ClientID = $res[0]["ClientID"];
        $this->UnitID = $res[0]["UnitID"];
        $this->ProjectID = $res[0]["ProjectID"];
        $this->BuildingID = $res[0]["BuildingID"];
        $this->IDNumber = $res[0]["IDNumber"];
        $this->IDType = $res[0]["IDType"];
        $this->ProjectName = $res[0]["ProjectName"];
        $this->BuildingName = $res[0]["BuildingName"];
        $this->UnitNumber = $res[0]["UnitNumber"];
        $this->ClientName = $res[0]["ClientName"];
        $this->IsOverSeas = $res[0]["IsOverSeas"];
        $this->HasLawProcedures = $res[0]["HasLawProcedures"];
        $this->Reservationdate = $res[0]["Reservationdate"];
        $this->ContractDate = $res[0]["ContractDate"];
        $this->ContractReceivingDate = $res[0]["ContractReceivingDate"];
        $this->ActualReceivingDate = $res[0]["ActualReceivingDate"];
        $this->ContractingMethod = $res[0]["ContractingMethod"];


      }

    // public function getUnitData(){


    // }

}

?>