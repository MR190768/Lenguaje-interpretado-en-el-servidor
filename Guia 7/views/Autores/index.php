<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Autor</title>
    <?php include   'views/cabecera.php'; ?>
</head>
<body>
    <?php include 'views/menu.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <h3>Lista de Autores</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="<?=PATH?>Autores/create">Nuevo Autor</a>
                <br><br>
                <table class="table table-striped table-bordered" id="tabla">
                    <thead class="table-dark">
                        <tr>
                            <th>Código del Autor</th>
                            <th>Nombre del Autor</th>
                            <th>Nacionalidad</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($autores as $autor): ?>
                        <tr>
                            <th><?=$autor['codigo_autor']?></th>
                            <th><?=$autor['nombre_autor']?></th>
                            <th><?=$autor['nacionalidad']?></th>
                            <th><a href="<?= PATH.'Autores/delete/'.$autor['codigo_autor']?>" class="btn btn-danger">Eliminar</a>
                            <a href="<?= PATH.'Autores/change/'.$autor['codigo_autor']?>" class="btn btn-success">Actualizar</a>
                             </th>

                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>