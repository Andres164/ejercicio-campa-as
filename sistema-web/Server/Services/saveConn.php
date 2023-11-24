<?php

$server = $_POST["server"];
$port = $_POST["port"];
$data_base = $_POST["data_base"];
$user_name = $_POST["user_name"];
$password = $_POST["password"];
$service_data_base = $_POST["service_data_base"];


$conn = pg_connect("host={$server} port={$port} dbname={$service_data_base} user={$user_name} password={$password}");
if (!$conn)
    header('Location: ../../Client/index.html');
else {
    session_start();
    $_SESSION["connString"] = "host={$server} port={$port} dbname={$data_base} user={$user_name} password={$password}";
    if(!pg_connect($_SESSION["connString"])) {
        $query = "CREATE DATABASE {$data_base} WITH OWNER = {$user_name}";
        pg_query($conn, $query);
    }
    header('Location: ../../Client/html/createTable.html');
}

?>