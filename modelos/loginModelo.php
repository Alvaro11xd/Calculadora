<?php
$respuesta = "";
if (empty($_POST['username']) && empty($_POST['password'])) {
    echo $respuesta .= "<span class='error'>¡Por favor coloque su usuario y su contraseña!</span>";
} else {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === "senati" && $password === "123") {
        require_once '../controladores/loginControlador.php';
        $login = new loginControlador();
        echo $login->iniciarSesionControlador($username, $password);
    } else {
        $respuesta .= "<span class='error'>Usuario y/o contraseña incorrectos</span>";
        echo $respuesta;
    }
}
