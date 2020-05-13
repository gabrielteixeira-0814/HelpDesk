<?php

	class Chamado 
	{

		private $conexao;

		function __construct(Conexao $conexao)
		{

			$this->conexao = $conexao->conectar();
		}

		// Recuperar os chamados ----------------------------------------------------

		public function usuario()

		{
			$getUsuario = $this->conexao->prepare("SELECT * FROM tb_usuario");
			$getUsuario->execute();
			

			if ($getUsuario) 
			{
				$usuario = $getUsuario->fetchALL(PDO::FETCH_ASSOC);
				return $usuario;
			}
			return false;




		}

		// Registrar Chamado -----------------------------------------------------------

		public function RegistrarChamado($registrar)

		{

		$getUsuario = $this->conexao->prepare("INSERT INTO tb_chamado(texto_chamado,setor,titulo,categoria) VALUES (?,?,?,?)");

			$getUsuario->execute(
							array(
								$registrar["descricao"],
								$registrar["setor"],
								$registrar["titulo"],
								$registrar["categoria"],
							));

				if ($getUsuario) 
				{
					return $getUsuario;
				}
				else
				{
					return false;
				}
			
		}

		// Para o colaborador que analiza os chamados para melhorias -----------------------------

		public function Consulta()

		{
			$getUsuario = $this->conexao->prepare("SELECT * FROM tb_chamado");
			$getUsuario->execute();
			

			if ($getUsuario) 
			{
				$usuario = $getUsuario->fetchALL(PDO::FETCH_ASSOC);
				return $usuario;
			}
			return false;

		}


		 //Excluir chamados --------------------------------------


		public function excluirChamado($id)

		{
			$getExcluir = $this->conexao->prepare("DELETE FROM tb_chamado WHERE id = ?");
			$getExcluir->execute(array($id));

			return $getExcluir;
			

		}


		 //Excluir chamados --------------------------------------



}

  ?>