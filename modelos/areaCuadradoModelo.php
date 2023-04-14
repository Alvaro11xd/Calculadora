<?php

if (isset($_POST['lado'])) {
    $lado = floatval($_POST['lado']);

    // Verificar si el valor del lado es válido
    if ($lado > 0) {
        // Calcular el area del cuadrado
        require_once '../controladores/areaCuadradoControlador.php';
        $lado = floatval($_POST['lado']);


        $cuadrado = new Cuadrado();
        $area = $cuadrado->calcularAreaCuadrado($lado);

        // Devolver el resultado del cálculo
        $resultado = array('areaResultado' => number_format($area, 2));
        // header('Content-Type: application/json');
        echo json_encode($resultado);
    } else {
        // Devolver un mensaje de error
        http_response_code(400);
        echo "<span class='error'>El valor del lado debe ser mayor que cero</span>";
    }
} else {
    // Devolver un mensaje de error
    http_response_code(400);
    echo "<span class='error'>No se recibió el valor del lado</span>";
}
