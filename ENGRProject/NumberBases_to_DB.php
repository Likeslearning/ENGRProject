<?php
include("DB.php");

$user_input = $_POST["value5"];
$from = $_POST["from5"];
$to = $_POST["to5"];
$output = $_POST["result5"];

$conn = mysqli_connect($host, $username, $password, $db_name);

if(!$conn) {
    die('Problem about database connection');
}

if($user_input != "" && $from != "" && $to != "" && $output != "") {
    $sql = "insert into number_bases(user_value, from_unit, to_unit, converted_value) values('".$user_input."', '".$from."', '".$to."', '".$output."')";
    $result = mysqli_query($conn, $sql);
}
            
else {}