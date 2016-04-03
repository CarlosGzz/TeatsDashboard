<?php
  //Crear Evento
  session_start();

  if($_SESSION['validacion'] == 1){

    function llenarActividades(){

    }
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Pagina de Inicio para Treats Enterprise Dashboard">
    <meta name="author" content="Carlos Gonzalez/Chief IronMan Oficcer">
    <link rel="icon" href="IMG/diamond.ico">

    <title>Treats Enterprise Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../bootstrap/dashboard.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Treats Enterprise Dashboard</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="Configuracion.php">Configuración</a></li>
            <li><a href="Perfil.php">Perfil</a></li>
            <li><a href="Ayuda.php">Ayuda</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="../">Vista General</a></li>
            <li class="active"><a href="#">Actividad<span class="sr-only">(current)</span></a></li>
            <li><a href="Analisis.php">Anilisis</a></li>
            <li><a href="Treats.php">Treats</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">¿Quieres mas?</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Feed</h1>
            <div class="scroll">
              <div class="panel-group">
                <!-- primero if para la fecha, que cambie cada vez que el dia sea diferente -->
                <h4>SEP 17</h4>
                <div class="panel panel-default">
                  <!-- panel del cuerpo-->
                  <div class="panel-body">
                    <span class="glyphicon glyphicon-thumbs-up"></span><!-- icono que representa la actividad-->
                    Activity realized <!-- actividad-->
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-body">
                    <span class="glyphicon glyphicon-thumbs-up"></span>
                    Activity realized
                  </div>
                </div>
              </div>
              <div class="panel-group">
                <h4>SEP 16</h4>
                <div class="panel panel-default">
                  <div class="panel-body">
                    <span class="glyphicon glyphicon-thumbs-up"></span>
                    Activity realized
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-body">
                    <span class="glyphicon glyphicon-thumbs-up"></span>
                    Activity realized
                  </div>
                </div>
                <!-- IF la actividad es una foto de facebook usar este panel-->
                <div class="panel panel-default">
                  <div class="panel-body">
                    <span class="glyphicon glyphicon-picture"></span><!-- icono que representa la actividad-->
                    <a data-toggle="collapse" href="#collapse1">Actividad Fue Foto</a>
                  </div> <!--link para poder abrir informacion extra-->
                  <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-footer"><img class="img-responsive" src="https://scontent-lax3-1.xx.fbcdn.net/hphotos-xtl1/v/t1.0-9/12801679_10153302681122315_6632714666820450810_n.jpg?_nc_eui=ARheYWOB20YameezYVhylBB3GmDjfOwrcdXG0JxUhycGgEeflXL0&oh=6b1053c805daf8c5cb7b0d16dba0824c&oe=57870919" alt="foto de persona de facebook"></div>
                  </div>
                </div>
                <!-- IF la actividad es una Post usar este panel-->
                <div class="panel panel-default">
                  <div class="panel-body">
                    <span class="glyphicon glyphicon-picture"></span><!-- icono que representa la actividad-->
                    <a data-toggle="collapse" href="#collapse2">Actividad Fue Post</a>
                  </div> <!--link para poder abrir informacion extra-->
                  <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-footer">
                        <p>
                          NUEVA escena inédita del arresto de ‪#‎LexLuthor‬ en ‪#‎BatmanVSuperman‬
¡                         "Ya sonaron las campanas ding ding ding"!
                        </p>
                    </div>
                  </div>
                </div>
                <h4>SEP 17</h4>
                <div class="panel panel-default">
                  <!-- panel del cuerpo-->
                  <div class="panel-body">
                    <span class="glyphicon glyphicon-thumbs-up"></span><!-- icono que representa la actividad-->
                    Activity realized <!-- actividad-->
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-body">
                    <span class="glyphicon glyphicon-thumbs-up"></span>
                    Activity realized
                  </div>
                </div>
              </div>
              <div class="panel-group">
                <h4>SEP 16</h4>
                <div class="panel panel-default">
                  <div class="panel-body">
                    <span class="glyphicon glyphicon-thumbs-up"></span>
                    Activity realized
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-body">
                    <span class="glyphicon glyphicon-thumbs-up"></span>
                    Activity realized
                  </div>
                </div>
              </div>
              
              <a href="scrolltest.php">next page</a>
            </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../../../JScroll/jquery.jscroll.min.js" /></script>
    <script src="../../../JScroll/jquery.jscroll.js" /></script>
    <script type="text/javascript">
      $(document).ready(function() { 
        $('.scroll').jscroll({
          autoTrigger: true,
          padding: 15
        })
      });
    </script>
    
  </body>
</html>
<?php

  }else{
    header("Location: Vista/login");
  }
?>