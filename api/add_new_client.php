<?php

// API Reference 
// Add new client National ID, Full Name, Email, and Phone Number 
// Authentication Type : Basic Authentication 
// Method: POST 
// Request URL : https://localhost/El-Masria-Group/api/add_new_client?national_ID=96541236548969&full_name=mohamedelnahtta2&email=asdfdgf@SDfD.C1213f&phone_number=01093001070
// Authentication UN: el-masria-group-portal
// Authentication PW: asdA125sdw1dSf5rtertPref


 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "el-masria-group";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($_SERVER["REQUEST_METHOD"] === "POST") {
     $Username = $_SERVER["PHP_AUTH_USER"];
     $password = $_SERVER["PHP_AUTH_PW"];

     if (
         $Username === "el-masria-group-portal" &&
         $password === "asdA125sdw1dSf5rtertPref"
     ) {
         $national_ID = $_REQUEST["national_ID"];
         $full_name = $_REQUEST["full_name"];
         $email = $_REQUEST["email"];
         $phone_number = $_REQUEST["phone_number"];

         $sql = "INSERT INTO `client_user` (national_ID, full_name, email, phone_number, reg_status)
          VALUES ('$national_ID', '$full_name', '$email', '$phone_number', 'not registered')";
         $result = $conn->query($sql);

         if ($result == 1) {
             $data["message"] = "data saved successfully";
             $data["status"] = "Ok";
         } else {
             $data["message"] = "data failed to be saved";
             $data["status"] = "error";
         }
         $conn->close();
     }

     else{
      $data["message"] = "Authentication failed";
      $data["status"] = "error";
     }

 } else {
     $data["message"] = "Format not supported";
     $data["status"] = "error";
 }
 echo json_encode($data);


    

?> 