<?php

if (isset($_POST['sueldo']) && isset($_POST['hijos']) && isset($_POST['nombre'])) {
    $sueldo = floatval($_POST['sueldo']);
    $hijos = (int)$_POST['hijos'];

    // Verificar si el valor del lado es válido
    if ($sueldo !== -1 && $hijos !== -1) {
        // Calcular bonificación del empleado
        require_once '../controladores/planillaControlador.php';
        $sueldo = floatval($_POST['sueldo']);
        $hijos = (int)$_POST['hijos'];

        $tasaAFP = floatval($_POST['tasaAFP']);
        $tasaSALUD = floatval($_POST['tasaSALUD']);
        $tasaESPECIAL = floatval($_POST['tasaESPECIAL']);


        $planilla = new Planilla();
        $bonificacionTotal = $planilla->calcularBonificacion($sueldo, $hijos);
        $totalAFP=$planilla->calcularTotalAFP($sueldo);
        $totalESALUD=$planilla->calcularTotalESALUD($sueldo);
        $totalESPECIAL=$planilla->calcularTotalESPECIAL($sueldo);
        $aportacionTotal = $planilla->calcularTotalAportacion($sueldo);

        // Devolver el resultado del cálculo
        $resultado = array(
            'totalBono' => number_format($bonificacionTotal, 2),
            'totalAporte'=> number_format($aportacionTotal, 2),
            'afp'=> number_format($totalAFP, 2),
            'salud'=> number_format($totalESALUD, 2),
            'especial'=> number_format($totalESPECIAL, 2)
        );
        // header('Content-Type: application/json');
        echo json_encode($resultado);
    } else {
        // Devolver un mensaje de error
        http_response_code(400);
        echo "<span class='error'>Solo se admiten cantidades positivas</span>";
    }
} else {
    // Devolver un mensaje de error
    http_response_code(400);
    echo "<span class='error'>Campos vacíos</span>";
}
