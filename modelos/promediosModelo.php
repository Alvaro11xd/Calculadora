<?php
if (isset($_POST['nombre']) && isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])) {

    $nombre = $_POST['nombre'];
    $nota1 = floatval($_POST['nota1']);
    $nota2 = floatval($_POST['nota2']);
    $nota3 = floatval($_POST['nota3']);

    if (empty($_POST['nombre']) && empty($_POST['nota1']) && empty($_POST['nota2']) && empty($_POST['nota3'])) {
        http_response_code(400);
        echo "<span class='error'>Faltan datos del formulario</span>";
        exit;
    }

    if ($nota1 < 0 || $nota1 > 20 || $nota2 < 0 || $nota2 > 20 || $nota3 < 0 || $nota3 > 20) {

        http_response_code(400);
        echo "<span class='error'>Las notas deben estar entre 0 y 20</span>";
        exit;
        
    } else {
        require_once "../controladores/promediosControlador.php";

        $alumno = new Promedio($nombre, $nota1, $nota2, $nota3);

        $promedio = $alumno->calcularPromedio();
        $estado = $alumno->obtenerEstado();

        $resultado = array('promedio' => number_format($promedio, 2), 'estado' => $estado);
        header('Content-Type: application/json');
        echo json_encode($resultado);
        exit;
    }
}
