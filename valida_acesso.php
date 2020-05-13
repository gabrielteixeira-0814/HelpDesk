<?php
	
	error_reporting(0);

	session_start();

	if (!isset ($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
		header('location:index.php?login=erro2');
	}

  ?>