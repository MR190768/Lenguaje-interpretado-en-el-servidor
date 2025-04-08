<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Editoriales</title>
    <?php include   'views/cabecera.php'; ?>
</head>
<body>
    <?php include 'views/menu.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <h3>Lista de Editoriales</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="<?=PATH?>Editoriales/create">Nuevo Editorial</a>
                <br><br>
                <table class="table table-striped table-bordered" id="tabla">
                    <thead class="table-dark">
                        <tr>
                            <th>Código del Editorial</th>
                            <th>Nombre del Editorial</th>
                            <th>Contacto</th>
                            <th>Teléfono</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($editoriales as $editorial): ?>
                        <tr>
                            <th><?=$editorial['codigo_editorial']?></th>
                            <th><?=$editorial['nombre_editorial']?></th>
                            <th><?=$editorial['contacto']?></th>
                            <th><?=$editorial['telefono']?></th>
                            <th><a href="<?= PATH.'Editoriales/delete/'.$editorial['codigo_editorial']?>" class="btn btn-danger">Eliminar</a>
                            <a href="<?= PATH.'Editoriales/change/'.$editorial['codigo_editorial']?>" class="btn btn-success">Actualizar</a>
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