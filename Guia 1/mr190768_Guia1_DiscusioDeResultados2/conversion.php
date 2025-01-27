
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="estilo.css" rel="stylesheet">
    <title>conversion</title>
</head>
<body>
<?php
$dolare=$_POST['dolares'];
$resultado;

$resultado=$dolare*0.96;

?>


<div class="bg text-center">

<p class="firstLine"> C &nbsp; O &nbsp; N &nbsp; V &nbsp; E &nbsp; R &nbsp; S &nbsp; O &nbsp; R </p>
<p class="secondLine">Su resultado es:</p>
<div class="centered">
<table class="table" >
<thead>
<tr>
<th scope="col">Dolares</th>
<th scope="col">Euros</th>
</tr>
</thead>
<tbody>
<tr>
    <td><?= $dolare?></td>
    <td><?= $resultado?></td>
</tr>;
</tbody>;
</table>;
  </div>
</div>
</body>
</html>