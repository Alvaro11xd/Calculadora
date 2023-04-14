<?php 
	class vistasModelo{
		protected function obtener_vistas_modelo($vistas){
			$listaBlanca=["calculadora", "login", "promedios", "areaCuadrado", "planilla"];
			if(in_array($vistas, $listaBlanca)){
				if(is_file("./vistas/contenidos/".$vistas.".php")){
					$contenido="./vistas/contenidos/".$vistas.".php";
				}else{
					$contenido="principal";
				}
			}else{
				$contenido="principal";
			}
			return $contenido;
		}
	}