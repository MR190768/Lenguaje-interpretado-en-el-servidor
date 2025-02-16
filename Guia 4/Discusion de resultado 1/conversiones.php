<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>conversion</title>
</head>

<body>
    <div class="bg text-center">

        <p class="firstLine"> C &nbsp; O &nbsp; N &nbsp; V &nbsp; E &nbsp; R &nbsp; S &nbsp; O &nbsp; R </p>
        <p class="secondLine">Seleccione su los datos a convertir:</p>
        <div class="centered">
            <form action="" method="post">
                <div class="row">
                    <div class="col-4">
                        <p class="secondLine">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pimera unidad:<input class="InputStyle" placeholder="" type="text" id="dato1" name="dato1"></input></p>
                    </div>
                    <div class="col-4 offset-3">
                        <p class="secondLine">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Segunda Unidad:<input class="InputStyle" placeholder="" type="text" id="dato2" name="dato2"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 offset-1">
                        <select class="form-select" id="tipo1" name="tipo1" style="background-color:  transparent; color:white">
                            <option value="cm" selected style="background-color:  #282d64;">Centimetro (cm)</option>
                            <option value="m" style="background-color:  #282d64;">Metro (M)</option>
                            <option value="plg" style="background-color:  #282d64;">Pulgada (in)</option>
                            <option value="fte" style="background-color:  #282d64;">Pie (ft)</option>
                        </select>
                    </div>
                    <div class="col-4 offset-3">
                        <select class="form-select" id="tipo2" name="tipo2" style="background-color:  transparent; color:white">
                            <option value="cm" selected style="background-color:  #282d64;">Centimetro (cm)</option>
                            <option value="m" style="background-color:  #282d64;">Metro (M)</option>
                            <option value="plg" style="background-color:  #282d64;">Pulgada (in)</option>
                            <option value="fte" style="background-color:  #282d64;">Pie (ft)</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5 offset-4">
                        <button type="submit">Convertir</button>
                    </div>
                </div>
            </form>
            <br>
            <?php
            $resultado = 0;
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                function convertir_cm($dato, $tipo)
                {
                    switch ($tipo) {
                        case "m":
                            return $dato / 100;
                            break;
                        case "plg":
                            return $dato / 2.54;
                            break;
                        case "fte":
                            return $dato / 30.48;
                            break;
                        default:
                            return $dato;
                            break;
                    }
                };

                function convertir_m($dato, $tipo)
                {
                    switch ($tipo) {
                        case "cm":
                            return $dato * 100;
                            break;
                        case "plg":
                            return $dato * 39.37;
                            break;
                        case "fte":
                            return $dato *3.281;
                            break;
                        default:
                            return $dato;
                            break;
                    }
                };

                function convertir_plg($dato, $tipo)
                {
                    switch ($tipo) {
                        case "m":
                            return $dato / 39.37;
                            break;
                        case "cm":
                            return $dato * 2.54;
                            break;
                        case "fte":
                            return $dato / 12;
                            break;
                        default:
                            return $dato;
                            break;
                    }
                };

                function convertir_fte($dato, $tipo)
                {
                    switch ($tipo) {
                        case "m":
                            return $dato / 3.281;
                            break;
                        case "plg":
                            return $dato * 12;
                            break;
                        case "cm":
                            return $dato * 30.48;
                            break;
                        default:
                            return $dato;
                            break;
                    }
                };

                $valor = $_POST["dato1"];
                $convertir = $_POST["tipo1"];
                $converitdo = $_POST["tipo2"];

                switch ($convertir) {
                    case "cm":
                        $resultado = round(convertir_cm($valor, $converitdo),2);
                        break;
                    case "m":
                        $resultado = round(convertir_m($valor, $converitdo),2);
                        break;
                    case "plg":
                        $resultado = round(convertir_plg($valor, $converitdo),2);
                        break;
                    case "fte":
                        $resultado = round(convertir_fte($valor, $converitdo),2);
                        break;
                }
            }
            ?>
        </div>
    </div>
    <script>
        valorIn=document.getElementById("dato1");
        resultado=document.getElementById("dato2");
        tipo1=document.getElementById("tipo1");
        tipo2=document.getElementById("tipo2");

        valorIn.value="<?= $valor ?>";
        resultado.value="<?= $resultado ?>";
        tipo1.value="<?= $convertir ?>";
        tipo2.value="<?= $converitdo ?>";
    </script>
</body>

</html>