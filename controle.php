<?php

	require "../RMChelpdesk/funcoes/conexao.php";
	require "../RMChelpdesk/funcoes/funcoesHelp.php";
	require"valida_acesso.php";


	$conexao = new Conexao();

	$loginUsuario = new Chamado($conexao);

	$getusuario = $loginUsuario->usuario();

	$getConsulta = $loginUsuario->Consulta();
	

	



 ?>