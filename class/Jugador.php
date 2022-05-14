<?php

class Jugador{

//Atributos 
private string $id;
public string $nombre;
private int $puntuacion = 0;


//Metodos
public function __construct(string $name){
    $this->id = uniqid();
    $this->nombre = $name;
}

public function getNombre(){
    return $this->nombre;
}

public function seleccionar_respuesta(){

}
public function abandonar_juego(){

}
}

?>