<?php
	/*
		Controller, qui viene gestito il passaggio fra model e view 
		richiamando le funzioni delle classi utilizzate dall'utente
	*/
	
	include_once("model/Model.php");
	include_once("model/Vision.php");
	
	class ControllerUtente 
	{
 		public $model;	
		public $vision;
 		public function __construct()  
    	{  
 
    	} 
 
 		public function invoke($request)
 		{	
			$mod = new Model();
			$vs = new Vision();
			//qui avviene il controllo su le ricchieste dell'utente/amm
			//vien caricato il contenuto della parte richiesta dell'utente/amm tramite il file vision nel modulo
			if(isset($request['com']))
			switch ($request['com'])
			{			
				case 'utente':
					$vs->setUtente();
					break;
				case 'logout': 
					$mod->getlogout();
					break;

				// Set Ricerche
				case 'cerca':
					$vs->setCerca();
					break;
				case 'ricercaSemplice':
					$vs->setRicercaSemplice();
					break;
				case 'ricercaAvanzata':
					$vs->setRicercaAvanzata();
					break;
				case 'cercaAvanzata':
					$vs->setCercaAvanzata();

				// Set Carrello
				case 'carrello':
					$vs->setCarrello();
					break;
				
				case 'insertCarrello':
					$vs->setInsertCarrello();
					break;
		
				case 'acquisto':
					$vs->setAcquisto();
					break;
				
				
			}
				
			
		}			
	}	

?>
