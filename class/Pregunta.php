<?php

class Pregunta{

//Atributos
public $enunciado;
public $opcion1;
public $opcion2;
public $opcion3;
public $opcion4;
public $respuesta;

public $categoria;

//metodos
public function obtener_pregunta(int $num){

    $inc = include("conex_database.php");
    if ($inc){

        if ($num == 1)
        $consulta = "SELECT * FROM preguntas WHERE Categoria='1' ORDER BY RAND() LIMIT 1;";

        if ($num == 2)
        $consulta = "SELECT * FROM preguntas WHERE Categoria='2' ORDER BY RAND() LIMIT 1;";

        if ($num == 3)
        $consulta = "SELECT * FROM preguntas WHERE Categoria='3' ORDER BY RAND() LIMIT 1;";

        if ($num == 4)
        $consulta = "SELECT * FROM preguntas WHERE Categoria='4' ORDER BY RAND() LIMIT 1;";

        if ($num == 5)
        $consulta = "SELECT * FROM preguntas WHERE Categoria='5' ORDER BY RAND() LIMIT 1;";


        $resultado = mysqli_query($conex, $consulta);
        if($resultado){
            while ($row = $resultado->fetch_array()){
                $this->enunciado = $row['Enunciado'];
                $this->opcion1 = $row['Opcion1'];
                $this->opcion2 = $row['Opcion2'];
                $this->opcion3 = $row['Opcion3'];
                $this->opcion4 = $row['Opcion4'];
                $this->respuesta = $row['Respuesta'];
            }
        }   
    }

}

}
