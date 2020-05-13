<?php
	require "../RMChelpdesk/funcoes/conexao.php";
	require "../RMChelpdesk/funcoes/funcoesHelp.php";
	require_once "valida_acesso.php";

	$id = $_GET["id"];

	$conexao = new Conexao();
	$funcao = new Chamado($conexao);
	

	if($funcao->excluirChamado($id)) 
	{
		exit(json_encode(array('status' => true)));
	}else{
		exit(json_encode(array('status' => false)));
	}

	



 ?>