 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "el-masria-group";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



if ($_SERVER["REQUEST_METHOD"] === 'POST')
{
    $Username = $_SERVER["PHP_AUTH_USER"];
    $Username = $_SERVER['PHP_AUTH_PW'];

    $national_ID = $_REQUEST["national_ID"];
    $full_name = $_REQUEST["full_name"];
    $email = $_REQUEST["email"];
    $phone_number = $_REQUEST["phone_number"];

    $sql = "INSERT INTO `client_user ` (national_ID, full_name, email, phone_number, reg_status)
    VALUES ('$national_ID', '$full_name', '$email', '$phone_number', 'not registered')";
    $result = $conn->query($sql);

    if ($result == 1)
    {
        $data["message"] = "data saved successfully";
        $data["status"] = "Ok";
    }
    else
    {
        $data["message"] = $_SERVER['PHP_AUTH_PW'];
        // $data["message"] = "data not saved successfully";
        $data["status"] = "error";    
    }
}
else
{
    $data["message"] = "Format not supported";
    $data["status"] = "error";    
}
    echo json_encode($data);


$conn->close();
?> 