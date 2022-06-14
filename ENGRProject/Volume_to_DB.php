<?php

$user_input = $_POST["value4"];
$from = $_POST["from4"];
$to = $_POST["to4"];
$output = $_POST["result4"];

$conn = mysqli_connect("eu-cdbr-west-02.cleardb.net", "b494fa8588b593", "9868e4e7", "heroku_f3d0fe302c6dbfc");

if(!$conn) {
    die('Problem about database connection');
}

if($user_input != "" && $from != "" && $to != "" && $output != "") {
    $sql = "insert into volume(user_value, from_unit, to_unit, converted_value) values('".$user_input."', '".$from."', '".$to."', '".$output."')";
    $result = mysqli_query($conn, $sql);
}
            
else {}


