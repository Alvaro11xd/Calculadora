<?php
	require_once "./modelos/config.php";
	require_once "./controladores/vistasControlador.php";

	$plantilla = new vistasControlador();
	$plantilla->obtener_inico_controlador();