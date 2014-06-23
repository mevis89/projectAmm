<?php 
	session_start();	
	if (isset($_REQUEST["login"]) && isset($_REQUEST["user"]) && isset($_REQUEST["password"]))
	{	
	  	if(login($_REQUEST["user"], $_REQUEST["password"]))
		{	
			$_SESSION["loggedIn"] = true;	
		}	
  	}
	else if(isset($_REQUEST["logout"]))
	{ 	
	 logout();
	}
	function login($user,$password)	
  	{ 	
		if ($user == "davide" && $password == "spano")	
  		{	
  			return true;	
 		}	
		return false;	
  	}	
  	function logout()
	{	
   		$_SESSION =	array();	 	
  		if(session_id() != "" || isset($_COOKIE[session_name()]))
		{
			setcookie(session_name(),'',time()-­2592000,'/');	
 		}	
	session_destroy();	  
	}	
?>	

