<?php

function CalcularDistanciaEntrePuntos($x,$y,$x1=0,$y1=0){


    return round(sqrt(pow($x-$x1,2)+pow($y-$y1,2)),2);
};

function CalcularMediaVarianza(...$numeros){
    $n=count($numeros);
    if($n==0) return 0;
    $suma=array_sum($numeros);

    $promedio=$suma/$n;
    $suma_numerador=0;
    foreach($numeros  as $num){
        $suma_numerador+=pow($num-$promedio,2);
    }
    $varianza=$suma_numerador/$n;

    return [
        "promedio"=>$promedio,
        "varianza"=>$varianza
    ];

};

//Funcion recursiva

function factorial($n){
    if($n==1){
        return 1;
    }
    else{
        return $n*factorial($n-1);
    }

};


echo "La distancia del punto (3,5) al origen es ".CalcularDistanciaEntrePuntos(3,5);
echo "<br/>La distancia del punto (3,5) al (1,1) es ".CalcularDistanciaEntrePuntos(3,5,1,1);



echo "<br/> El promedio es :".CalcularMediaVarianza(10,12,14,16,18)["promedio"];
echo "<br/> La Varianza es :".CalcularMediaVarianza(10,12,14,16,18)["varianza"];
echo "<br/> El factorial de 6! es :".factorial(6);
?>