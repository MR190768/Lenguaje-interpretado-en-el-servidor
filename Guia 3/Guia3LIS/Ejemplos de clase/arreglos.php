<?php
$edades=[10,20,25,96,7];

echo $edades[0]."<br>";

$edades[1]=28;
$edades[10]=280;
array_push($edades,100);
unset($edades[0]);
print_r($edades);



echo "<h2>recorreindo el arreglo</h2>";
foreach($edades as $edad){
    echo "<p>$edad</p>";
};

$tamanio=count($edades);
echo "<p>El tamaño del arreglo es: $tamanio</p>";

//Ordenando un arreglo 
//funciones mutables e inmutables, se diferencias por aquellas que si pueden modificar el objeto original y las otras no
sort($edades);//ordena de manera ascendente el arreglo
$edades=array_reverse($edades);//se invierte el orden de forma inmutable 
print_r($edades);




$datos_Personales=[];

$datos_Personales["nombre"]="Gerson";
$datos_Personales["apellido"]="Martinez";
$datos_Personales["estatura"]=1.70;
$datos_Personales["genero"]="Masculino";

print_r($datos_Personales);
echo "<br><h2>imprimiendo los elemntos del arreglo asociativo</h2>";
foreach($datos_Personales as $clave=>$datos){
    echo "<p>$clave : $datos</p>";
}


$persona=[
    'nombre'=>'Andrea',
    'apellido'=>'Martinez',
    'estatura'=>'1.68 cm',
    'genero'=>'Femenino'
];

print_r($persona);
?>