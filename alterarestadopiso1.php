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

    <title>Alterar Estado | SchoolStock</title>

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
                                    <h3><b>Alterar estado dos bens (Piso 1)</b></h3>
									<br>
                                </div>							
                               <table class="table table-report -mt-2">
                            <thead>
                                <tr>
								    <th class="text-center whitespace-no-wrap">Salas</th>
                                    <th class="text-center whitespace-no-wrap">Bem</th>
								    <th class="text-center whitespace-no-wrap">Quantidade</th>
                                    <th class="text-center whitespace-no-wrap">Número de série</th>
                                    <th class="text-center whitespace-no-wrap">Data de aquisição</th>
                                    <th class="text-center whitespace-no-wrap">Valor de aquisição</th>
                                    <th class="text-center whitespace-no-wrap">Data de abate</th>
                                    <th class="text-center whitespace-no-wrap">Marca</th>
                                    <th class="text-center whitespace-no-wrap">Modelo</th>
                                    <th class="text-center whitespace-no-wrap">Cor</th>
									<th class="text-center whitespace-no-wrap">Estado</th>
                                </tr>
                            </thead>

							<?php include "DBConnection.php"; echo "<br>"; ?>		
									  
                            <?php
                                $query = "select * from ((bem INNER JOIN sala on bem.idsala=sala.idsala) INNER JOIN piso on sala.idpiso=piso.idpiso) where piso.idpiso=16";
                                $result = mysqli_query($link,$query);
                                while($row = mysqli_fetch_array($result))
                                {    
                                ?>
                                <tr class="intro-x">
									<td  class="text-center" >
                                        <?php echo" {$row['salas']}" ; ?>
                                    </td>
									<td  class="text-center" >
                                        <?php echo" {$row['nomebem']}" ; ?>
                                    </td>
									<td  class="text-center" >
                                        <?php echo" {$row['quantidade']}" ; ?>
                                    </td>
                                    <td  class="text-center" >
                                        <?php echo" {$row['numerodeserie']}" ; ?>
                                    </td>
                                    <td class="text-center" >
                                        <?php echo "{$row['dataaquisicao']} "; ?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo "{$row['valoraquisicao']}";  ?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo "{$row['dataabate']}";  ?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo "{$row['marca']}";  ?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo "{$row['modelo']}";  ?>
                                    </td>
                                     <td class="text-center">
                                        <?php echo "{$row['cor']}";  ?>
                                    </td>
                                    <td class="text-center" >
                                        <?php echo "{$row['estado']} "; ?>
                                    </td>
                                </tr>
								
                                <?php
                                }
                                
                                ?>
							
                                  </table>
                           </div>
						    <br>
                            <div class="text-right mt-10">
							    <a class="btn btn-primary" href="alterarestadopiso1.1.php">Alterar</a>
							</div>
                       </div>
                 </div>
          </div> 

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
								<center><big><b>Diogo Oliveira -<a class="text-primary" href="https://etpc.pt" target = "_blank"> etpc.pt</a></b></big></center>
							</div>
                        </div>
                    </div>
                </section>
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