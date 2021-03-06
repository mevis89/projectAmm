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
			$barraDestra ="view/utente/barra destra.php";
			$_SESSION['pagina']='utente';
			include ("view/Master.php");
		}

		public function setAmm()
		{
			$logout = "view/login/logoutContent.php";
			$content = "view/amm/amm.php";
			$barraDestra ="view/amm/barra destra.php";
			$_SESSION['pagina']='Home';
			include ("view/Master.php");
		}
		
		//carrello ed insert carrello
		public function setCarrello()
		{
			$logout = "view/login/logoutContent.php";
			$content = "view/commandi/carrello.php";
			$barraDestra ="view/utente/barra destra.php";	
			$_SESSION['pagina']='carrello';			
   			include ("view/Master.php");
		}	
		
		public function setInsertCarrello()
		{
			$logout = "view/login/logoutContent.php";
			$content = "view/insertCarrello.php";
			$barraDestra ="view/utente/barra destra.php";	
			$_SESSION['pagina']='carrello';			
   			include ("view/Master.php");
		}	

		public function setLoginError()
		{
			$logout = "view/login/logoutContent.php";
			$content = "view/login/loginErrorContent.php";
			$barraDestra ="view/altri/barra destra.php";
			$_SESSION['pagina']='Login';
   			include ("view/Master.php");
		}

		public function setLogout()
		{
			$content = "view/login/logoutContent.php";
			$barraDestra ="view/altri/noBarra.php";
			$carrello ="view/altri/carrello.php";
			$_Session['pagina']="logout";
			include ("view/Master.php");
		}
		
		public function setLogin()
		{
			$logout = "view/altri/noContent.php";
			$content = "view/login/loginContent.php";
			$barraDestra ="view/altri/barra destra.php";
			$_SESSION['pagina']='login';
			include ("view/Master.php");
		}
		
		// Ricerca Semplice
		public function setCerca()
		{
			$logout = "view/login/logoutContent.php";
			$content = "view/commandi/cerca.php";
			if ($_SESSION['username']=='utente')
				{				
					$barraDestra ="view/utente/barra destra.php";	
				}
			else if ($_SESSION['username']=='amm')
				{				
					$barraDestra ="view/amm/barra destra.php";	
				}	
			$_SESSION['pagina']='cerca';			
   			include ("view/Master.php");
		}
		public function setRicercaSemplice()
		{
			$logout = "view/login/logoutContent.php";
			$content = "view/risultato.php";
			if ($_SESSION['username']=='utente')
				{				
					$barraDestra ="view/utente/barra destra.php";	
				}
			else if ($_SESSION['username']=='amm')
				{				
					$barraDestra ="view/amm/barra destra.php";	
				}	
			$_SESSION['pagina']='ricercaSemplice';
			include ("view/Master.php");
		}

		// Ricerca Avanzata
		public function setRicercaAvanzata()
		{
			$logout = "view/login/logoutContent.php";
			$content = "view/risultatoAvanzata.php";
			if ($_SESSION['username']=='utente')
				{				
					$barraDestra ="view/utente/barra destra.php";	
				}
			else if ($_SESSION['username']=='amm')
				{				
					$barraDestra ="view/amm/barra destra.php";	
				}
			$_SESSION['pagina']='cerca avanzata';			
   			include ("view/Master.php");
		}
		public function setCercaAvanzata()
		{
			$logout = "view/login/logoutContent.php";
			$content = "view/commandi/cercaAvanzata.php";
			if ($_SESSION['username']=='utente')
				{				
					$barraDestra ="view/utente/barra destra.php";	
				}
			else if ($_SESSION['username']=='amm')
				{				
					$barraDestra ="view/amm/barra destra.php";	
				}	
			$_SESSION['pagina']='ricercaAvanzata';
			include ("view/Master.php");
		}		
		
		// Set per inserire libri nel database
		public function setInserisci()
		{
			// prova database;
			$logout = "view/login/logoutContent.php";
			$content = "view/commandi/inserisci.php";
			$barraDestra ="view/amm/barra destra.php";	
			$_SESSION['pagina']='inserisci';
			include ("view/Master.php");
		}
		
		public function setInserisciDati()
		{
			// prova database;
			$logout = "view/altri/noContent.php";
			$content = "view/risultatoDataBase.php";
			$barraDestra ="view/amm/barra destra.php";	
			$_SESSION['pagina']='inserisci';
			include ("view/Master.php");
		}
		
		//prova
		public function setLista()
		{
			$logout = "view/login/logoutContent.php";
			$content = "view/lista.php";
			if ($_SESSION['username']=='utente')
				{				
					$barraDestra ="view/utente/barra destra.php";	
				}
			else if ($_SESSION['username']=='amm')
				{				
					$barraDestra ="view/amm/barra destra.php";	
				}
			$_SESSION['pagina']='ricercaSemplice';
			include ("view/Master.php");
		}

		public function setAcquisto()
		{
			$logout = "view/login/logoutContent.php";
			$content = "model/acquisto.php";
			if ($_SESSION['username']=='utente')
				{				
					$barraDestra ="view/utente/barra destra.php";	
				}
			else if ($_SESSION['username']=='amm')
				{				
					$barraDestra ="view/amm/barra destra.php";	
				}
			$_SESSION['pagina']='ricercaSemplice';
			include ("view/Master.php");
		}
		
		
	}

?>
