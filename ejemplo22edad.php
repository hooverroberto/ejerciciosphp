<?php

class Persona{
    private $nombre;
    private $apellido;
    private $edad;


        function __construct($nombre, $apellido, $edad)
        {
            $this ->nombre = $nombre;
            $this ->apellido = $apellido;
            $this ->edad = $edad;

        }

        function __get($propiedad){
            if(property_exists($this, $propiedad)){
                return $this->$propiedad;
            }
        }

        function __set($propiedad, $valor){
            if(property_exists($this, $propiedad)){
                $this->$propiedad = $valor;
            }
        }

        function mayor_edad(){
            return $this -> edad >= 18;
        }

        function nombreCompleto(){
            return $this->nombre ." ". $this->apellido;
        }
}

$persona = new Persona("Roberto", "Hoover", 47);
if($persona -> mayor_edad()){
    echo $persona ->nombreCompleto(). " es mayor de edad";
}else{
    echo $persona ->nombreCompleto(). " no es mayor de edad";
}
// echo $persona -> nombre;
?>