<?php
class Calculadora
{
    public function sumar($num1, $num2)
    {
        return $num1 + $num2;
    }

    public function restar($num1, $num2)
    {
        return $num1 - $num2;
    }

    public function multiplicar($num1, $num2)
    {
        return $num1 * $num2;
    }

    public function dividir($num1, $num2)
    {
        if ($num2 == 0) {
            throw new Exception('<span class="error">No se puede dividir por cero</span>');
        }
        $calculo=$num1 / $num2;
        $redondeo=round($calculo, 2);
        return $redondeo;
    }
}
