<?php
	require_once "./modelos/vistasModelo.php";
	class vistasControlador extends vistasModelo{

		public function obtener_inico_controlador(){
			return require_once "./vistas/inicio.php";
		}

		public function obtener_vistas_controlador(){
			if(isset($_GET['vistas'])){
				$ruta=explode("/", $_GET['vistas']);
				$respuesta=vistasModelo::obtener_vistas_modelo($ruta[0]);
			}else{
				$respuesta="principal";
			}
			return $respuesta;
		}
	}