<?php

class Ronda{

//Atributos 
private int $nivel;

//Metodos
public function __construct(){
    $this->nivel = 1;
}

public function getNivel(){
    return $this->nivel;
}

public function subir_nivel (){
$this->nivel = $this->nivel + 1;
return $this->nivel;
}
}