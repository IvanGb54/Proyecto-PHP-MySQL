<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Formulario de Registro/Login</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Registrarse</a></li>
        <li class="tab"><a href="#login">Ingresar</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Registrate gratis</h1>
          
          <form action="alta_usuario.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Usuario<span class="req">*</span>
              </label>
              <input type="text" name="usuario" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Contraseña<span class="req">*</span>
              </label>
              <input type="password" name="contrasena" required autocomplete="off"/>
            </div>
          </div>
          
          <div class="field-wrap">
            <label>
              Nombre completo<span class="req">*</span>
            </label>
            <input type="text" name="nombre" required autocomplete="off"/>
          </div>
          
          <button type="submit" name="enviardatos" class="button button-block"/>Enviar datos</button>
         
          </form>

        </div>
        
        <div id="login">   
          <h1>Bienvenido!</h1>
          
          <form action="login.php" method="post">
          
            <div class="field-wrap">
            <label>
              Usuario<span class="req">*</span>
            </label>
            <input type="text" name="usuario" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input type="password" name="contrasena" required autocomplete="off"/>
          </div>
          
          <button type="submit" name="login"  class="button button-block"/>Ingresar</button>

          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
