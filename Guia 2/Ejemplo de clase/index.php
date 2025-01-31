<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculadora de CUM</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>
<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.rtl.min.css"/>
    </head>
<body>
<div class="container">
    <h1 class="page-header text-center">Calculadora de CUM</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="#addnew" class="btn btn-primary" data-toggle="modal" id="btnAgregar"><span class="glyphicon glyphicon-plus"></span> Agregar materia</a>
            
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Uv</th>
                    <th>Notas</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php
                    $materias=simplexml_load_file('materias.xml'); /* Leeyendo archimo xml */
                    //echo var_dump($materias); 
                    $cum=0;
                    $numerador=0;
                    $denominador=0;
                    $index=-1;
                    foreach($materias->materia as $materia){
                        $numerador+=$materia->nota*$materia->uvs;
                        $denominador+=$materia->uvs;
                        $index++;
 
                 ?>

                <tr>
                    <td><?= $materia->codigo?></td>
                    <td><?= $materia->nombre?></td>
                    <td><?= $materia->uvs?></td>
                    <td><?= $materia->nota?></td>
                    <td>
                        <a href="#addnew2" class="btn btn-success" data-toggle="modal" id="<?= $index?>">Editar</a>
                        <a href="#delete"  class="btn btn-danger" data-toggle="modal" id="<?= $index?>">Borrar</a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            <?php
            if($denominador!=0){
                $cum=round($numerador/$denominador,2);
                echo "<h2>CUM: $cum</h2>"; //con comilla doble se interpola

            }    
            ?>
            
            
         
        </div>
    </div>
</div>
<?php 
include('nueva_modal_editar.php');
include('nueva_modal.php');
include('borrar_modal.php');
if(isset($_GET['exito'])){

?>
    <script>
          alertify.success('Materai agregada exitosamente');
    </script>

<?php } ?>

<script src="modal.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>