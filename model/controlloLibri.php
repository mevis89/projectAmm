<?php
	// richiamo il file di configurazione
	require ('model/config.php');

	// richiamo lo script responsabile della connessione a MySQL
	require ('model/connect.php');	
	
	// preparo la query
	$queryNrighe = "select count(0) from libri;";

	// lancio la query
	$resultRighe = mysql_query($queryNrighe);
	$cont=mysql_result($resultRighe,0);

	//visualizzazione
	for ($mul = 0; $mul < $cont ; ++$mul) {
	
		$query = "select copie from libri limit $mul,1;";

		$result= mysql_query($query);	

		$copie=mysql_result($result,0,"copie");
	
		if ($copie == 0)	
			{	
				$query = "select titolo from libri limit $mul,1;";

				$result= mysql_query($query);	

				$copie=mysql_result($result,0,"titolo");
	
				//elimino una copia del libro
				$query = "delete from libri where titolo='$copie';";
	
				// lancio la query
				$result = mysql_query($query);

				
				// controllo l'esito
				if (!$result) {
					die("Errore nella query $query: " . mysql_error());
					mysql_close();
					header("Location: index.php?page=amm&com=amm");
				}
			}
	}

	// chiudo la connessione a MySQL
	mysql_close();

?>
