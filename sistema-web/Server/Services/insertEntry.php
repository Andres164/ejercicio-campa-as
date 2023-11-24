<?php
    session_start();
    $table_name = $_POST["table_name"];
    $cliente = $_POST["cliente"];
    $nombre = $_POST["nombre"];
    $apellido_paterno = $_POST["apellido_paterno"];
    $apellido_materno = $_POST["apellido_materno"];

    $connString = $_SESSION["connString"];
    $conn = $connString != null ? pg_connect($connString) : false;
    if($conn) {
        $query = "INSERT INTO public.{$table_name} 
                  VALUES({$cliente}, '{$nombre}', '{$apellido_paterno}', '{$apellido_materno}')";
    
        pg_query($conn, $query);
        header('Location: ../../Client/html/readTable.html');
    }
    else
        header('Location: ../../Client/'); 
?>