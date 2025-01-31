<?php 
if(isset($_GET['codigo'])){
    $indexBorrar=(int)$_GET['codigo'];
    $materias=simplexml_load_file('materias.xml');

        unset($materias->materia[$indexBorrar]);
        file_put_contents('materias.xml',$materias->asXML());
        header('location:index.php');
    
}
?>