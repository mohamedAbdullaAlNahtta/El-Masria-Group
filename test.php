<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.elmasriagroupco.com/api/Customers/GetCustomerUnits?ID=27507230103983&IDType=1',
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

$testy= json_decode($response, true);

var_dump($testy);
echo"<br>";

echo $testy[0]["UnitID"];

echo"<br>";

echo $testy[0]["UnitDetails"][0]["InstallmentName"];

echo"<br>";

$payment = $testy[0]["UnitDetails"];

echo $payment_len = count($testy[0]["UnitDetails"]);

echo"<br>";

var_dump($payment);

echo"<br>";

for ($x = 0; $x < $payment_len; $x++) {

  echo "InstallmentName: ".$payment[$x]["InstallmentName"] ."<br>";
  echo "InstallmentValue: ".$payment[$x]["InstallmentValue"] ."<br>";
  echo "Paied: ".$payment[$x]["Paied"] ."<br>";
  echo "Balance: ".$payment[$x]["Balance"] ."<br>";
  echo "CollectionRate: ".$payment[$x]["CollectionRate"] ."<br>";
  
}

