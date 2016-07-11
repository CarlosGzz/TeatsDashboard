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
    <meta name="description" content="Pagina Inicial de Treats Enterprise Dashboard">
    <meta name="author" content="Carlos Gonzalez/Chief IronMan Oficcer">
    <link rel="icon" href="Vista/IMG/diamond.ico">

    <title>Treats Enterprise Dashboard</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet" />


    <script src="js/jquery.min.js"></script>

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
                        <a href="index.php" class="site_title"><img id="mainIcon" style="width:30px;height:30px" src="Vista/IMG/diamond.ico" alt="Diamond"><span>Treats Dashboard</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <!--/Titulo del app-->

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="Vista/IMG/profile<?php echo $_SESSION['usuario'];?>.jpg" alt="..." class="img-circle profile_img">
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
                                        <li><a href="#">Overview</a>
                                        </li>
                                        <li><a href="Vista/Dashboard/compara.php">Compara</a>
                                        </li>
                                        <li><a href="Vista/Dashboard/encuestas.php">Encuestas</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-gift"></i>Treats <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="Vista/Treats/treatsData.php">Treats Data</a>
                                        </li>
                                        <li><a href="Vista/Treats/editTreat.php">Edit</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-clock-o"></i>Activity <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="Vista/Actividad/feed.php">Feed</a>
                                        </li>
                                        <li><a href="Vista/Actividad/fotos.php">Photos</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="Vista/Mas"><i class="fa fa-question"></i>¿Que mas te gustaria ver?</a>
                                </li>
                                <?php
                                    if($_SESSION["usuario"] == "superadmin"){
                                        echo "
                                             <li>
                                                <a href='Vista/AdminSite'>
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
                                    <img src="Vista/IMG/profile<?php echo $_SESSION['usuario'];?>.jpg" alt=""><?php echo $_SESSION['nombre'];?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li>
                                        <a href="Vista/Perfil/">Profile</a>
                                    </li>
                                    <li>
                                        <a href="Vista/Perfil/help.php">Help</a>
                                    </li>
                                    <li>
                                        <a href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
                    <!--Fast Insights-->
                    <div class="row top_tiles" style="margin: 10px 0;">
                        <div class="col-md-3 col-sm-3 col-xs-6 tile">
                            <span>Total Redeems</span>
                            <h2>2,000</h2>
                            <span class="sparkline_one" style="height: 160px;"><canvas width="196" height="40" style="display: inline-block; width: 196px; height: 40px; vertical-align: top;"></canvas></span>
                            <p>Semana en curso 15-29</p><!--Falta php con las horas que habre este establecimiento-->
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 tile">
                            <span>Peak Hour</span>
                            <h2>4pm</h2>
                            <span class="sparkline_two" style="height: 160px;"><canvas width="196" height="40" style="display: inline-block; width: 196px; height: 40px; vertical-align: top;"></canvas></span>
                            <p>Horas del Dia 10-11</p><!--Falta php con las horas que habre este establecimiento-->
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 tile">
                            <span>Total Activity</span>
                            <h2>30,000</h2>
                            <span class="sparkline_three" style="height: 160px;"><canvas width="200" height="40" style="display: inline-block; width: 200px; height: 40px; vertical-align: top;"></canvas></span>
                            <p>Semana en curso 15-29</p><!--Falta php con las horas que habre este establecimiento-->
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 tile">
                            <span>Usuario de la Semana</span>
                            <div class="best-user">
                                <a>
                                <img src="profile.jpg" >
                                <p>Carlos Gonzalez</p><!--Falta php donde se saque el usuario con mayor actividad en este lugar-->
                                </a>
                            </div>
                        </div>
                    </div>

                    <br />
                    <!--Social media print-->
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="dashboard_graph x_panel">
                                <div class="row x_title">
                                    <div class="col-md-6">
                                        <h3>Social Print <small>Actividad en linea</small></h3>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                            <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                        </div>
                                    </div>
                                </div>
                                <div class="x_content">
                                    <div id="placeholder3xx3" class="demo-placeholder" style="width: 100%; height:250px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Edades-->
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="x_panel fixed_height_320">
                                <div class="x_title">
                                    <h2>Edades</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="tile" style="width:100%">
                                        <tr>
                                            <th style="width:37%;">
                                                <span></span>
                                            </th>
                                            <th>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                    <span class="hidden-small">Rango</span>
                                                </div>
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                    <span class="hidden-small">Total</span>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                                            </td>
                                            <td>
                                                <table class="tile_info">
                                                    <tr>
                                                        <td>
                                                            <p><i class="fa fa-square blue"></i>18-24</p>
                                                        </td>
                                                        <td>38%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p><i class="fa fa-square green"></i>25-29</p>
                                                        </td>
                                                        <td>32%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p><i class="fa fa-square purple"></i>30-34</p>
                                                        </td>
                                                        <td>20%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p><i class="fa fa-square aero"></i>35-39</p>
                                                        </td>
                                                        <td>7%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p><i class="fa fa-square red"></i>40+</p>
                                                        </td>
                                                        <td>3%</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--Hombres y Mujeres-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="x_panel fixed_height_320">
                                <div class="x_title">
                                    <h2>Generos</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="tile" style="width:100%">
                                        <tr>
                                            <th style="width:37%;">
                                            </th>
                                            <th>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                    <span class="hidden-small">Genero</span>
                                                </div>
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                    <span class="hidden-small">%</span>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <canvas id="canvas2" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                                            </td>
                                            <td>
                                                <table class="tile_info">
                                                    <tr>
                                                        <td>
                                                            <p><i class="fa fa-square blue"></i>Hombres</p>
                                                        </td>
                                                        <td>40%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p><i class="fa fa-square green"></i>Mujeres</p>
                                                        </td>
                                                        <td>60%</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--Treats Redeeemed Level 1-->
                        <div class="col-md-4 col-sm-6 col-xs-12 widget_tally_box">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Treats</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div class="col-xs-12 bg-white progress_summary">

                                        <div class="row">
                                            <div class="progress_title">
                                                <span class="left">Treats Nivel 1</span>
                                                <span class="right">Total</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <br><br>

                                            <div class="col-xs-2">
                                                <span>Treat 1</span>
                                            </div>
                                            <div class="col-xs-8">
                                                <div class="progress progress_sm">
                                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                                                </div>
                                            </div>
                                            <div class="col-xs-2 more_info">
                                                <span>60%</span>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-xs-2">
                                                <span>Treat 2</span>
                                            </div>
                                            <div class="col-xs-8">
                                                <div class="progress progress_sm">
                                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
                                                </div>
                                            </div>
                                            <div class="col-xs-2 more_info">
                                                <span>30%</span>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-xs-2">
                                                <span>Treat 3</span>
                                            </div>
                                            <div class="col-xs-8">
                                                <div class="progress progress_sm">
                                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="10"></div>
                                                </div>
                                            </div>
                                            <div class="col-xs-2 more_info">
                                                <span>10%</span>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-xs-2">
                                                <span>Treat 4</span>
                                            </div>
                                            <div class="col-xs-8">
                                                <div class="progress progress_sm">
                                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="6"></div>
                                                </div>
                                            </div>
                                            <div class="col-xs-2 more_info">
                                                <span>6%</span>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-xs-2">
                                                <span>Treat 5</span>
                                            </div>
                                            <div class="col-xs-8">
                                                <div class="progress progress_sm">
                                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="4"></div>
                                                </div>
                                            </div>
                                            <div class="col-xs-2 more_info">
                                                <span>4%</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/Treats Redeeemed Level 1-->
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

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>
    <!-- gauge js -->
    <script type="text/javascript" src="js/gauge/gauge.min.js"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="js/moment/moment.min2.js"></script>
    <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
    <!-- sparkline -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>

    <script src="js/custom.js"></script>


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
    <!--JS necesario para las barras de arriba que incluyen los datos generales  Sparkcharts-->
    <script>
        $('document').ready(function () {
            $(".sparkline_one").sparkline([3, 4, 5, 6, 7, 6, 5, 4, 3, 4, 5, 6, 7, 8], {
                type: 'bar',
                height: '40',
                barWidth: 9,
                colorMap: {
                    '7': '#a1a1a1'
                },
                barSpacing: 2,
                barColor: '#26B99A'
            });
            $(".sparkline_two").sparkline([0, 0, 4, 6, 15, 13, 18, 12, 10, 19, 15, 9, 3, 0], {
                type: 'bar',
                height: '40',
                barWidth: 9,
                colorMap: {
                    '7': '#a1a1a1'
                },
                barSpacing: 2,
                barColor: '#26B99A'
            });
            $(".sparkline_three").sparkline([30, 40, 40, 55, 34, 28, 0, 46, 13, 41, 39, 60, 58, 0], {
                type: 'bar',
                height: '40',
                barWidth: 9,
                colorMap: {
                    '7': '#a1a1a1'
                },
                barSpacing: 2,
                barColor: '#26B99A'
            });
        });

    </script>
    <!-- Script para llenar la informacion de las ChartJS -->
    <script>
        $('document').ready(function () {

            var edadesDoughnutData = [
                {
                    value: 98,
                    color: "#3498DB"
                },
                {
                    value: 83,
                    color: "#1ABB9C"
                },
                {
                    value: 52,
                    color: "#9B59B6"
                },
                {
                    value: 18,
                    color: "#9CC2CB"
                },
                {
                    value: 8,
                    color: "#E74C3C"
                }
             ];
            var edadesDoughnut = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(edadesDoughnutData);

            var hombresMujeresPieData = [
                {
                    value: 104,
                    color: "#3498Db"
                },
                {
                    value: 156,
                    color: "#1ABB9C"
                }
             ];
            var hombresMujeresPie = new Chart(document.getElementById("canvas2").getContext("2d")).Pie(hombresMujeresPieData);
        })
    </script>
     <!-- Social Activity chart moris js -->
    <script src="js/moris/raphael-min.js"></script>
    <script src="js/moris/morris.js"></script>
    <script>
        $(function () {
            Morris.Bar({
            element: 'placeholder3xx3',
            data: [
                {socialActivity: 'Facebook Post', total: <?php echo 300;?>},
                {socialActivity: 'Facebook Photo', total: 137},
                {socialActivity: 'Twitter Post', total: 275},
                {socialActivity: 'Twitter Follow', total: 380},
                {socialActivity: 'Instagram Photo', total: 100},
                {socialActivity: 'Instagram Follow', total: 275},
                {socialActivity: 'Check In', total: 400}
            ],
            xkey: 'socialActivity',
            ykeys: ['total'],
            labels: ['Total'],
            barRatio: 0.4,

            barColors: function (row, series, type) {
                            //console.log("--> "+row.label, series, type);
                            if(row.label == "Facebook Post") return "#758AB7";
                            else if(row.label == "Facebook Photo") return "#758AB7";
                            else if(row.label == "Twitter Post") return "#88C5F3";
                            else if(row.label == "Twitter Follow") return "#88C5F3";
                            else if(row.label == "Instagram Photo") return "#FF7064";
                            else if(row.label == "Instagram Follow") return "#FF7064";
                            else if(row.label == "Check In") return "#FFCA7E";
                        },
            xLabelAngle: 20,
            hideHover: 'auto',
            resize : true,
            redraw: true
        });
    });
    </script>
    <!-- /Social Activity chart moris js -->
    <!-- datepicker -->
    <script type="text/javascript">
        $(document).ready(function () {

            var cb = function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }

            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: moment(),
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM/DD/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Clear',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            };
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function () {
                $('#reportrange').data('daterangepicker').remove();
            });
        });
    </script>
    <!-- /datepicker -->
</body>

</html>
<?php

  }else{
    header("Location: login.php");
  }
?>