<?php

    class Persona {
         public $nombre; "nombre";
        public $apellido; "apellido";
        public $edad; "edad";
        
        class Persona {
            public function __construct ($nombre, $apellido, $edad){
                $this->nombre = $nombre;
                $this->apellido = $apellido;
                $this->edad = $edad;
            }
        }
        public function saludar(){
            return 'Hola, soy'. $this->nombre.''. $this->apellido. 'y tengo'. $this->edad . 'años';
        } 
    }