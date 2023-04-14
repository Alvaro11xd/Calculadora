<?php
$peticionAjax = false;
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title>
		<?php echo COMPANY; ?>
	</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/main.css">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body>
	<?php
	require_once "./controladores/vistasControlador.php";

	$vt = new vistasControlador();
	$vistasR = $vt->obtener_vistas_controlador();

	if ($vistasR == "principal") :
		require_once "./vistas/contenidos/principal.php";
	else :
	?>

		<!-- Content page-->
		<section>

			<!-- Content page -->
			<?php require_once $vistasR; ?>

		</section>
	<?php endif; ?>

	<?php include './vistas/modulos/footer.php'; ?>

	<!--===== Scripts -->
	<?php include './vistas/modulos/script.php'; ?>
</body>

</html>