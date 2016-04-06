<?php
  //Crear Evento
  session_start();

  if($_SESSION['validacion'] == 1){
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina de Perfil de Treats Enterprise Dashboard">
    <meta name="author" content="Carlos Gonzalez/Chief IronMan Oficcer">
    <link rel="icon" href="../IMG/diamond.ico">

    <title>Treats Enterprise Dashboard Profile</title>

  <!-- Bootstrap core CSS -->

  <link href="../../css/bootstrap.min.css" rel="stylesheet">

  <link href="../../fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="../../css/custom.css" rel="stylesheet">
  <link href="../../css/icheck/flat/green.css" rel="stylesheet">


  <script src="../../js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
      <!--Titulo del app-->
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><img id="mainIcon" style="width:30px;height:30px" src="../IMG/diamond.ico" alt="Diamond"><span>Treats Dashboard</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <!--/Titulo del app-->

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="../IMG/profile<?php echo $_SESSION['usuario'];?>.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?php echo $_SESSION['nombre'];?></h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3></h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-bar-chart"></i>Dashboard <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="../../">Overview</a>
                                        </li>
                                        <li><a href="../Dashboard/compara.php">Compara</a>
                                        </li>
                                        <li><a href="../Dashboard/encuestas.php">Encuestas</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-gift"></i>Treats <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="#">Treats Data</a>
                                        </li>
                                        <li><a href="editTreat.php">Edit</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-clock-o"></i>Activity <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="../Actividad/feed.php">Feed</a>
                                        </li>
                                        <li><a href="../Actividad/fotos.php">Photos</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="../Mas/index.php"><i class="fa fa-question"></i>¿Que mas te gustaria ver?</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="../IMG/profile<?php echo $_SESSION['usuario'];?>.jpg" alt=""><?php echo $_SESSION['nombre'];?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="../Perfil">Profile</a>
                                    </li>
                                    <li>
                                        <a href="../Perfil/help.php">Help</a>
                                    </li>
                                    <li><a href="../../login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->


      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Compara</h3>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><small>Contact us with for any problem</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                </div>
              </div>
            </div>
          </div>
        </div>

                <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">Treats Enterprise Dashboard | Made with love by the CIO
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->

      </div>
      <!-- /page content -->
    </div>

  </div>
  <!--notificaciones-->
  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>
  <!--/notificaciones-->

  <script src="../../js/bootstrap.min.js"></script>
  
  <!-- bootstrap progress js -->
  <script src="../../js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="../../js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="../../js/icheck/icheck.min.js"></script>

  <script src="../../js/custom.js"></script>

  <!-- daterangepicker -->
  <script type="text/javascript" src="../../js/moment/moment.min.js"></script>
  <script type="text/javascript" src="../../js/datepicker/daterangepicker.js"></script>

  <!-- pace -->
  <script src="../../js/pace/pace.min.js"></script>
  <!-- Script para hacer mas grande el icono --> 
    <script>
        var x=1;
        $("#menu_toggle").click(function(){
            if(x==1){
                $('#mainIcon').width(45);
                $('#mainIcon').height(45);
                x=0;
            }else
                if(x==0){
                    $('#mainIcon').width(30);
                    $('#mainIcon').height(30);
                    x=1;
                }
        }); 
    </script>
</body>

</html>
<?php

  }else{
    header("Location: ../../login.php");
  }
?>