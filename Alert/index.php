<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alert Personalizado</title>
	<!--Primeiro instale o Bootstrap no seu Projecto-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!--Segundo instale a API do SweetAlert -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

	<!--Agora Vamos fazer um simple exercício para testarmo-->

	<?php

		$Nota1 = 19;
		$Nota2 = 15;
		$Nota3 = 12.3;

		$Media = ($Nota3 + $Nota2 + $Nota1)/3;

		if($Media >= 14){
			#Apto direito
			echo "<script>
			Swal.fire({
			  icon: 'sucess',
			  title: 'Parabéns',
			  text: 'Você aprovou, a tua média é ".$Media."'
			})</script>";
		}elseif ($Media < 10) {
			#Recurso direito
			echo "<script>
			Swal.fire({
			  icon: 'error',
			  title: 'Oops...',
			  text: 'Você fará recurso, a tua média é ".$Media."'
			})</script>";
		}else{
			#Vai fazer o exame
			echo "<script>
			Swal.fire({
			  icon: 'info',
			  title: 'Exame',
			  text: 'Você fará o exame, a tua média é ".$Media."'
			})</script>";
		}
	?>
</body>
</html>