<?php
  //Crear Evento
  session_start();

  if($_SESSION['validacion'] == 1){
    
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
            <li><a href="Actividad.php">Actividad</a></li>
            <li class="active"><a href="#">Anilisis<span class="sr-only">(current)</span></a></li>
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
          <h1 class="page-header">Analisis</h1>
          <div class="canvas-holder">
            <canvas id="myChart" width="auto" height="300"></canvas>
          <div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../../../ChartJs/Chart.js"></script>
    <script>
      var data = {
          labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
          datasets: [
              {
                  label: "Facebook Photos Shared",
                  fillColor: "rgba(220,220,220,0.2)",
                  strokeColor: "rgba(220,220,220,1)",
                  pointColor: "rgba(220,220,220,1)",
                  pointStrokeColor: "#fff",
                  pointHighlightFill: "#fff",
                  pointHighlightStroke: "rgba(220,220,220,1)",
                  data: [65, 59, 80, 81, 56, 55, 40]
              },
              {
                  label: "Facebook Photos Shared Last Month",
                  fillColor: "rgba(151,187,205,0.2)",
                  strokeColor: "rgba(151,187,205,1)",
                  pointColor: "rgba(151,187,205,1)",
                  pointStrokeColor: "#fff",
                  pointHighlightFill: "#fff",
                  pointHighlightStroke: "rgba(151,187,205,1)",
                  data: [28, 48, 40, 19, 86, 27, 90]
              }
          ]
      };
      // Get the context of the canvas element we want to select
      var ctx = document.getElementById("myChart").getContext("2d");
      var myLineChart = new Chart(ctx).Line(data, {bezierCurve: false});
      Chart.defaults.global.responsive = true;
    </script>
  </body>
</html>
<?php

  }else{
    header("Location: Vista/login");
  }
?>