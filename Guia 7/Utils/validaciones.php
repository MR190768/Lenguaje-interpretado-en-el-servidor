<?php

function isText($var){

    return preg_match('/^[a-zA-Z áéíóúÁÉÍÓÚñ]+$/',$var);
}

function isCodigo($codigo){

    return preg_match('/^[A-Z]{3}[0-9]{6}$/',$codigo);
}

function isPhone($tel){

    return preg_match('/^[267][0-9]{3}-[0-9]{4}$/',$tel);
}

function isMail($correo){

    return filter_var($correo,FILTER_VALIDATE_EMAIL);
}

function isEditorial($editorial){
    return preg_match('/^EDI[0-9]{3}$/',$editorial);
}

function isCodigoAut($codigo){

    return preg_match('/^AUT[0-9]{3}$/',$codigo);
}

function ValidarEditorial($editorial){
    $errores=[];
    if (isEditorial($editorial[':codigo_editorial']) == 0) {
        array_push($errores, "El codigo de la editorial no es valido");
    }
    if (empty($editorial[':nombre_editorial'])) {
        array_push($errores, "Debe de ingresar el nombre de la editorial");
    }
    if (isText($editorial[':contacto']) == 0) {
        array_push($errores, "Debe de ingresar el nombre del contacto");
    }
    if (isPhone($editorial[':telefono']) == 0) {
        array_push($errores, "telefono no valido");
    }
    return $errores;

}

function ValidarAutor($Autor){
    $errores=[];
    if (isCodigoAut($Autor[':codigo_autor']) == 0) {
        array_push($errores, "El codigo del autor no es valido");
    }
    if (empty($Autor[':nombre_autor'])) {
        array_push($errores, "Debe de ingresar el nombre del autor");
    }
    if (isText($Autor[':nacionalidad']) == 0) {
        array_push($errores, "Debe de ingresar la nacionalidad del autor");
    }
    return $errores;

}
?>