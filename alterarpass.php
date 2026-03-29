<?php
session_start();
	include "DBConnection.php";
	if (!(isset($_SESSION['iduser']))) {
        header('location: index.php');
}
    function mysqli_result($res, $row, $field=0) { 
        $res->data_seek($row); 
        $datarow = $res->fetch_array(); 
        return $datarow[$field]; 
    } 
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alterar Password | SchoolStock</title>

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
                    <div class="logo"><a href="admin.php"><img src="images/logo1.png" alt="" /><span>ETPC</span></a></div>
                    <ul>
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
                            <div class="header-icon" data-toggle="dropdown"></div>
                        </div>

	                   <div class="dropdown dib">
                         <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                           Utilizador
                         </button>
                             <ul class="dropdown-menu dropdown-menu-right">
							 <a class="dropdown-item" href="logout.php"> <i class="ti-back-left"></i> Log Out</a>
					   </div>
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
            </div>
			<br>
                 <center><div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
								<br>
                                    <h3><b>Alterar Password</b></h3>
                                </div>
								<?php include "DBConnection.php";?>

                                <?php 
									if (isset($_SESSION["iduser"])) 
									{     
									 $fiduser = $_SESSION['iduser'];
									}
								?> 
															 
							    <?php

									$query  = "SELECT * FROM utilizadores where iduser = '$fiduser'";
									$result = mysqli_query($link,$query);
									$num = mysqli_num_rows($result);
									//mysqli_close($link);
									$i=0;

									//echo $result;
									$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

									while($i < $num)
									{
									$campo1 = mysqli_result($result,$i,"iduser");
									$campo2 = mysqli_result($result,$i,"user");
									$campo3 = mysqli_result($result,$i,"pass");


								?>
								
                                <div class="card-body">
                                   <div class="basic-form">
									<fieldset>
                                        <form name="form_pass" id="form_pass" action="alterarpass.php" method="post">
										<input id="fiduser" name="fiduser" value=" <?php echo $fiduser ?>" type="hidden" size ="20"/>
									    <label id="fiduser" for="fiduser"></label>
											
                                            <div style='text-align:left' class="form-group">
                                                <p class="text-muted m-b-15 f-s-12"><h6> ID</h6></p>
                                                <input name="fid2" id="fid2" value="<?php echo$campo1?>" type="text" class="form-control input-rounded" placeholder="Utilizador">
                                            </div>
											
											<div style='text-align:left' class="form-group">
                                                <p class="text-muted m-b-15 f-s-12"><h6> Utilizador</h6></p>
                                                <input name="fuser" id="fuser" value="<?php echo$campo2?>" type="text" class="form-control input-rounded" placeholder="Utilizador">
                                            </div>
											
                                            <div style='text-align:left' class="form-group">
                                                <p class="text-muted m-b-15 f-s-12"><h6> Password</h6></p></p>
                                                <input name="fpass" id="fpass" value="<?php echo$campo3?>" type="text" class="form-control input-rounded" placeholder="Password">
                                            </div>
											
									<div class="text-right mt-5">        
									  <button name="Introduzir" type="submit" class="btn btn-primary">Alterar</button>
									</div> 
									
					<?php
											if (isset($_POST["fiduser"])) 
											{				
												$fuser = $_POST['fuser'];
												$fpass = $_POST['fpass'];
												$fiduser2 = $_POST['fid2'];

												$query = mysqli_query($link,"update utilizadores set  user = '$fuser', pass = '$fpass' where iduser = '$fiduser2'");
												
												if($query){	
													echo "Actualizado com sucesso.";
												}else{
													echo "Erro ao Actualizar! Erro:".mysqli_error()."";
													}    
											  }
					?>
								
                                      </form>
								      </fieldset>
								        
                  
                  </div>
                </div>
              </div>
            </div>
						
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
							<br>
								<center><big><b>Diogo Oliveira -<a class="text-primary" href="https://etpc.pt" target = "_blank"> etpc.pt</a></b></big></center>
                            </div>
                        </div>
                    </div>
                </section>
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

<?php
    $i++;
    }
    ?>
	
</html>