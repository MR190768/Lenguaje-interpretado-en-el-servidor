<?php
require_once 'Controllers.php';
require_once 'Models/editorialesModels.php';
require_once 'Utils/validaciones.php';

class EditorialesController extends ContBase
{
    private $model;
    function __construct()
    {
        $this->model = new EditorialModel();
    }
    public function Index()
    {
        $viewBag = [];
        $viewBag['editoriales'] = $this->model->get();
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
        $editorial[':codigo_editorial'] = $edi[0]['codigo_editorial'];
        $editorial[':nombre_editorial'] = $edi[0]['nombre_editorial'];
        $editorial[':contacto'] = $edi[0]['contacto'];
        $editorial[':telefono'] = $edi[0]['telefono'];
        $viewBag['editorial'] = $editorial;
        $viewBag['tipo'] = 1;
        $this->render("new.php", $viewBag);
    }

    public function insert()
    {
        $viewBag = array();
        if (isset($_POST)) {
            $errores = array();
            $editorial[':codigo_editorial'] = $_POST['codigo_editorial'];
            $editorial[':nombre_editorial'] = $_POST['nombre_editorial'];
            $editorial[':contacto'] = $_POST['contacto'];
            $editorial[':telefono'] = $_POST['telefono'];

            $errores = ValidarEditorial($editorial);

            if (count($errores) == 0) {
                if ($this->model->insertar($editorial) != 0) {
                    header("Location: " . PATH . "Editoriales");
                } else {
                    array_push($errores, "Error al insertar la editorial");
                    $viewBag['errores'] = $errores;
                    $viewBag['editorial'] = $editorial;
                    $this->render('new.php', $viewBag);
                }
            } else {
                $viewBag['errores'] = $errores;
                $viewBag['editorial'] = $editorial;
                $this->render('new.php', $viewBag);
            }
        }
    }

    public function delete($params)
    {
        $codigo = $params[0];
        $this->model->eliminar($codigo);
        header('Location:' . PATH . 'Editoriales');
    }

    public function update() {

        $viewBag = array();
        if (isset($_POST)) {
            $errores = array();
            $editorial[':nombre_editorial'] = $_POST['nombre_editorial'];
            $editorial[':contacto'] = $_POST['contacto'];
            $editorial[':telefono'] = $_POST['telefono'];
            $editorial[':codigo_editorial'] = $_POST['codigo_editorial'];

            $errores = ValidarEditorial($editorial);

            if (count($errores) == 0) {
                if ($this->model->actualizar($editorial) != 0) {
                    header("Location: " . PATH . "Editoriales");
                } else {
                    array_push($errores, "Error al actualizar la editorial");
                    $viewBag['errores'] = $errores;
                    $viewBag['editorial'] = $editorial;
                    $viewBag['codigo'] = $_POST['codigo'];
                    $this->render('new.php', $viewBag);
                }
            } else {
                $viewBag['errores'] = $errores;
                $viewBag['editorial'] = $editorial;
                $viewBag['codigo'] = $_POST['codigo'];
                $this->render('new.php', $viewBag);
            }
        }


    }
}
