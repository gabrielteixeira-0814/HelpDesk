<?php
	session_start();

  ?>



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
	border: 1px solid #4682B4;
	color: white;
	font-size: 26pt;
}

/* Contato */

div#contato {
	float: right;
	margin-right: 60px;
}
div#contato h7{
	font-family: arial;
	font-size: 11pt;
	
}
div#cont{
	font-family: arial;
	font-size: 11pt;
	margin-top: -10px;
	
}
/* cabeçalho*/

 	/*formulário*/

div#interface1{
	margin-top: -48px;
	background: #4682B4;
	height: 520px;
	border: 1px solid #4682B4;
}

div#formulario{
	display: block;
	width: 300px;
	height: 400px;
	margin:  60px 500px;
	background: white;
	border: 2px solid  #4682B4;
	border-radius: 10px;
	
}
div#formulario img{
	margin-left: 100px;
	margin-top: 20px;
	margin-bottom: -20px;
}

div#interface1 h1{
	font-family: arial;
	text-align: center;
	font-size: 28pt;
	color:  #4682B4;
	border: 1px solid white;
	background: white;
	margin-bottom: 7px;
	
}
 input#email{
 	font-size: 11pt;
 	font-weight: bold;
 	padding-left: 10px;
 	margin-left: 50px;
 	width: 200px;
 	height: 22px;
 	border-radius: 7px;
 	margin-bottom: 10px;
 	border: 2px solid  #4682B4;
 }
 input#senha{
 	font-size: 11pt;
 	font-weight: bold;
 	padding-left: 10px;
 	margin-left: 50px;
 	width: 200px;
 	height: 22px;
 	border-radius: 7px;
 	margin-bottom: 10px;
 	border: 2px solid  #4682B4;
 }
 button#entrar{
 	font-weight: bold;
 	width: 80px;
 	position: relative;
 	margin-left: 110px;
 	border-radius: 5px;
 	border: 2px solid  #4682B4;

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

		<div id="contato">

		<p id="cont"><b><font size="4">E-mail: </font></b><font size="3.5">gabrielteixeira0814@gmail.com</font></p>

		<p><b><font size="4">Tel:</font></b> <font size="3.5">(24) 9 9939-5116 / (24) 9 9939-5116</p></font>

		
		</div>

	</div>

	<div id="interface1">

	<div id="formulario">
		
		<img src="imagem/icone-contato.png" width="100">

		<h1>Login</h1>

		<form method="post" action="valida_login.php">

			<input type="email" name="email" id="email" placeholder="E-mail">
			<br/>
			<input type="password" name="senha" id="senha" placeholder="Senha">
			<br/>
			<button id="entrar">Entrar</button>
		</form>
	</div>
</div>

	<footer id="rodape">

		<p>&copy; Copyright 2019 - By Gabriel Teixeira</p>

	</footer>

</body>
</html>