<section class="form">
    <h1 class="title title-left title-size">Area de un cuadrado</h1>
    <a href="<?php echo SERVERURL; ?>" class="btnReturn">Ir a Inicio</a>
    <div class="formulario">
        <div class="group">
            <label for="lado">Lado</label>
            <input type="number" id="lado" min="0" class="inputLado" autofocus required><br><br>
        </div>
        <button id="btnCalcularArea" class="btn btn-active">Calcular</button>
        <button id="limpiar" class="btn btn-active">Limpiar</button>

        <div class="group">
            <label>Area</label>
            <input type="text" id="areaResultado" readonly class="btn btn-active"><br><br>
        </div>

        <div id="mensajeError"  class="info"></div>
    </div>
</section>