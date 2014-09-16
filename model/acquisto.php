<?php
	// richiamo il file di configurazione
	require ('model/config.php');

	// richiamo lo script responsabile della connessione a MySQL
	require ('model/connect.php');	
	
	// preparo la query
	$query = " delete from carrello where id='0';";

	// lancio la query
	$result = mysql_query($query);

	// controllo l'esito
	if (!$result) {
		die("Errore nella query $query: " . mysql_error());
		mysql_close();
		header("Location: index.php?page=amm&com=amm");
	}
	
	// chiudo la connessione a MySQL
	mysql_close();

	$_SESSION['carrello']='vuoto';	
	
	header("Location: index.php?page=utente&com=carrello");

?>
