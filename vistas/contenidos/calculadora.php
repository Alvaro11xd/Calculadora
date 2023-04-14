<section class="form">
	<h1 class="title title-left title-size">Calculadora Básica</h1>
	<a href="<?php echo SERVERURL; ?>" class="btnReturn">Ir a Inicio</a>
	<div class="formulario">
		<div class="group">
			<label for="num1">Ingrese el primer número</label>
			<input type="number" id="num1" autofocus required><br><br>
		</div>
		<div class="group">
			<label for="num2">Ingrese el segundo número</label>
			<input type="number" id="num2" required><br><br>
		</div>
		<div class="botones">
			<button id="btnSumar" class="btn">+</button>
			<button id="btnRestar" class="btn">-</button>
			<button id="btnMultiplicar" class="btn">x</button>
			<button id="btnDividir" class="btn">/</button>
			<button id="limpiar" class="btn">Reiniciar</button>
		</div>

		<div id="info" class="info"></div>
	</div>
</section>