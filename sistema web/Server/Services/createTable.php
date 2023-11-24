<?php
    session_start();
    $table_name = $_POST["table_name"];
    $connString = $_SESSION["connString"];
    $conn = $connString != null ? pg_connect($connString) : false;
    if($conn) {
        $query = 
        "CREATE TABLE IF NOT EXISTS {$table_name}
        (
            cliente bigint,
            nombre character varying(50),
            apellido_paterno character varying(25),
            apellido_materno character varying(25),
            CONSTRAINT {$table_name}_pkey PRIMARY KEY (cliente)
        );";
        pg_query($conn, $query);
        header('Location: ../../Client/html/insertEntry.html');
    }
    else 
        header('Location: ../../Client/');
?>