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

    <title>Ver observações | SchoolStock</title>

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
                            <img src="images/logo1.png" alt="" /><span>ETPC</span></a>
					</div>
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
                            <div class="header-icon" data-toggle="dropdown">
                                
                            </div>
                        </div>
						<div class="dropdown dib">
                         <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                           Utilizador
                         </button>
                            <ul class="dropdown-menu dropdown-menu-right">
							    <a class="dropdown-item" href="alterarpass.php"> <i class="ti-pencil"></i> Alterar Password</a>
								<a class="dropdown-item" href="logout.php"> <i class="ti-back-left"></i> Log Out</a>									
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
				<br>
                            <div class="card">
                                <div class="card-title">
								<br>
                                    <h3><b>Observações</b></h3>
									<br>
                                </div>						
                               <table class="table table-report -mt-2">
                            <thead>
                                <tr>
                                    <th class="text-center whitespace-no-wrap"><div style='text-align:left'><h6>Observações que foram inseridas:</th>
                                </tr>
                            </thead>

						      <?php include "DBConnection.php"; ?>	
								
                           <?php
                                $query = "SELECT* FROM observacoes ";
                                $result = mysqli_query($link,$query);
                                while($row = mysqli_fetch_array($result))
                                {    
                                ?>
                                <tr class="intro-x">
								    <td  class="text-center" >
                                        <?php echo" {$row['observacoes']}" ; ?>
                                    </td>
                                </tr>
								
                                <?php
                                }
                                
                                ?>
							
                                  </table>
                                 <br>
                                    </div>
                            </div>
                       </div>
           </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
							<br>
								<center><big><b>Diogo Oliveira -<a class="text-primary" href="https://etpc.pt" target = "_blank"> etpc.pt</a></b></big></center>
								<p>
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