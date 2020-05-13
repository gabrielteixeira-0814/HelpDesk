<?php 
	require_once "valida_acesso.php";

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Abrir Chamados</title>
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
input#titulo{
	width: 1000px;
	padding: 7px;
	font-size: 12pt;
	font-family: arial;
	border-radius: 5px;
}
input#titulo:hover{
	border: 1px solid #00CED1;
	box-shadow: 1px 1px 1px 1px #00FFFF;
}


textarea#descricao{
	width: 1000px;
	height: 100px;
	padding: 7px;
	font-size: 12pt;
	font-family: arial;
	border-radius: 5px;
	margin-bottom: 50px;
}
textarea#descricao:hover{
	border: 1px solid #00CED1;
	box-shadow: 1px 1px 1px 1px #00FFFF;
}
select#categoria{
	width: 1000px;
	padding: 7px;
	font-size: 12pt;
	font-family: arial;
	border-radius: 5px;
}
select#categoria:hover{
	border: 1px solid #00CED1;
	box-shadow: 1px 1px 1px 1px #00FFFF;
}
select#setor{
	width: 1000px;
	padding: 7px;
	font-size: 12pt;
	font-family: arial;
	border-radius: 5px;
}
select#setor:hover{
	border: 1px solid #00CED1;
	box-shadow: 1px 1px 1px 1px #00FFFF;
}
div#titulo-chamado a{
	text-decoration: none;
	background: #EEEE00;
	color:black;
	font-family: arial;
	font-size: 14pt;
	padding: 10px 150px 10px 150px;
	margin: 0px 180px 0px 100px;
	border-radius: 5px;
	border: 2px solid #EEEE00;
}

div#titulo-chamado a:hover{
	background: #CDCD00;
}

div#titulo-chamado button{
	width: 340px;
	background: #1E90FF;
	color: white;
	font-size: 14pt;
	font-family: arial;
	padding: 10px 0 10px 0;
	border-radius: 5px;
	margin-top:0px;
}
div#titulo-chamado button:hover{
	background: #1874CD;
}



div#titulo-chamado fieldset{
	padding-bottom: 40px;
}

</style>

</head>

<body>

	<div id="interface">

	<div id="cabecalho">

		<img src="imagem/logo.png" width="80">

		<h1>Help Desk RMC</h1>

			<a href="logoff.php"><p>Sair</p></a>

	</div>

	</div>


	<div class="status"></div><!-- status -->


	<div id="titulo-chamado">

				<h2>Abertura de chamado</h2>
			
			

			<fieldset id="formulario-abrir">

			<h3>Setor:<h3>

				
				<select name="setor" id="setor">


					<option value="Administrativo RH">Administrativo RH</option>
					<option value="Recepção">Recepção</option>
					<option value="Cass">Cass</option>
					<option value="Gerência">Gerência</option>

				</select>	
			
			<h3>Título:</h3>	

			<input type="text" name="titulo" id="titulo" placeholder="Título">

			<h3>Categoria:<h3>

				
				<select name="categoria" id="categoria">


					<option value="Impressora">Impressora</option>
					<option value="Hardware">Hardware</option>
					<option value="Software">Software</option>
					<option value="Rede">Rede</option>

				</select>

				<h3>Descrição:</h3>

				<textarea name="descricao" id="descricao">
				</textarea>

				<br/>

				<a href="home.php">Voltar</a>

				<button name="abrir" id="button-enviar">Abrir</button>


			</fieldset>

			

	</div>


	<footer id="rodape">

		<p>&copy; Copyright 2019 - By Gabriel Teixeira</p>

	</footer>







	<script>
		
		$(document).ready(function()
		{

		$('#button-enviar').on('click', function()
		{
			var setor = $('#setor').val();
			var titulo = $('#titulo').val();
			var categoria = $('#categoria').val();
			var descricao = $('#descricao').val();

			$.ajax({

				type:"GET",
				url: "inserirChamado.php",
				dataType: 'json',
				data: "setor="+setor+"&titulo="+titulo+"&categoria="+categoria+"&descricao="+descricao,
				success: dados =>{

					if (dados.status)
					{
						alert("Chamado inserido com Sucesso.");

						window.location.reload();

						$('.status').html('Chamado inserido com Sucesso.');
						

						$(".status").css({"background-color": "#7FFF00", "color": "white", "font-size": "25px;", "text-align": "center"});

						
					}
					else{

						$('.status').html('Chamado não inserido. Tente novamente!');

						$(".status").css({"background-color": "red", "color": "white", "font-size": "25px;", "text-align": "center"});
					}


				},
				

			});


		})			







		});


	</script>

</body>
</html>
