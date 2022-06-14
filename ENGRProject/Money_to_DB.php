<?php
include("DB.php");

$user_input = $_POST["value8"];
$from = $_POST["from8"];
$to = $_POST["to8"];
$output = $_POST["result8"];

$conn = mysqli_connect($host, $username, $password, $db_name);

if(!$conn) {
    die('Problem about database connection');
}

if($user_input != "" && $from != "" && $to != "" && $output != "") {
    $sql = "insert into money(user_value, from_unit, to_unit, converted_value) values('".$user_input."', '".$from."', '".$to."', '".$output."')";
    $result = mysqli_query($conn, $sql);
}
            
else {}