<?php 
error_reporting(0); 
spl_autoload_register("myAutoLoader");
function myAutoLoader($className){
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/El-Masria-Group/classes/";
    $extensiontype = ".class.php";
    $fullpath = $path . $className . $extensiontype;

	include $fullpath;
}

$log_id = $_GET['log_id'];

$user = new User();
$result = $user->get_user_log_desc($log_id);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            body{
                background-color: #000111;
                color: #fff;
            }
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #383f48;
            }
        </style>

    </head>
    <body>
    <table>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td> Log ID </td>";
                echo "<td> ".$row["id"]." </td>";
                echo "</tr>";  
                echo "<tr>";
                echo "<td> User Name </td>";
                echo "<td> ".$row["username"]." </td>";
                echo "</tr>";  
                echo "<tr>";
                echo "<td> Access Type </td>";
                echo "<td> ".$row["systemtype"]." </td>";
                echo "</tr>";  
                echo "<tr>";
                echo "<td> IP Address </td>";
                echo "<td> ".$row["userIP"]." </td>";
                echo "</tr>";  
                echo "<tr>";
                echo "<td> Action Type </td>";
                echo "<td> ".$row["action"]." </td>";
                echo "</tr>"; 
                echo "<td> Status </td>";
                echo "<td> ".$row["status"]." </td>";
                echo "</tr>";  
                echo "<tr>";
                echo "<td> Description </td>";
                echo "<td> ".$row["description"]." </td>";
                echo "</tr>";  
                echo "<tr>"; 
                echo "<tr>";
                echo "<td> Date </td>";
                echo "<td> ".$row["actionDateTime"]." </td>";
                echo "</tr>";  
                echo "<tr>";
                echo "<td> Full Data </td>";
                echo "<td> ".$row["userAgent"]." </td>";
                echo "</tr>";  
                echo "<tr>";
                echo "<td> Browser </td>";
                echo "<td> ".$row["browserName"]." </td>";
                echo "</tr>";  
                echo "<tr>";
                echo "<td> Browser Version </td>";
                echo "<td> ".$row["browserVersion"]." </td>";
                echo "</tr>";  
                echo "<tr>";
                echo "<td> Platform </td>";
                echo "<td> ".$row["browserPlatform"]." </td>";
                echo "</tr>";  
                echo "<tr>";
                echo "<td> Pattern </td>";
                echo "<td> ".$row["browserPattern"]." </td>";
                echo "</tr>";  
             }
        }
            

        ?>
        </table>


    </body>
</html>