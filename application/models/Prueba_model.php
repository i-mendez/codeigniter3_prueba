<?php 
class Prueba_model extends CI_Model {

    public function login(){
        /* Consulta a base de datos*/
    }
    
    public function insertProfesor()
    {
        //cargamos datos para la DB
        $array =  array(
            "nombre"=>"David",
            "apellidos"=>"Navarro",
            "curso"=>3
        );
        //insertamos en la DB tabla profesores
        
        $this-> db -> insert("profesores",$array);
    }

    public function getProfesores(){
        $this-> db -> select("*");
        $this-> db -> from("profesores");
        // $this-> db -> where("id",1);
        // o
        // $this-> db -> where("id=1");

        //guardamos la consulta en una variable
        //con el get conseguimos la consulta generada anteriormente
        $query= $this-> db->get();

        //si la consulta devuelve alguna fila
        //mostramos el resultado de la consulta en forma de array
        if($query->num_rows()>0){
            return $query->result();
        }else{
            
            return NULL;
        }


    }

    public function updateProfesor(){
        $array =  array(
            "nombre"=>"David",
            "apellidos"=>"Navarro López",
            "curso"=>1
        );
        $this ->db->where("id=1");
        $this -> db -> update("profesores",$array);

    }
}