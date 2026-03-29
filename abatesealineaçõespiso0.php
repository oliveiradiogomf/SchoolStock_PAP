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

    <title>SchoolStock</title>

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
	
	<link href="images/logo1.png" rel="shortcut icon" />

    <!-- Styles -->
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
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
						<li><a href="admin.php"><i class="ti-home"></i>Voltar</a></li>
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
								  <a class="dropdown-item" href="logout.php"> <i class="ti-user"></i> Log Out</a>
                        </div>
			        </div>
                               </ul>
                </div>
           </div>
       </div>
    </div>



    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right"></div>
                </div>

				<center><div class="col-lg-10">
                            <div class="card">
                                <div class="card-title">
									<br>
									<h3><b>Abates e alineações (Piso 0)</b></h3>
									<br>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form name="abatesealineaçõespiso0" id="abatesealineaçõespiso0" action="abatesealineaçõespiso0" method="post">
                                            <div style='text-align:left' class="form-group">																						
                                                <label><h6><u><b>Alineações</b></u>
												<p>
												<p>
												Em que sala se encontra o bem:</h6></label>
                                                <br>
												<center>
													 <a class="btn btn-primary" href="alineações0.1.php"> Sala 0.1</a>
													 <a class="btn btn-primary" href="alineações0.2.php"> Sala 0.2</a>
													 <a class="btn btn-primary" href="alineações0.3.php"> Sala 0.3</a>
													 <a class="btn btn-primary" href="alineações0.4.php"> Sala 0.4</a>
													 <a class="btn btn-primary" href="alineações0.5.php"> Sala 0.5</a>
													 <a class="btn btn-primary" href="alineações0.6.php"> Sala 0.6</a>
													 <a class="btn btn-primary" href="alineações0.6.1.php"> Sala 0.6.1</a>
													 <a class="btn btn-primary" href="alineações0.7.php"> Sala 0.7</a>
													 <a class="btn btn-primary" href="alineaçõespast.php"> Pastelaria</a>
													 <a class="btn btn-primary" href="alineaçõesrest.php"> Restaurante Pedagógico</a>
                                                 <br>
												 </center>
												 <br>
                                            </div>
											<div style='text-align:left' class="form-group">																							
                                                <label><h6><u><b>Abates</b></u>
												<p>
												<p>
												Em que sala se encontra o bem:</h6></label>
												<br>
												<center>
													 <a class="btn btn-primary" href="abates0.1.php"> Sala 0.1</a>
													 <a class="btn btn-primary" href="abates.2.php"> Sala 0.2</a>
													 <a class="btn btn-primary" href="abates0.3.php"> Sala 0.3</a>
													 <a class="btn btn-primary" href="abates0.4.php"> Sala 0.4</a>
													 <a class="btn btn-primary" href="abates0.5.php"> Sala 0.5</a>
													 <a class="btn btn-primary" href="abates0.6.php"> Sala 0.6</a>
													 <a class="btn btn-primary" href="abates0.6.1.php"> Sala 0.6.1</a>
													 <a class="btn btn-primary" href="abates0.7.php"> Sala 0.7</a>
													 <a class="btn btn-primary" href="abatespast.php"> Pastelaria</a>
													 <a class="btn btn-primary" href="abatesrest.php"> Restaurante Pedagógico</a>
                                                 <br>
												 </center>
                                           </div>
	
									  <div class="text-right mt-5">
                                        </form>
								      </div>
                                   </div>
                               </div>
                          </div>
                      </div>
						
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
					        <br>
							<br>
								<center><big><b>Diogo Oliveira -<a class="text-primary" href="https://etpc.pt" target = "_blank"> etpc.pt</a></b></big></center>
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
    
    <!-- bootstrap -->


    <script src="js/lib/bootstrap.min.js"></script><script src="js/scripts.js"></script>
    <!-- scripit init-->

</body>
</html>