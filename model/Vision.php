<?php

	/*
		Vision,qua gestisco le view da parte del'utente/amm' così da facilitarmi
		la gestione delle pagine diverse per utente
	*/
	
	include_once("model/Vision.php");

	class Vision 
	{

		public function setUtente()
		{
			$logout = "view/login/logoutContent.php";
			$content = "view/utente/utente.php";
			$barraSinistra ="view/utente/barra sinistra.php";
			$barraDestra ="view/utente/barra destra.php";
			$_SESSION['pagina']='utente';
			include ("view/Master.php");
		}

		public function setAmm()
		{
			$logout = "view/login/logoutContent.php";
			$content = "view/amm/amm.php";
			$barraSinistra ="view/amm/barra sinistra.php";
			$barraDestra ="view/amm/barra destra.php";
			$_SESSION['pagina']='Home';
			include ("view/Master.php");
		}
		
		public function setCarrello()
		{
			$logout = "view/login/logoutContent.php";
			$content = "view/commandi/carrello.php";
			$barraSinistra ="view/commandi/barra sinistra.php";
			$barraDestra ="view/commandi/barra destra.php";	
			$_SESSION['pagina']='carrello';			
   			include ("view/Master.php");
		}

		public function setCerca()
		{
			$logout = "view/login/logoutContent.php";
			$content = "view/commandi/cerca.php";
			$barraSinistra ="view/commandi/barra sinistra.php";
			$barraDestra ="view/commandi/barra destra.php";	
			$_SESSION['pagina']='cerca';			
   			include ("view/Master.php");
		}

		public function setCercaAvanzata()
		{
			$logout = "view/login/logoutContent.php";
			$content = "view/commandi/cercaAvanzata.php";
			$barraSinistra ="view/commandi/barra sinistra.php";
			$barraDestra ="view/commandi/barra destra.php";	
			$_SESSION['pagina']='cerca avanzata';			
   			include ("view/Master.php");
		}

		public function setLoginError()
		{
			$logout = "view/login/logoutContent.php";
			$content = "view/login/loginErrorContent.php";
			$barraSinistra ="view/altri/barra sinistra.php";
			$barraDestra ="view/altri/barra destra.php";
			$_SESSION['pagina']='Login';
   			include ("view/Master.php");
		}

		public function setLogout()
		{
			$content = "view/login/logoutContent.php";
			$barraSinistra ="view/altri/noBarra.php";
			$barraDestra ="view/altri/noBarra.php";
			$_Session['pagina']="logout";
			include ("view/Master.php");
		}
		
		public function setLogin()
		{
			//echo ' setLogin /';
			$logout = "view/altri/noContent.php";
			$content = "view/login/loginContent.php";
			$barraSinistra ="view/altri/barra sinistra.php";
			$barraDestra ="view/altri/barra destra.php";	
			$_SESSION['pagina']='login';
			include ("view/Master.php");
		}
		
		
	}

?>
