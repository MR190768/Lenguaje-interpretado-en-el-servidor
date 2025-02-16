<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<div class="container text-center text-white ">
<h1 class="display-4">Tablas de multiplicar</h1>
<p class="lead mb-0">Elija la tabla de multiplicar a mostrar</p>
    <div class="container py-5">
    <div class="row">
        <div class="col-1 text-center"><h5>1</h5></div>
        <div class="col-8">
            <input type="range" name="number"class="form-range" min="1" max="30" id="rangoInput">
            
            </form>
        </div>
        <div class="col-1 text-center"><h5>30</h5></div>
        <div class="col-1"><h5>Valor :</h5></div>
        <div class="col-1"><h4 id="rangoValor">16</h4></div>
    </div>
</div>
<button type="submit" id="enviar" class="btn btn-primary">Enviar</button>
<div class="container py-5">
        <div class="row">
            <div class="col-lg-7 mx-auto bg-white rounded shadow">

                <div id="tabla" class="table-responsive">
                    
                        
                            <?php
                            if($_SERVER["REQUEST_METHOD"]=="POST"){
                                $numer=[1,2,3,4,5,6,7,8,9,10];
                                $numero=$_POST["number"];
                            ?>
                            <table class="table table-fixed">
                            <tbody>
                                <?php
                                foreach($numer as $num){ 
                                ?>
                            <tr>
                                <td class="col-3"><?=$numero?></td>
                                <td class="col-2">X</td>
                                <td class="col-2"><?=$num ?></td>
                                <td class="col-2">=</td>
                                <td class="col-3"><?=$numero*$num?></td>
                            </tr>
                            <?php
                             };
                            ?>
                            </tbody>
                            </table>
                            <?php
                            };
                            ?>
                           

                </div>
                
            </div>
        </div>
    </div>

<script>
    rangoInput = document.getElementById("rangoInput");
    rangoValue = document.getElementById("rangoValor");
        
        rangoInput.addEventListener("input", () => {
            rangoValue.textContent = rangoInput.value;
        });
    </script> 
</body>

</html>