<?php 

	require_once "valida_acesso.php";

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilo.css">

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


div#abrir{
	display: inline-block;
	margin-top: 150px;
	margin-left: 300px;
}
div#consulta{
	display: inline-block;
	float: right;
	margin-top: 150px;
	margin-right: 300px;
	margin-bottom: 200px;
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

</style>

</head>

<body>

	<div id="interface">

	<div id="cabecalho">

		<img src="imagem/logo.png" width="80">

		<h1>Help Desk RMC</h1>

		<a href="logoff.php"><p>Sair</p></a>

	</div>

	<div id="abrir">
		<a href="abrir-chamados.php"><img src="imagem/formulario_abrir_chamado.png" width="100"></a>
	</div>

	<div id="consulta">
		<a href="consulta-chamados.php"><img src="imagem/formulario_consultar_chamado.png" width="100"></a>
	</div>


	<footer id="rodape">

		<p>&copy; Copyright 2019 - By Gabriel Teixeira</p>

	</footer>

</body>
</html>

