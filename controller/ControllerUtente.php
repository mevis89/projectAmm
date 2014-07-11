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
			
			
			
			if(isset($request['com']))
			switch ($request['com'])
			{			
				case 'utente':
					$vs->setUtente();
					break;
				case 'logout': 
					$mod->getlogout();
					break;
				case 'cerca':
					$vs->setCerca();
					break;
				case 'cercaAvanzata':
					$vs->setCercaAvanzata();
					break;
				case 'carrello':
					$vs->setCarrello();
					break;
			}
				
			
		}			
	}	

?>