<?php 
error_reporting(0); 
spl_autoload_register("myAutoLoader");
function myAutoLoader($className){
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/AMCC/classes/";
    $extensiontype = ".class.php";
    $fullpath = $path . $className . $extensiontype;

	include $fullpath;
}

$token = $_GET['token'];

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
                echo "<tr>";
                echo "<td> Token ID </td>";
                echo "<td> ".$token." </td>";
                echo "</tr>";  

        ?>
        </table>


    </body>
</html>