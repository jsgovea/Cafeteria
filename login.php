<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
      <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="wrapper fadeInDown">
  <div id="formContent">
      <!-- Tabs Titles 
      <h2 class="active"> Sign In </h2>
      <h2 class="inactive underlineHover">Sign Up </h2>
  -->
      <!-- Icon -->
      <div class="fadeIn first">
        <img src="logos/logo.png" width="30" height="270" id="icon" alt="User Icon" />
      </div>

      <!-- Login Form -->
      <form action="validar_usuario.php" method="POST">
        <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Usuario" autocomplete="off">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
        <input type="submit" class="fadeIn fourth" value="Ingresar">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
          <!-- <a class="underlineHover" href="#">¿Olvidaste la contraseña?</a> -->
      </div>
    </div>
  </div>
</body>
</html>
