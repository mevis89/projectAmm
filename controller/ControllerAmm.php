<?php
	/*
		Controller, qui viene gestito il passaggio fra model e view 
		richiamando le funzioni delle classi utilizzate dall'utente
	*/
	
	include_once("model/Model.php");
	include_once("model/Vision.php");
	class ControllerAmm
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

			switch ($request["page"])
  			{
				case 'login':
						$vs->setLogin();						
						$mod->getLogin();				
						break;
			}
			
			include ("view/Master.php");
			}
	}	

?>
