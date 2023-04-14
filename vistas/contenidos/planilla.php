<section class="form">
    <h1 class="title title-left title-size">Planilla de trabajo</h1>
    <a href="<?php echo SERVERURL; ?>" class="btnReturn">Ir a Inicio</a>
    <div class="formulario">
        <div class="group">
            <label for="nombre">Trabajador</label>
            <input type="text" id="nombre" pattern="[\sa-zA-Z]+" autofocus required placeholder="Trabajador">
            <div class="error-message">Utiliza solo letras</div>
        </div>
        <div class="group">
            <select id="sexo">
                <option value="">Seleccionar</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
            </select>
        </div>
        <div class="group">
            <select id="e-civil">
                <option value="">Seleccionar</option>
                <option value="soltero">Soltero</option>
                <option value="casado">Casado</option>
                <option value="divorciado">Divorciado</option>
            </select>
        </div>
        <div class="group">
        <label for="c-hijos">Trabajador</label>
            <input type="number" id="c-hijos" class="nota" min="0" required placeholder="Cantidad de hijos">
        </div>
        <div class="group">
            <label for="sueldo">Sueldo básico</label>
            <input type="number" id="sueldo" class="nota" min="0" required placeholder="Sueldo básico">
        </div>
        <div class="buttons">
            <button id="calcularPlanilla" class="btn btn-active">Calcular</button>
            <button id="resetearPlanilla" class="btn btn-active">Resetear valores</button>
        </div>
        <div class="group">
            <label for="afp">Aporte de AFP</label>
            <input type="text" id="afp" readonly placeholder="Aporte de AFP">
        </div>
        <div class="group">
            <label for="salud">Aporte de Salud</label>
            <input type="text" id="salud" readonly placeholder="Aporte de Salud">
        </div>
        <div class="group">
            <label for="especial">Aporte especial</label>
            <input type="text" id="especial" readonly placeholder="Aporte especial">
        </div>
        <div class="group">
            <label for="totalAporte">Total de aportación</label>
            <input type="text" id="totalAporte" readonly placeholder="Total de aportación">
        </div>
        <div class="group">
            <label for="bono1">Bono 1</label>
            <input type="text" id="bono1" readonly placeholder="Bono 1">
        </div>
        <div class="group">
            <label for="nombre">Bono 2</label>
            <input type="text" id="bono2" readonly placeholder="Bono 2">
        </div>
        <div class="group">
            <label for="nombre">Bono 3</label>
            <input type="text" id="bono3" readonly placeholder="Bono 3">
        </div>
        <div class="group">
            <label for="totalBono">Total de bonificación</label>
            <input type="text" id="totalBono" readonly placeholder="Total de bonificación">
        </div>
        <div class="group">
            <label for="aporte-especial">Aporte especial</label>
            <input type="text" id="aporte-especial" readonly placeholder="Aporte especial">
        </div>
        <div id="mensajeError" class="info"></div>
    </div>

</section>