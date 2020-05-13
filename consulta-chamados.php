<?php 
	require_once "valida_acesso.php";
	require "controle.php";

	//echo '<pre>';
	//print_r($getConsulta);
    //echo '</pre>';

   //print_r($_SESSION['perfil']);

	

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Consultar chamados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilo.css">

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="script.js"></script>

 <style>

 	div#cabecalho img{
	display: inline-block;
	border: 1px solid #4682B4;
	position: relative;
	margin-left: 20px;
	margin-right: 10px;
	margin-top: 10px;
}
div#cabecalho h1{
	display: inline-block;
	position: relative;
	top:-30px;
	border: 1px solid #4682B4 ;
	color: white;
	font-size: 26pt;
}

div#cabecalho a{
	float: right;
	font-family: arial;
	font-size: 15pt;
	position: relative;
	top: 27px;
	left: -20px;
	color: black;
	text-decoration: none;
}
div#cabecalho a:hover{
	text-decoration: underline;
}
footer#rodape{
 	margin-top: -18px;
 	clear: both;
 	font-family: arial;
 	font-size: 13pt;
 	background: #1C1C1C;
 	text-align: center;
 	height: 60px;
 	color: white;
 }

 /*ABRIR-CHAMADO*/

div#titulo-chamado{
	width: 1100px;
	margin: auto;
	margin-bottom: 60px;
	padding-bottom: 50px;

}
div#titulo-chamado h3{
	padding: 5px;
	font-family: arial;
}
div#titulo-chamado h4{
	padding: 5px;
	font-family: arial;
	margin-top: -18px;
	color: #708090;
}
div#titulo-chamado p{
	padding: 5px;
	font-family: arial;
	margin-top: -20px;
}
div#comentario{
	border: 1px solid #BEBEBE;
	border-radius: 5px;
	margin: 10px;
	padding: 5px;
}
div#titulo-chamado a{
	text-decoration: none;
	background: #EEEE00;
	color:black;
	font-family: arial;
	font-size: 14pt;
	padding: 10px 150px 10px 150px;
	border-radius: 5px;
	border: 2px solid #EEEE00;
	top: 20px;
	position: relative;
}

div#titulo-chamado a:hover{
	background: #CDCD00;
}

div#titulo-chamado fieldset{
	padding-bottom: 40px;
}

button#botao{
	float: right;
	margin-right: 20px;
	margin-top: 15px;
	font-size: 11pt;
	border-radius: 4px;
	width: 80px;
	height: 30px;
	border: 2px solid black;

}

</style>

</head>

<body>
	<div id="interface">

	<div id="cabecalho">

		<img src="imagem/logo.png" width="80">

		<h1>APP Help Desk</h1>

			<a href="logoff.php"><p>Sair</p></a>

	</div>

	</div>

	<div id="titulo-chamado">

		<h2>Consulta de chamados:</h2>

			<fieldset id="formulario-abrir">

			<?php

		foreach ($getConsulta as $consulta) 
			{

			if ($_SESSION['perfil'] == 2) 
			{   

				if($consulta['identificador'] == 2){ ?>


			<div id="comentario">	

					<h2 style="display: inline-block;"><?=$consulta['setor']?></h2>

					<button type="button" id="botao" data-id="<?=$consulta['id']?>">Deletar</button>

					<h3><?=$consulta['categoria']?></h3>
					<h4><?=$consulta['titulo']?></h4>
					<p><?=$consulta['texto_chamado']?></p>

			</div>

			<?php }

			 }else{ ?>


			 	<div id="comentario">	

					<h2 style="display: inline-block;"><?=$consulta['setor']?></h2>

					<button type="button" id="botao" data-id="<?=$consulta['id']?>">Deletar</button>

					<h3><?=$consulta['categoria']?></h3>
					<h4><?=$consulta['titulo']?></h4>
					<p><?=$consulta['texto_chamado']?></p>

			</div>
			 <?php }} ?>
			
			</fieldset>

	</div>				

	<footer id="rodape">

		<p>&copy; Copyright 2019 - By Gabriel Teixeira</p>

	</footer>

	<script>
		
		$(document).ready(function()
		{

		$('#botao').on('click', function()
		{
			var id = $(this).attr("data-id");
			
			$.ajax({

				type:"GET",
				url: "excluirChamado.php",
				dataType: 'json',
				data: "id="+id,
				success: dados =>{

					if (dados.status)
					{
						alert("Deletado com Sucesso.");

						window.location.reload();

						
					}
					
				},
				

			});


		})			







		});


	</script>

</body>
</html>