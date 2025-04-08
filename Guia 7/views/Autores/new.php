<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= empty($tipo)?"Nueva editorial":"Modificar editorial"?></title>
    <?php include  'views/cabecera.php'; ?>
</head>
<body>
<?php include 'views/menu.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <?php if(isset($errores)): ?>
                    <div class="alert alert-danger" role="alert">
                        <ul>
                        <?php foreach($errores as $error): ?>
                            <li><?=$error?></li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <div class="container mt-4">
        <div class="row">
            <h3><?= empty($tipo)?"Nuevo Autor":"Modificar Autor"?></h3>
        </div>
        <div class="row">
            <div class="col-md-7">
                <form role="form" action="<?= empty($tipo)?PATH.'Autores/insert':PATH.'Autores/update' ?>" method="POST">
                    <div class="mb-3">
                        <label for="codigo" class="form-label">Código del Autor:</label>
                        <input type="text" class="form-control" name="codigo_autor" id="codigo_autor" placeholder="Ingresa el código del Autor" value="<?= empty($autor[':codigo_autor']) ? '' : $autor[':codigo_autor'] ?>" <?=empty($tipo)?"":"readonly" ?>>
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Autor:</label>
                        <input type="text" class="form-control" name="nombre_autor" id="nombre_autor" placeholder="Ingresa el nombre del Autor" value="<?= empty($autor[':nombre_autor']) ? '' : $autor[':nombre_autor'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nacionalidad" class="form-label">Nacionalidad:</label>
                        <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Ingresa la nacionalidad del autor" value="<?= empty($autor[':nacionalidad']) ? '' : $autor[':nacionalidad'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a class="btn btn-danger" href="#">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>