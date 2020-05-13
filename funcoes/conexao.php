<?php 
			


class Conexao {

		private $host = 'localhost';
		private $dbname = 'rmc_help_desk';
		private $user = 'root';
		private $pass = '';
		


		public function conectar($type = null){


				if ($type == null ) {
					
					try {

							$this->conexao = new PDO("mysql:host=$this->host;dbname=$this->dbname;","$this->user","$this->pass");

							
							$this->conexao->exec('set charset set utf8');

							$this->_isConnected = true;

							return $this->conexao;

						
						} catch (Exception $e) {

							$this->_isConnected = false;

							echo '<p>'.$e->getMessege().'</p>';
						
					}


				}
			

		}


		public function isConnected()
		{

		return ($this->_isConnected) ? true : false;

		}


	}





?>