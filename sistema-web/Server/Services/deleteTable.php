<?php
    session_start();
    $table_name = $_POST["table_name"];
    $connString = $_SESSION["connString"];
    $conn = $connString != null ? pg_connect($connString) : false;
    if($conn) {
        $query = "DROP TABLE {$table_name};";
    
        pg_query($conn, $query);
        header('Location: ../../Client/html/readTable.html');
    } 
    else
        header('Location: ../../Client/');
?>