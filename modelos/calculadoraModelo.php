<?php

require_once "../controladores/calculadoraControlador.php";

if (isset($_POST['operacion']) && is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {
    $operacion = $_POST['operacion'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $calculadora = new Calculadora();

    $resultado = "";

    try {
        switch ($operacion) {
            case 'sumar':
                $resultado .= "<span>" . $calculadora->sumar($num1, $num2) . "</span>";
                break;
            case 'restar':
                $resultado .= "<span>" . $calculadora->restar($num1, $num2) . "</span>";
                break;
            case 'multiplicar':
                $resultado .= "<span>" . $calculadora->multiplicar($num1, $num2) . "</span>";
                break;
            case 'dividir':
                $resultado .= "<span>" . $calculadora->dividir($num1, $num2) . "</span>";
                break;
            default:
                throw new Exception('Operación no válida');
        }
    } catch (Exception $e) {
        echo $e->getMessage();
        exit;
    }


    echo '<span>El resultado es: ' . $resultado . '</span>';
}
