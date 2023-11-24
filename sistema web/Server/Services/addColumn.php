<?php
    session_start();
    $table_name = $_POST["table_name"];
    $column_name = $_POST["column_name"];
    $data_type = $_POST["data_type"];
    $length = $_POST["length"];
    $length = $length != "" ? "({$length})" : "";

    $connString = $_SESSION["connString"];
    $conn = $connString != null ? pg_connect($connString) : false;
    if($conn) {
        $query = "ALTER TABLE IF EXISTS {$table_name}
                  ADD COLUMN {$column_name} {$data_type} {$length}";
    
        pg_query($conn, $query);
        header('Location: ../../Client/html/readTable.html');
    } 
    else
        header('Location: ../../Client/');

?>