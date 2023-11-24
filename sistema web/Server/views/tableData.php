<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        main { 
            margin-top: 2%;
            padding-left: 30%;
            padding-right: 30%;
        }
        form {
            height: 70%;
        }
        .banner {
            background-color: maroon;
            padding: 4%;
        }
    </style>
</head>
<body>
    <div id="header">
        <header>
            <div class="px-3 py-2 banner text-white">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small4">
                            <li>
                                <a href="../../Client/html/readTable.html" class="nav-link text-white">
                                    <i class="bi bi-arrow-left-circle-fill d-block mx-auto mb-1 fs-2"></i>
                                    Regresar
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <main class="container">
        <h1 class="h3 mb-3 fw-normal">Registros en la tabla</h1>
        <table class="table table-hover">
            <tr>
                <th>Cliente</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
            </tr>
            <?php
            require "../Services/readTable.php";
            $table_data = ReadTable($_POST["table_name"]);
            echo '<tbody>';
                 foreach($table_data as $row) {
                    echo '<tr>';
                    foreach($row as $field) {
                        echo "<td>" . ( $field ? $field : 'NULL' ) . "</td>";
                     }
                    echo '</tr>';
                 }
            echo '</tbody>';
            ?>
        </table>
    </main>
</body>
</html>
