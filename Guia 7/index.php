<?php
require_once 'controllers/EditorialesController.php';
require_once 'controllers/AutoresController.php';
require_once 'controllers/IndexController.php';

const PATH='http://localhost/LIS_Guia1/Lenguaje-interpretado-en-el-servidor/Guia 7/'; //se agrega la ruta de la carpeta del proyecto
$url=$_SERVER['REQUEST_URI'];
$slice=explode('/',$url);
$controller=empty($slice[4])?"IndexController":$slice[4]."Controller";
$method=empty($slice[5])?"Index":$slice[5];
$params=empty($slice[6])?[]:array_slice($slice,6);

$cont=new $controller();
$cont->$method($params);


?>