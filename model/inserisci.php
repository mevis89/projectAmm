<?php
	// richiamo il file di configurazione
	require ('model/config.php');

	// richiamo lo script responsabile della connessione a MySQL
	require ('model/connect.php');	

	$titolo=$_REQUEST['titolo'];

	$autore=$_REQUEST['autore'];

	$genere=$_REQUEST['genere'];

	$editore=$_REQUEST['editore'];

	$copie=$_REQUEST['copie'];
	
	// preparo la query
	$query = " insert into libri values('default','$titolo','$autore','$genere','$editore','',$copie);";

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

	header('Location: index.php?page=amm&com=lista');

?>
