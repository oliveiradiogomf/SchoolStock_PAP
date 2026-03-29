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
                                    <h3><b>Inserir Bens (Piso 0)</b></h3>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form name="inserirbenspiso0" id="inserirbenspiso0" action="inserir-benspiso0.php" method="post">
                                            <div style='text-align:left' class="form-group">	
											
											    <?php include "DBConnection.php"; echo "<br>"; ?>
												
												<div class= "mt-3"><label><h6>Escolha a sala que pretente inserir os bens:</h6></label><div class="mt-2"><select class="form-control input-rounded" name="idsala">
                                                <?php
                                                 $query = "SELECT * FROM sala where idpiso=15";
                                                 $result = mysqli_query($link,$query);
                                                 while($row = mysqli_fetch_array($result))
                                                 {
                                                 ?>
                                                 
												 <option value = "<?php echo $row['salas'];?>">
												 <?php echo $row['salas'];?></option>
													
                                                 <?php } ?>

                                                </select> </div> </div>
												
											    <p class="text-muted m-b-15 f-s-12"><h6> Nome do Bem </h6></p>                                                                         
                                                <input name="nomebem" type="text" class="form-control input-rounded" placeholder="Nome do Bem">
												
												<p class="text-muted m-b-15 f-s-12"><h6> Quantidade </h6></p>                                                                         
                                                <input name="quantidade" type="text" class="form-control input-rounded" placeholder="Quantidade">
												
                                                <p class="text-muted m-b-15 f-s-12"><h6> Número de Série </h6></p>                                                                         
                                                <input name="numerodeserie" type="text" class="form-control input-rounded" placeholder="Número de Série">
												
												 <p class="text-muted m-b-15 f-s-12"><h6> Data de aquisição </h6></p>
                                                <input name="dataaquisicao" class="form-control input-rounded" type="date" placeholder="Data de aquisição">
												
												 <p class="text-muted m-b-15 f-s-12"><h6> Valor de aquisição</h6></p>
                                                <input name="valoraquisicao" type="text" class="form-control input-rounded" placeholder="Valor de aquisição">
												
												 <p class="text-muted m-b-15 f-s-12"><h6> Data de abate </h6></p>
                                                 <input name="dataabate" class="form-control input-rounded" type="date" placeholder="Data de abate">
												
												<p class="text-muted m-b-15 f-s-12"><h6> Marca </h6></p>
                                                <input name="marca" type="text" class="form-control input-rounded" placeholder="Marca">
												
												<p class="text-muted m-b-15 f-s-12"><h6> Modelo </h6></p>
                                                <input name="modelo" type="text" class="form-control input-rounded" placeholder="Modelo">
												 
												<p class="text-muted m-b-15 f-s-12"><h6> Anexar Imagem </h6></p>
                                                <input name="anexarimagem" type="file" class="form-control input-rounded" placeholder="anexarimagem">
												
												<label for="cor"><h6>Cor</h6></label>
                                                    <select class="form-control input-rounded" name="cor" id="cor">
                                                          <option  value="branco">Branco</option>
														  <option  value="bege">Bege</option>  
                                                          <option  value="preto">Preto</option>
														  <option  value="castanho">Castanho</option>
														  <option  value="cizento">Cinzento</option>
                                                          <option  value="amarelo">Amarelo</option>
                                                          <option  value="laranja">Laranja</option>
														  <option  value="vermelho">Vermelho</option>
                                                          <option  value="roxo">Roxo</option>
														  <option  value="rosa">Rosa</option>
                                                          <option  value="azul">Azul</option>
                                                          <option  value="verde">Verde</option>                     
                                                    </select>		

												<p class="text-muted m-b-15 f-s-12"><h6> Estado </h6></p>
                                                <input name="estado" type="text" class="form-control input-rounded" placeholder="Estado">													
												
                                            </div>
									<div class="text-right mt-10">
									  <br>
									  <button name="Introduzir" type="submit" class="btn btn-primary">Inserir</button>
									  <button name="Limpar" type="reset" class="btn btn-white">Limpar</button>
                                       </form>
								    </div>
									
<?php
            if ((isset($_POST["idsala"])) && (isset($_POST["nomebem"])) && (isset($_POST["quantidade"])) && (isset($_POST["numerodeserie"])) && (isset($_POST["dataaquisicao"])) && (isset($_POST["valoraquisicao"])) && (isset($_POST["dataabate"])) && (isset($_POST["marca"])) && (isset($_POST["modelo"])) && (isset($_POST["anexarimagem"])) && (isset($_POST["cor"])) && (isset($_POST["estado"])) )
            {				
				$fidsala    = $_POST["idsala"];
				$fnomebem    = $_POST["nomebem"];
				$fquantidade   = $_POST["quantidade"];
				$fnumerodeserie    = $_POST["numerodeserie"];
				$fdataaquisicao  = $_POST["dataaquisicao"];
				$fvaloraquisicao    = $_POST["valoraquisicao"];
				$fdataabate = $_POST["dataabate"];
				$fmarca    = $_POST["marca"];
				$fmodelo = $_POST["modelo"];
				$fanexarimagem = $_POST["anexarimagem"];
				$fcor  = $_POST["cor"];
				$festado  = $_POST["estado"];
				
            	$query = mysqli_query($link,"insert into bem (idsala, nomebem, quantidade, numerodeserie, dataaquisicao, valoraquisicao, dataabate, marca, modelo, anexarimagem, cor, estado) values ('$fidsala', '$fnomebem', '$fquantidade', '$fnumerodeserie', '$fdataaquisicao', '$fvaloraquisicao', '$fdataabate', '$fmarca', '$fmodelo', '$fanexarimagem','$fcor', '$festado')");
            if ($query)
            	{
            	echo  "Os bens foram inseridos com sucesso";
            	}
            	else
            	{
            	echo "Erro ao inserir os bens! Erro: " . mysqli_error($link) . "";
            	}
			}

?>
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