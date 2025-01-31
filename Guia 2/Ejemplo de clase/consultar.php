<?php
header("Access-Control-Allow-Origin: *"); 
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $datos = json_decode(file_get_contents("php://input"), true); 

    if ($datos) {
        $materias=simplexml_load_file('materias.xml');
        echo json_encode($materias->materia[(int)$datos['codigo']]);
    } else {
        echo json_encode(["error" => "No se recibieron datos"]);
    }
}
?>