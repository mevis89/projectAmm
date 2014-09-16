<?php
	
	/*
		Model, qua ci sono le principali richieste effettuate
	*/

	include_once("model/Model.php");
	
	class Model 
	{
		public function getlogin()
 		{
			//echo ' getLogin /';
  			if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) //se esistono
			{
  				if($_REQUEST['username']=='utente' && $_REQUEST['password']=='psw') //controllo utente
				{
					//echo " entra come utente /";
    				$_SESSION['stato']="utente";
					$_SESSION['username']=$_REQUEST['username'];
					$_SESSION['password']=$_REQUEST['password'];
					header("Location: index.php?page=utente&com=utente");
   				}
				else
				if($_REQUEST['username']=='amm' && $_REQUEST['password']=='psw') //controllo utente
				{
					//echo " entra come amm ";
					$_SESSION['stato']="amm";
					$_SESSION['username']=$_REQUEST['username'];
					$_SESSION['password']=$_REQUEST['password'];
					header("Location: index.php?page=amm&com=amm");
   				}
  			}
		}
		
		public function getlogout()
		{
			$_SESSION = array();
        	session_destroy();
			header("Location: index.php?page=login");
		}	

		
		
	}
?>
