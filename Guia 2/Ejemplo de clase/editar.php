<?php 
if(isset($_POST)){
    $indice=(int)$_POST['indice'];
    $codigo=$_POST['codigo'];
    $nombre=$_POST['nombre'];
    $uvs=$_POST['uvs'];
    $nota=$_POST['nota'];

    $materias=simplexml_load_file('materias.xml');
    
        $materias->materia[$indice]->codigo=$codigo;
        $materias->materia[$indice]->nombre=$nombre;
        $materias->materia[$indice]->uvs=$uvs;
        $materias->materia[$indice]->nota=$nota;

        file_put_contents('materias.xml',$materias->asXML());
        header('location:index.php');
}

?>