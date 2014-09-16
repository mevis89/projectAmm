<?php
	//controllo libri
	include('model/controlloLibri.php');
	// richiamo il file di configurazione
	require ('model/config.php');

	// richiamo lo script responsabile della connessione a MySQL
	require ('model/connect.php');	

	$titolo=$_REQUEST['titolo'];
	
	$autore=$_REQUEST['autore'];

	$genere=$_REQUEST['genere'];

	// controllo l'esito

	$query = "select * from libri where titolo='$titolo' and autore='$autore' and genere='$genere' ;";

	// preparo la query
	

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

