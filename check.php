<?php

$user_input = $_POST["fromValue"];
$from = $_POST["fromTemp"];
$to = $_POST["toTemp"];
$output = $_POST["result"];

$conn = mysqli_connect("sql108.epizy.com", "epiz_31883769", "YDJhjfIJ6k2rh", "epiz_31883769_group3");

if(!$conn) {
    die('Problem about database connection');
}

if($user_input != "" && $from != "" && $to != "" && $output != "") {
    $sql = "insert into temperature(user_value, from_unit, to_unit, converted_value) values('".$user_input."', '".$from."', '".$to."', '".$output."')";
    $result = mysqli_query($conn, $sql);
}
            
else {}

