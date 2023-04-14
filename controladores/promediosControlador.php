<?php
class Promedio
{
    public $nombre;
    public $nota1;
    public $nota2;
    public $nota3;

    public function __construct($nombre, $nota1, $nota2, $nota3)
    {
        $this->nombre = $nombre;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
    }

    public function calcularPromedio()
    {
        $promedio = ($this->nota1 + $this->nota2 + $this->nota3) / 3;
        return $promedio;
    }

    public function obtenerEstado()
    {
        $promedio = $this->calcularPromedio();
        if ($promedio >= 11.5) {
            return "Aprobado";
        } else {
            return "Desaprobado";
        }
    }
}
