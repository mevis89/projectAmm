<?php
	/*
		Controller, qui viene gestito il passaggio fra model e view 
		richiamando le funzioni delle classi utilizzate dall'utente
	*/
	
	include_once("model/Model.php");
	include_once("model/Vision.php");
	class Controller 
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
			//echo ' invoke /';
			switch ($request["page"])
  			{
				
				case 'login':
					if(isset($_SESSION['username']))
						{
							if($_SESSION['username']=='utente')
								header("Location: index.php?page=utente&com=utente");
							else if($_SESSION['username']=='amm')
								header("Location: index.php?page=utente&com=utente");
							else 
							{
							//echo ' secondo login /';
								$vs->setLogin();						
								$mod->getLogin();
								break;
							}
						}
					else
					{
						//echo ' secondo login /';
						$vs->setLogin();						
						$mod->getLogin();
						break;
					}
				
			}
		}
		
	}	

?>