<?php
require_once 'Controllers.php';
require_once 'models/autoresModels.php';
require_once 'Utils/validaciones.php';

class AutoresController extends ContBase
{
    private $model;
    function __construct()
    {
        $this->model = new AutorModel();
    }
    public function Index()
    {
        $viewBag = [];
        $viewBag['autores'] = $this->model->get();
        $this->render("index.php", $viewBag);
    }

    public function create()
    {

        $this->render("new.php");
    }

    public function change($params)
    {
        $codigo = $params[0];
        $viewBag = [];
        $edi = $this->model->get($codigo);
        $autor[':codigo_autor'] = $edi[0]['codigo_autor'];
        $autor[':nombre_autor'] = $edi[0]['nombre_autor'];
        $autor[':nacionalidad'] = $edi[0]['nacionalidad'];
        $viewBag['autor'] = $autor;
        $viewBag['tipo'] = 1;
        $this->render("new.php", $viewBag);
    }

    public function insert()
    {
        $viewBag = array();
        if (isset($_POST)) {
            $errores = array();
            $autor[':codigo_autor'] = $_POST['codigo_autor'];
            $autor[':nombre_autor'] = $_POST['nombre_autor'];
            $autor[':nacionalidad'] = $_POST['nacionalidad'];

            $errores = ValidarAutor($autor);

            if (count($errores) == 0) {
                if ($this->model->insertar($autor) != 0) {
                    header("Location: " . PATH . "Autores");
                } else {
                    array_push($errores, "Error al insertar el autor");
                    $viewBag['errores'] = $errores;
                    $viewBag['autor'] =  $autor;
                    $this->render('new.php', $viewBag);
                }
            } else {
                $viewBag['errores'] = $errores;
                $viewBag['autor'] =  $autor;
                $this->render('new.php', $viewBag);
            }
        }
    }

    public function delete($params)
    {
        $codigo = $params[0];
        $this->model->eliminar($codigo);
        header('Location:' . PATH . 'Autores');
    }

    public function update() {

        $viewBag = array();
        if (isset($_POST)) {
            $errores = array();
            $autor[':nombre_autor'] = $_POST['nombre_autor'];
            $autor[':nacionalidad'] = $_POST['nacionalidad'];
            $autor[':codigo_autor'] = $_POST['codigo_autor'];

            $errores = ValidarAutor($autor);

            if (count($errores) == 0) {
                if ($this->model->actualizar($autor) != 0) {
                    header("Location: " . PATH . "Autores");
                } else {
                    array_push($errores, "Error al actualizar el autor");
                    $viewBag['errores'] = $errores;
                    $viewBag['autor'] =  $autor;
                    $viewBag['tipo'] = 1;
                    $this->render('new.php', $viewBag);
                }
            } else {
                $viewBag['errores'] = $errores;
                $viewBag['autor'] =  $autor;
                $viewBag['tipo'] = 1;
                $this->render('new.php', $viewBag);
            }
        }


    }
}
