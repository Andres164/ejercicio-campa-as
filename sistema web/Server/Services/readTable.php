<?php
    function ReadTable($table_name) {
        session_start();
        $connString = $_SESSION["connString"];
        $conn = $connString != null ? pg_connect($connString) : false;
        if($conn) {
            $query = "SELECT * FROM {$table_name};"; 
            $result = pg_query($conn, $query);
            return pg_fetch_all($result);
        }
        header('Location: ../../Client/');
        return false;
    }
?>