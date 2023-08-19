<?php
if(isset($_POST['enviar'])){
    session_start();

    $_SESSION['usuario'] = htmlentities($_POST['usuario']);

    $_SESSION['email'] = htmlentities($_POST['email']);
  
  header("Location: paginaSesion.php");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="login">
    <h1>Inicio de Sesion</h1>
    <form  method="POST">
      <div class="username">
        <input type="text"  name="usuario" placeholder="Usuario">
      </div>
      <div class="username">
        <input type="text"  name="email" placeholder="Correo">
      </div>
      <div class="recordar">¿Olvidastes tu contraseña?</div>
      <input type="submit" name="enviar" value="Iniciar">
      <div class="registrarse">
        <br>
        Quiero hacer el <a href="#">registro</a>
      </div>
    </form>
  </div>
</body>

</html>