<?php
session_start();

include "DBConnection.php";

if(!(isset($_SESSION['iduser']))) {
		header('location:index.php');
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>Admin | SchoolStock</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
	
	<link href="images/logo.svg" rel="shortcut icon" />
	
    <!-- Styles -->
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/lib/weather-icons.css" rel="stylesheet" />
    <link href="css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="admin.php">
                            <img src="images/logo1.png" alt="" /><span>ETPC</span></a></div>
					 <li class="label">Imobilizado</li>
						
						<li><a class="sidebar-sub-toggle"><i class="ti-import"></i> Inserir Bens <span
									class="sidebar-collapse-icon ti-angle-down"></span></a>
							<ul>
								<li><a href="inserir-benspiso0.php">Piso 0</a></li>
								<li><a href="inserir-benspiso1.php">Piso 1</a></li> 
							</ul>
						</li>
						
						<li><a class="sidebar-sub-toggle"><i class="ti-settings"></i> Manutenção dos bens <span
									class="sidebar-collapse-icon ti-angle-down"></span></a>
							<ul>
								<li><a href="manutençãopiso0.php">Piso 0</a></li>
								<li><a href="manutençãopiso1.php">Piso 1</a></li> 
							</ul>
						</li>
						
						<li><a class="sidebar-sub-toggle"><i class="ti-trash"></i> Abates e alineações <span
									class="sidebar-collapse-icon ti-angle-down"></span></a>
							<ul>
								<li><a href="abatesealineaçõespiso0.php">Piso 0</a></li>
								<li><a href="abatesealineaçõespiso1.php">Piso 1</a></li> 
							</ul>
						</li>
						
						<li><a class="sidebar-sub-toggle"><i class="ti-pencil"></i> Alterar estado do bem <span
									class="sidebar-collapse-icon ti-angle-down"></span></a>
							<ul>
								<li><a href="alterarestadopiso0.php">Piso 0</a></li>
								<li><a href="alterarestadopiso1.php">Piso 1</a></li> 
							</ul>
						</li>
						
						<li><a class="sidebar-sub-toggle"><i class="ti-folder"></i> Histórico dos bens <span
									class="sidebar-collapse-icon ti-angle-down"></span></a>
							<ul>
								<li><a href="historicobenspiso0.php">Piso 0</a></li>
								<li><a href="historicobenspiso1.php">Piso 1</a></li> 
							</ul>
						</li>
						
						<li><a href="verobservacoes.php"><i class="ti-eye"></i> Ver observações </a></li>
                 
                </ul>
            </div>
        </div>
    </div>

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown"></div>
                        </div>	
				 <div class="dropdown dib">
                         <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                           Utilizador
                         </button>
                            <ul class="dropdown-menu dropdown-menu-right">
							    <a class="dropdown-item" href="alterarpass.php"> <i class="ti-pencil"></i> Alterar Password</a>
								<a class="dropdown-item" href="logout.php"> <i class="ti-back-left"></i> Log Out</a>
                 </div>
                            </ul>
                    </div>
               </div>
            </div>
         </div>
     </div>
                
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                       <div class="page-header">
                            <div class="page-title">
                                <h1><b>Piso 0</b>
								<br>
                            </div>
							<p>
							<img src="images/PISO0.png">
							<br>
							<br>
							<a class="btn btn-primary" href="sala0.1.php"> 0.1</a>
							<a class="btn btn-primary" href="sala0.2.php"> 0.2</a>
							<a class="btn btn-primary" href="sala0.3.php"> 0.3</a>
							<a class="btn btn-primary" href="sala0.4.php"> 0.4</a>
							<a class="btn btn-primary" href="sala0.5.php"> 0.5</a>
						    <a class="btn btn-primary" href="sala0.6.php"> 0.6</a>
							<a class="btn btn-primary" href="sala0.6.1.php"> 0.6.1</a>
							<a class="btn btn-primary" href="sala0.7.php"> 0.7</a>	
                            <a class="btn btn-primary" href="pastelaria.php"> Pastelaria</a>		
                            <a class="btn btn-primary" href="restaurantepg.php"> Restaurante Pedagógico</a>									
							<br>
							<br>
							
							<div class="page-title">
                                <h1><b>Piso 1</b>
                            </div>
							<img src="images/PISO1.png">
							<br>
							<br>
						    <a class="btn btn-primary" href="sala1.1.php"> 1.1</a>
							<a class="btn btn-primary" href="sala1.2.php"> 1.2</a>
							<a class="btn btn-primary" href="sala1.3.php"> 1.3</a>
							<a class="btn btn-primary" href="sala1.4.php"> 1.4</a>
							<a class="btn btn-primary" href="sala1.5.php"> 1.5</a>
						    <a class="btn btn-primary" href="sala1.6.php"> 1.6</a>
							<a class="btn btn-primary" href="sala1.7.php"> 1.7</a>
							<a class="btn btn-primary" href="salaL1.php"> L1</a>	
                            <a class="btn btn-primary" href="salaL2.php"> L2</a>
							<a class="btn btn-primary" href="salaL3.php"> L3</a>
							<a class="btn btn-primary" href="salaL1CN.php"> L1 CN</a>
							<a class="btn btn-primary" href="salaL2CN.php"> L2 CN</a>
                        </div>
                    </div>

                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb"></ol>
                            </div>
                        </div>
                    </div>
             </div>
         
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>
								<center><big><b>Diogo Oliveira -<a class="text-primary" href="https://etpc.pt" target = "_blank"> etpc.pt</a></b></big></center>
								</br>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- jquery vendor -->
    <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="js/lib/menubar/sidebar.js"></script>
    <script src="js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="js/lib/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="js/lib/calendar-2/pignose.init.js"></script>

    <script src="js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="js/lib/weather/weather-init.js"></script>
    <script src="js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="js/lib/chartist/chartist.min.js"></script>
    <script src="js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="js/dashboard2.js"></script>
	
</body>
</html>