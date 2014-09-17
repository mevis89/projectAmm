<?php
	//controllo libri
	include('model/controlloLibri.php');
	// richiamo il file di configurazione
	require ('model/config.php');

	// richiamo lo script responsabile della connessione a MySQL
	require ('model/connect.php');	

	$autore=$_REQUEST['titolo'];
	
	// preparo la query
	$query = "select * from libri where titolo='$autore' ;";

	// lancio la query
	$result = mysql_query($query);

	// controllo l'esito
	if (!$result) {
		die("Errore nella query $query: " . mysql_error());
		mysql_close();
		header("Location: index.php?page=amm&com=amm");
	}
	
	$num=mysql_numrows($result);
	
	// chiudo la connessione a MySQL
	mysql_close();
?>

