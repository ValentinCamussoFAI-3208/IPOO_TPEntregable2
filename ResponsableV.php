<?php

class ResponsableV {
    // Atributos
    private $numEmpleado;
    private $numLicencia;
    private $nombre;
    private $apellido;
    // Método constructor
    public function __construct($numEmpleado, $numLicencia, $nombre, $apellido) {
        $this->numEmpleado = $numEmpleado;
        $this->numLicencia = $numLicencia;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
    // Métodos set
    public function setNumEmpleado($numEmpleado) {
        $this->numEmpleado = $numEmpleado;
    }
    public function setNumLicencia($numLicencia) {
        $this->numLicencia = $numLicencia;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
    // Métodos get
    public function getNumEmpleado() {
        return $this->numEmpleado;
    }
    public function getNumLicencia() {
        return $this->numLicencia;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getApellido() {
        return $this->apellido;
    }
}
?>