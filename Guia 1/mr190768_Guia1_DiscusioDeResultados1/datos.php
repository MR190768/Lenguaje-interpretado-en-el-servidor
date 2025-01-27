<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Discusion de Resultados 1</title>
</head>
<body>
    <?php
    $nombre="Gerson Adonai Martinez Ramirez";
    $nacimiento="San Salvador,El Salvador";
    $Edad=24;
    $carnet="MR190768";
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col"><h1>Discusion de Resultados 1</h1></div>
        </div>
        <div class="row">
            <div class="col">
            <table class="table table-bordered border-primary">
                <tr>
                    <th>Nombre</th>
                    <th>Lugar de Nacimeinto</th>
                    <th>Edad</th>
                    <th>Carnet</th>
                </tr>
                <tr>
                    <td><?= $nombre ?></td>
                    <td><?= $nacimiento ?></td>
                    <td><?= $Edad ?></td>
                    <td><?= $carnet ?></td>
                </tr>
            </table>
            </div>
        </div>
    </div>
    
</body>
</html>