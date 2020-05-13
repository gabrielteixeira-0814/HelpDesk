<?php

	require "valida_acesso.php";
	require "controle.php";

	
	print_r($getusuario);
    
	

	$usuarios_autenticado = false;
	$usuario_id = null;


	foreach ($getusuario as $user) {


	if ($user['usuario'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {

		$usuarios_autenticado = true;

		$usuario_id = $user['id'];

		$usuario_perfil = $user['status'];
	
	}

	if ($usuarios_autenticado) 
	{
		
		$_SESSION['autenticado'] = 'SIM';

		$_SESSION['id'] = $usuario_id;

		$_SESSION['perfil'] = $usuario_perfil;
		
		header('location:home.php');

	}

	else
	{
		$_SESSION['autenticado'] = 'NAO';
		header('location:index.php?login=erro1');

	}

}



?>				