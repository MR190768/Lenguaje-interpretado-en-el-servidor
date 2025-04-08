<?php
require_once 'model.php';
class EditorialModel extends Models{

    public function get($id=''){
        if($id==''){
            $query="SELECT * FROM editoriales";
            return $this->get_query($query);
        }
        else{
            $query="SELECT * FROM editoriales WHERE codigo_editorial=:codigo";
            return $this->get_query($query,[':codigo'=>$id]);
        }
    }


    public function insertar($datos=[]){
        $query="INSERT INTO editoriales VALUES(:codigo_editorial,:nombre_editorial,:contacto,:telefono)";
        
        return $this->set_query($query,$datos);
    }

    public function eliminar($id=''){
        $query="DELETE FROM editoriales WHERE codigo_editorial=:codigo";
        return $this->set_query($query,[':codigo'=>$id]);
    }

    public function actualizar($datos=[]){
        $query="UPDATE editoriales SET nombre_editorial=:nombre_editorial, contacto=:contacto, telefono=:telefono WHERE codigo_editorial=:codigo_editorial";
        return $this->set_query($query,$datos);
    }

}




?>