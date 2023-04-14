<section class="form">
    <h1 class="title title-left title-size">Registro de Notas</h1>
    <a href="<?php echo SERVERURL; ?>" class="btnReturn">Ir a Inicio</a>
    <div class="formulario">
        <div class="group">
            <label for="nombre">Alumno</label>
            <input type="text" id="nombre" pattern="[\sa-zA-Z]+" autofocus required>
            <div class="error-message">Utiliza solo letras</div>
        </div>
        <div class="group">
            <label for="nota1">Nota 1</label>
            <input type="number" id="nota1" class="nota" min="0" max="20" required>
        </div>
        <div class="group">
            <label for="nota2">Nota 2</label>
            <input type="number" id="nota2" class="nota" min="0" max="20" required>
        </div>
        <div class="group">
            <label for="nota3">Nota 3</label>
            <input type="number" id="nota3" class="nota" min="0" max="20" required>
        </div>
        <div class="buttons">
            <button id="calcularPromedio" class="btn btn-active">Calcular Promedio</button>
            <button id="resetear" class="btn btn-active">Resetear valores</button>
        </div>
        <div class="group">
            <label>Promedio</label>
            <input type="text" id="promedio" readonly>
        </div>
        <div class="group">
            <label>Estado</label>
            <input type="text" id="estado" readonly>
        </div>
        <div id="mensaje" class="info"></div>
    </div>

</section>