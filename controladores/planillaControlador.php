<?php
class Planilla
{
    public function calcularBonificacion($sueldo, $hijos)
    {
        $bono1 = 0.2; // 20%
        $bono2 = 0.3; // 30%
        $bono3 = 0.4; // 40%
        $porcentaje_bono = $bono1 + $bono2 + $bono3;
        $montoAdicionalHijo = 50;
        $bonificación = $sueldo * $porcentaje_bono + $hijos * $montoAdicionalHijo;
        return $bonificación;
    }

    public function calcularTotalAFP($sueldo)
    {
        $tasaAFP = 0.0146; // 1.46%
        return ($sueldo * $tasaAFP);
    }
    public function calcularTotalESALUD($sueldo)
    {
        $tasaEsSalud = 0.09; // 9%
        return $sueldo * $tasaEsSalud;
    }
    public function calcularTotalESPECIAL($sueldo)
    {
        $tasaEspecial = 0.02; // 2%
        return $sueldo * $tasaEspecial;
    }

    public function calcularTotalAportacion($sueldo)
    {
        $totalAFP = $this->calcularTotalAFP($sueldo);
        $totalEsSalud = $this->calcularTotalESALUD($sueldo);
        $totalEspecial = $this->calcularTotalESPECIAL($sueldo);
        return $totalAFP + $totalEsSalud + $totalEspecial;
    }
}
