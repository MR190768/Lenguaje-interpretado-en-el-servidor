<?php
$Estudiantes=[
    ["Nombre"=>"Gerson Martinez","tarea"=>10,"investigacion"=>10,"examen"=>10],
    ["Nombre"=>"Jerson Martinoli","tarea"=>7.97,"investigacion"=>7.51,"examen"=>10],
    ["Nombre"=>"German Marino","tarea"=>8.45,"investigacion"=>9.32,"examen"=>8.88],
    ["Nombre"=>"Jeferson Gutierritos","tarea"=>6.75,"investigacion"=>8.51,"examen"=>8.92],
    ["Nombre"=>"Alvin Yakitori","tarea"=>10,"investigacion"=>6.70,"examen"=>7.77],
    ["Nombre"=>"Alan Fuego","tarea"=>7.37,"investigacion"=>6.13,"examen"=>8.86],
    ["Nombre"=>"Andrea Merino","tarea"=>9.57,"investigacion"=>9.84,"examen"=>6.57]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Notas Estudiantes</title>
</head>
<body>
<div class="container text-center text-white">
    <div class="row pt-5">
        <div class="col-lg-8 mx-auto">
            <h1 class="display-4">Calculo de Notas</h1>
            <p class="lead mb-0">(Ejemplo uso de arreglos)</p>
            <p class="lead mb-0">Los datos se obtienen de un arreglo ya establecido, luego se muestran los las notas calculadas en al tabla presente.</p>
            </div>
        </div>
    </div>


    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 mx-auto bg-white rounded shadow">

                <div class="table-responsive">
                    <table class="table table-fixed">
                        <thead>
                            <tr>
                                <th scope="col" class="col-3">Nombre</th>
                                <th scope="col" class="col-2">Tarea</th>
                                <th scope="col" class="col-3">Investigacion</th>
                                <th scope="col" class="col-2">Examen</th>
                                <th scope="col" class="col-2">Promedio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($Estudiantes as $estudiante){
                                $promedio=round($estudiante["tarea"]*0.50+$estudiante["investigacion"]*0.30+$estudiante["examen"]*0.20,2); 
                            ?>
                            <tr>
                                <td class="col-3"><?=$estudiante["Nombre"] ?></td>
                                <td class="col-2"><?=$estudiante["tarea"] ?></td>
                                <td class="col-3"><?=$estudiante["investigacion"] ?></td>
                                <td class="col-2"><?=$estudiante["examen"] ?></td>
                                <td class="col-2"><?=$promedio?></td>
                            </tr>
                            <?php
                            }
                            ?>
                           
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>

    
</body>
</html>