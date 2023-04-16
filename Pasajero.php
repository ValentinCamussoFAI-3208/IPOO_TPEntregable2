<?php

class Pasajero {
    // Atributos
    private $nombre;
    private $apellido;
    private $nDocumento;
    private $telefono;
    // Método constructor
    public function __construct($nombre, $apellido, $nDocumento, $telefono) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->nDocumento = $nDocumento;
        $this->telefono = $telefono;
    }
    // Métodos set
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
    public function setNDocumento($nDocumento) {
        $this->nDocumento = $nDocumento;
    }
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
    // Métodos get
    public function getNombre() {
        return $this->nombre;
    }
    public function getApellido() {
        return $this->apellido;
    }
    public function getNDocumento() {
        return $this->nDocumento;
    }
    public function getTelefono() {
        return $this->telefono;
    }
    
}
?>