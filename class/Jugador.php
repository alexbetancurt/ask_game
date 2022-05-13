<?php

class Jugador{

//Atributos 
private string $id;
public string $nombre;
public int $puntuacion = 0;


//Metodos
public function __construct(string $name){
    $this->id = uniqid();
    $this->nombre = $name;
}

public function seleccionar_respuesta(){

}
public function abandonar_juego(){

}
}

?>