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
    <meta name="description" content="Pagina De Administrador de Treats Enterprise Dashboard">
    <meta name="author" content="Carlos Gonzalez/Chief IronMan Oficcer">
    <link rel="icon" href="../IMG/diamond.ico">

    <title>Treats Enterprise Dashboard Admin Site</title>

  <!-- Bootstrap core CSS -->

  <link href="../../css/bootstrap.min.css" rel="stylesheet">

  <link href="../../fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="../../css/custom.css" rel="stylesheet">
  <link href="../../css/icheck/flat/green.css" rel="stylesheet">


  <script src="../../js/jquery.min.js"></script>

  <link href="../../css/select/select2.min.css" rel="stylesheet">

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

            <div class="col-md-3 left_col menu_fixed">
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
                                        <li><a href="../Treats/treatsData.php">Treats Data</a>
                                        </li>
                                        <li><a href="../Treats/editTreat.php">Edit</a>
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
                                <?php
                                    if($_SESSION["usuario"] == "superadmin"){
                                        echo "
                                             <li>
                                                <a href=''>
                                                    <i class='fa fa-code'></i>AdminSite
                                                </a>
                                             </li>
                                             ";
                                    }
                                ?>
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
                        <h3>Admin Panel   <small> Altas en BD</small></h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <!--Columna Izquierda-->
                        <div class="col-md-6 col-xs-12">
                            <!--Empresa-->
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Empresa <small></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br>
                                    <div class="alert alert-danger" role="alert" id="mensajeEmpresa" style="display: none;"></div>
                                    <!--Empresa Form-->
                                    <form id="empresaForm" data-parsley-validate class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="RFC">RFC <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="rfc" name="rfc" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombreEmpresa"> Nombre 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="nombreEmpresa" name="nombreEmpresa" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button id="submitEmpresa" type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!--/Empresa Form-->
                                </div>
                            </div>
                            <!--/Empresa-->

                            <!--Lugar-->
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Lugar <small></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br>
                                    <div class="alert alert-danger" role="alert" id="mensajeLugar" style="display: none;"></div>
                                    <!--Lugar Form-->
                                    <form id="lugarForm" data-parsley-validate class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombreLugar">Nombre 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="nombreLugar" name="nombreLugar" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccionLugar"> Direccion 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="direccionLugar" name="direccionLugar" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="latitud"> Latitud 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="latitud" name="latitud" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="longitud"> Longitud 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="longitud" name="longitud" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paginaWeb"> Pagina Web 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="url" id="paginaWeb" name="paginaWeb" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcionLugar"> Descripcion 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="descripcionLugar" name="descripcionLugar" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <?php
                                            require "../../Controlador/Admin/CategoriaLugar.php"
                                        ?>
                                        <?php
                                            require "../../Controlador/Admin/EmpresaSelect.php"
                                        ?>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button id="submitLugar" type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                     <!-- /Lugar Form -->
                                </div>
                            </div>
                            <!--/Lugar-->

                            <!--Treat-->
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Treat <small></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br>
                                    <div class="alert alert-danger" role="alert" id="mensajeTreat" style="display: none;"></div>
                                    <!--Treat Form-->
                                    <form id="treatForm" data-parsley-validate class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="RFC">Descripcion <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="descripcionTreat" name="descripcionTreat" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="puntosTreat"> Puntos 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="number" id="puntosTreat" name="puntosTreat" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <?php
                                            require "../../Controlador/Admin/LugarSelect.php"
                                        ?>
                                        <div class="form-group" >
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nivel"> Nivel 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="number" id="nivel" name="nivel" required="required" class="form-control col-md-7 col-xs-12" value="1" readonly>
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button id="submitTreat" type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                    <!--/Treat Form-->
                                </div>
                            </div>
                            <!--/Treat-->
                        </div>
                        <!--Columna Izquierda-->
                        <!--Columna Derecha-->
                        <div class="col-md-6 col-xs-12">
                            <!--Empresa-->
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Categoria <small>Lugares</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br>
                                    <div class="alert alert-danger" role="alert" id="mensajeCategoria" style="display: none;"></div>
                                    <!--Empresa Form-->
                                    <form id="empresaForm" data-parsley-validate class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="RFC">RFC <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="rfc" name="rfc" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombreEmpresa"> Nombre 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="nombreEmpresa" name="nombreEmpresa" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button id="submitEmpresa" type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!--/Empresa Form-->
                                </div>
                            </div>
                            <!--/Empresa-->

                            <!--Lugar-->
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Lugar <small></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br>
                                    <div class="alert alert-danger" role="alert" id="mensajeLugar" style="display: none;"></div>
                                    <!--Lugar Form-->
                                    <form id="lugarForm" data-parsley-validate class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombreLugar">Nombre 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="nombreLugar" name="nombreLugar" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccionLugar"> Direccion 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="direccionLugar" name="direccionLugar" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="latitud"> Latitud 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="latitud" name="latitud" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="longitud"> Longitud 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="longitud" name="longitud" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paginaWeb"> Pagina Web 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="url" id="paginaWeb" name="paginaWeb" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcionLugar"> Descripcion 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="descripcionLugar" name="descripcionLugar" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <?php
                                            require "../../Controlador/Admin/CategoriaLugar.php"
                                        ?>
                                        <?php
                                            require "../../Controlador/Admin/EmpresaSelect.php"
                                        ?>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button id="submitLugar" type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                     <!-- /Lugar Form -->
                                </div>
                            </div>
                            <!--/Lugar-->

                            <!--Treat-->
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Treat <small></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br>
                                    <div class="alert alert-danger" role="alert" id="mensajeTreat" style="display: none;"></div>
                                    <!--Treat Form-->
                                    <form id="treatForm" data-parsley-validate class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="RFC">Descripcion <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" id="descripcionTreat" name="descripcionTreat" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="puntosTreat"> Puntos 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="number" id="puntosTreat" name="puntosTreat" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <?php
                                            require "../../Controlador/Admin/LugarSelect.php"
                                        ?>
                                        <div class="form-group" >
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nivel"> Nivel 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="number" id="nivel" name="nivel" required="required" class="form-control col-md-7 col-xs-12" value="1" readonly>
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button id="submitTreat" type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                    <!--/Treat Form-->
                                </div>
                            </div>
                            <!--/Treat-->
                        </div>
                        <!--Columna Derecha-->
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
    <!-- NProgress -->
    <script src="../../js/nprogress.js"></script>

    <script src="../../js/custom.js"></script>
    <!-- Select2 -->
    <script src="../../js/select/select2.full.js"></script>
    <script>
      $(document).ready(function() {
        $(".select1_single").select2({
          placeholder: "Selecciona una Empresa",
          allowClear: true
        });
        $(".select2_single").select2({
          placeholder: "Selecciona un lugar",
          allowClear: true
        });
      });
    </script>


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

    <!-- Script para dar de alta una empresa con ajax--> 
    <script type="text/javascript">
    $(document).ready(function(){
        $("#submitEmpresa").click(function(){
            var nombre = $("#nombreEmpresa").val();
            var rfc = $("#rfc").val();
            
            if(nombre==''|| rfc==''){
                alert("Favor de llenar todos los campos");
            }else{
            // AJAX Code To Submit Form.
                $.ajax({
                    url: "../../Controlador/Admin/AltaEmpresa.php",
                    method: 'POST',
                    data: {rfc: rfc, nombreEmpresa: nombre},
                    cache: false,
                    success: function(result){
                        alert(result);
                        if(result=='1'){
                            $('#mensajeEmpresa').empty(),
                            $('#mensajeEmpresa').show(),
                            $('#mensajeEmpresa').removeClass("alert alert-danger")
                            $('#mensajeEmpresa').addClass("alert alert-success"),
                            $('#mensajeEmpresa').html('<span aria-hidden="true"><i class="fa fa-check"></i></span>Empresa dada de alta');
                            $("#empresaForm").trigger("reset");

                        }else{
                            $('#mensajeEmpresa').empty(),
                            $('#mensajeEmpresa').removeClass("alert alert-success")
                            $('#mensajeEmpresa').addClass("alert alert-danger"),
                            $('#mensajeEmpresa').show(),
                            $('#mensajeEmpresa').html('<span aria-hidden="true"><i class="fa fa-close"></i></span> Error al dar de alta Empresa ');
                        }
                    }
                });
            }
            return false;
        });
    }); 
    </script>

    <!-- Script para dar de alta un lugar con ajax--> 
    <script type="text/javascript">
    $(document).ready(function(){
        $("#submitLugar").click(function(){
            var nombreLugar = $("#nombreLugar").val();
            var direccion = $("#direccionLugar").val();
            var latitud = $("#latitud").val();
            var longitud = $("#longitud").val();
            var descripcionLugar = $("#descripcionLugar").val();
            var paginaWeb = $("#paginaWeb").val();
            var categoriaLugar = $("#categoriaLugar").val();
            var rfcEmpresa = $("#rfcEmpresa").val();
            // Returns successful data submission message when the entered information is stored in database.
            if(nombreLugar==''|| direccion=='' || latitud=='' || longitud=='' || descripcionLugar=='' || paginaWeb=='' || categoriaLugar=='' || rfcEmpresa=='') {
                alert("Favor de llenar todos los campos");
            }else{
            // AJAX Code To Submit Form.
                $.ajax({
                    url: "../../Controlador/Admin/AltaLugar.php",
                    method: 'POST',
                    data: {nombreLugar:nombreLugar, direccionLugar:direccion, latitud:latitud, longitud:longitud, descripcionLugar:descripcionLugar, paginaWeb: paginaWeb,categoriaLugar:categoriaLugar, rfcEmpresa:rfcEmpresa},
                    cache: false,
                    success: function(result){
                        alert(result);
                        if(result=='1'){
                            $('#mensajeLugar').empty(),
                            $('#mensajeLugar').show(),
                            $('#mensajeLugar').removeClass("alert alert-danger")
                            $('#mensajeLugar').addClass("alert alert-success"),
                            $('#mensajeLugar').html('<span aria-hidden="true"><i class="fa fa-check"></i></span>Lugar dado de alta');
                            $("#lugarForm").trigger("reset");
                        }else{
                            $('#mensajeLugar').empty(),
                            $('#mensajeLugar').removeClass("alert alert-success")
                            $('#mensajeLugar').addClass("alert alert-danger"),
                            $('#mensajeLugar').show(),
                            $('#mensajeLugar').html('<span aria-hidden="true"><i class="fa fa-close"></i></span> Error al dar de alta Lugar ');
                        }
                    }
                });
            }
            return false;
        });
    }); 
    </script>

    <!-- Script para dar de alta un lugar con ajax--> 
    <script type="text/javascript">
    $(document).ready(function(){
        $("#submitTreat").click(function(){
            var descripcionTreat = $("#descripcionTreat").val();
            var puntosTreat = $("#puntosTreat").val();
            var idLugar = $("#idLugar").val();
            var nivel = $("#nivel").val();
            // Returns successful data submission message when the entered information is stored in database.
            if(descripcionTreat==''|| puntosTreat=='' || idLugar=='' || nivel=='') {
                alert("Favor de llenar todos los campos");
            }else{
            // AJAX Code To Submit Form.
                $.ajax({
                    url: "../../Controlador/Admin/AltaTreat.php",
                    method: 'POST',
                    data: {descripcionTreat:descripcionTreat, puntosTreat:puntosTreat, idLugar:idLugar, nivel:nivel},
                    cache: false,
                    success: function(result){
                        alert(result);
                        if(result=='1'){
                            $('#mensajeTreat').empty(),
                            $('#mensajeTreat').show(),
                            $('#mensajeTreat').removeClass("alert alert-danger")
                            $('#mensajeTreat').addClass("alert alert-success"),
                            $('#mensajeTreat').html('<span aria-hidden="true"><i class="fa fa-check"></i></span>Treat dado de alta');
                            $("#treatForm ").trigger("reset");
                        }else{
                            $('#mensajeTreat').empty(),
                            $('#mensajeTreat').removeClass("alert alert-success")
                            $('#mensajeTreat').addClass("alert alert-danger"),
                            $('#mensajeTreat').show(),
                            $('#mensajeTreat').html('<span aria-hidden="true"><i class="fa fa-close"></i></span> Error al dar de alta Treat ');
                        }
                    }
                });
            }
            return false;
        });
    }); 
    </script>

</body>
</html>
<?php

  }else{
    header("Location: ../../login.php");
  }
?>