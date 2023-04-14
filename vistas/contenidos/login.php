<div class="form formLogin">
  <h1 class="title title-left title-size title-color">Login</h1>
  <div class="input-field">
    <input type="text" id="username" placeholder="Escribe tu usuario" required>
    <i class="uil uil-envelope icon"></i>
  </div>
  <div class="input-field">
    <input type="password" id="password" class="password" placeholder="Escribe tu contraseña" required>
    <i class="uil uil-lock icon"></i>
    <i class="uil uil-eye-slash showHidePw"></i>
  </div>
  <div class="input-field button">
    <button id="btnLogin">Iniciar Sesión</button>
  </div>
  <a href="<?php echo SERVERURL ?>" class="btnReturn">Ir a Inicio</a>
  <div id="info" class="info"></div>
</div>