<?php

//Conecta com a base de dados
include 'DBConnection.php';

//Recebe os dados do formulário
$user=$_POST['user'];
$pass=$_POST['pass'];

//verifica

$sql = mysqli_query($link,"select * FROM utilizadores where user = '$user' AND pass = '$pass'") or die("Erro no comando SQL");

//linhas Afectadas pela consulta 
$row = mysqli_num_rows($sql);

//Verifica se devolveu algo
if($row == 0){
session_start();
$pag='login.php?erro=1';
$_SESSION['erro']=1;
Header("Location:$pag");
}
else{
	
		$row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
		
		$id = $row['iduser'];
		 //Inicializa a sessão
		session_start();
		
			//Grava as variáveis na sessão
			
			$_SESSION['iduser'] = $id;
			$_SESSION['erro'] = 0;
			
				if ($id==1){
					header("Location:admin.php");
				}
				else{
					header("Location:admin.php");
				}
	}//fecha else
?>