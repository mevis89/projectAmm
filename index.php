<?php 

	include_once ("controller/Controller.php");
	include_once ("controller/ControllerUtente.php");
	include_once ("controller/ControllerAmm.php");

	/*
		Pagina index
	*/
	prova::richiesta($_REQUEST);
 	
	class prova
	{
		public static function richiesta($request)
		{
			session_start();
			switch ($request['page'])
			{
				case 'login':
					//echo 'primo login /';
					$controller = new Controller();
					$controller->invoke($request);
					break;
				case 'utente':
					$controller = new ControllerUtente();
					$controller->invoke($request);
					break;
				case 'amm':
					$controller = new ControllerAmm();
					$controller->invoke($request);
					break;
				default:
					break;
				
			}
		}
	}
 	
	

?>
