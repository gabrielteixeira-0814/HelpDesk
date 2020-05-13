<?php
	require "../RMChelpdesk/funcoes/conexao.php";
	require "../RMChelpdesk/funcoes/funcoesHelp.php";
	require_once "valida_acesso.php";

	$setor = $_GET["setor"];
	$titulo = $_GET["titulo"];
	$categoria = $_GET["categoria"];
	$descricao = $_GET["descricao"];


	$conexao = new Conexao();
	$funcao = new Chamado($conexao);
	
	
	$registrar = array("descricao" => $descricao,"setor" => $setor, "titulo" => $titulo, "categoria" => $categoria);

	if($funcao->RegistrarChamado($registrar)) 
	{
		exit(json_encode(array('status' => true)));
	}else{
		exit(json_encode(array('status' => false)));
	}

	



 ?>