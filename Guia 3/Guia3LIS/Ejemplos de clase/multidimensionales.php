<?php
$alumnos=[
    [
        'nombre'=>'guillermo',
        'apellido'=>'calderon',
        'carnet'=>'CH11441',
        'CUM'=>5,
        'materias'=>['LOS104','ASP501','PED104']

    ],
    [
        'nombre'=>'gerson',
        'apellido'=>'martinez',
        'carnet'=>'MR1907689',
        'CUM'=>10,
        'materias'=>['LOS104','CVV503','PED104']

    ],
    [
        'nombre'=>'Andrea',
        'apellido'=>'Merino',
        'carnet'=>'AM2000145',
        'CUM'=>5,
        'materias'=>['LOS104','CVV503','P00104']

    ]
];

var_dump($alumnos);


?>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Carnet</th>
        <th>CUM</th>
        <th>Materias inscritas</th>
    </tr>
    <?php
    foreach ($alumnos as $alumno)
    {
        ?>
    <tr>
        <td><?=$alumno['nombre']?></td>
        <td><?=$alumno['apellido']?></td>
        <td><?=$alumno['carnet']?></td>
        <td><?=$alumno['CUM']?></td>
        <td><?= implode(' ',$alumno['materias'])?></td>
    </tr>
    <?php
    }
    ?>
   

</table>

