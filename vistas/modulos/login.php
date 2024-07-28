<div id="back"></div>

<div class="login-box">
  
  <div class="login-logo">

  <img src="vistas/img/plantilla/molinera-login.png" class="img-responsive" style="padding: 10px 100px 0px 100px">

  </div>

  <style>
  .login-box-body {
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 400px;
    margin: 50px auto;
  }

  .login-box-msg {
    text-align: center;
    font-size: 20px;
    margin-bottom: 20px;
    color: #333;
  }

  .form-group {
    margin-bottom: 20px;
  }

  .form-control {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    transition: border-color 0.3s, background-color 0.3s;
    background-color: rgba(255, 255, 255, 0.8);
  }

  .form-control:focus {
    border-color: #70F321;
    background-color: rgba(255, 255, 255, 1);
    outline: none;
  }

  .form-control-feedback {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 10px;
    color: #aaa;
  }

  .btn-primary {
    background-color: #70F321;
    color: #fff;
    border: none;
    padding: 10px;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
  }

  .btn-primary:hover {
    background-color: #B7F98F;
    transform: scale(1.05);
  }
</style>

  <div class="login-box-body">

    <p class="login-box-msg">Ingresar al sistema</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" onkeyup="limpiarNumero(this)" placeholder="Usuario" name="ingUsuario" required autocomplete="off">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" onkeyup="limpiarNumero(this)" placeholder="Contraseña" name="ingPassword" required autocomplete="off">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      
      </div>

      <div class="row">
       
        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        
        </div>

      </div>


      <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
        
      ?>

    </form>

  </div>
</div>
