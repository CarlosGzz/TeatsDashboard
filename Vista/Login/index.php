<?php
  //Index
  session_start();
  session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Pagina de login para Treats Enterprise Dashboard">
    <meta name="author" content="Carlos Gonzalez/Chief IronMan Oficcer">
    <link rel="icon" href="../diamond.ico">

    <title>Signin For Treats Enterprise Dashboard/title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../../bootstrap/signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="logo">Treats Enterprise Dashboard</div>
    <div class="login-block">
        <h1>Login</h1>
        <div class="alert alert-danger" role="alert" id="mensaje" style="display: none;">
        </div>
        <form action="../../Controlador/login.php" method="POST" name="form">
          <input type="text" value="" placeholder="Usuario" class="user" id="user" name="user" onchange="validateChar(this)" />
          <input type="password" value="" placeholder="Contraseña" class="pass" id="pass" name="pass" onchange="validateChar(this)" />
          <button type="button" id="envia">Ingresar</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../Controlador/JS/loginOperations.js"></script>
    <script type="text/javascript" src="../../Controlador/JS/validarInput.js"></script>
  </body>
</html>