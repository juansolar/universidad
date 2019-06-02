<?php
    class Ejercicio{
        public $numero = 0;
        public $ejercicio = null;
        public $repeticiones = null;
        public $series = null;
        public $tiempoDescanso = null;
        public $tiempoSerie = null;

        function __construct(int $numero, string $ejercicio, string $repeticiones, string $series, string $tiempoDescanso, string $tiempoSerie){
            $this->numero = $numero;
            $this->ejercicio = $ejercicio;
            $this->repeticiones = $repeticiones;
            $this->series = $series;
            $this->tiempoDescanso = $tiempoDescanso;
            $this->tiempoSerie = $tiempoSerie;
        }
    
        public static function createFromArray($arr){
            $ejercicio = new Ejercicio($arr["numero"],$arr["ejercicio"],$arr["repeticiones"], $arr["series"], $arr["descanso"], $arr["duracion"] );
            return $ejercicio;
        }
        
        public function getNumero(){
            return $this->numero;
        }
    
        public function setNumero($numero){
            $this->numero = $numero;
            return $this;
        }

        public function getEjercicio(){
            return $this->ejercicio;
        }
        public function setEjercicio($ejercicio){
            $this->ejercicio = $ejercicio;
            return $this;
        }
    
        public function getRepeticiones(){
            return $this->repeticiones;
        }
        public function setRepeticiones($repeticiones){
            $this->repeticiones = repeticiones;
            return $this;
        }
    
        public function getSeries(){
            return $this->series;
        }
        public function setSeries($series){
            $this->series = $series;
            return $this;
        }
    
        public function getTiempoDescanso(){
            return $this->tiempoDescanso;
        }
        public function setTiempoDescanso($tiempoDescanso){
            $this->tiempoDescanso = $tiempoDescanso;
            return $this;
        }
    
        public function getTiempoSerie(){
            return $this->tiempoSerie;
        }
        public function setTiempoSerie($tiempoSerie){
            $this->tiempoSerie = $tiempoSerie;
            return $this;
        }


    }


?>