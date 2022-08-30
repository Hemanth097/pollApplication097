<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "poll_application";

$condb = mysqli_connect($server, $username, $password, $database);
if (!$condb){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>