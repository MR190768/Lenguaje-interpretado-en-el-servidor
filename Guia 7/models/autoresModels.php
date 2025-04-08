<?php
require_once 'model.php';
class AutorModel extends Models{

    public function get($id=''){
        if($id==''){
            $query="SELECT * FROM autores";
            return $this->get_query($query);
        }
        else{
            $query="SELECT * FROM autores WHERE codigo_autor=:codigo";
            return $this->get_query($query,[':codigo'=>$id]);
        }
    }


    public function insertar($datos=[]){
        $query="INSERT INTO autores VALUES(:codigo_autor,:nombre_autor,:nacionalidad)";
        
        return $this->set_query($query,$datos);
    }

    public function eliminar($id=''){
        $query="DELETE FROM autores WHERE codigo_autor=:codigo";
        return $this->set_query($query,[':codigo'=>$id]);
    }

    public function actualizar($datos=[]){
        $query="UPDATE autores SET nombre_autor=:nombre_autor, nacionalidad=:nacionalidad WHERE codigo_autor=:codigo_autor";
        return $this->set_query($query,$datos);
    }

}




?>