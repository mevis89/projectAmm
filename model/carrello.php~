<?php
	// richiamo 
	include('model/ricercaSemplice.php');		

	// richiamo il file di configurazione
	require ('model/config.php');

	// richiamo lo script responsabile della connessione a MySQL
	require ('model/connect.php');
	
	$nome=mysql_result($result,0,"titolo");
    $cognome=mysql_result($result,0,"autore");
    $genere=mysql_result($result,0,"genere");
 	$editore=mysql_result($result,0,"editore");

	// preparo la query di inserimento nel carrello
	
	$query = "insert into carrello values('default','$nome','$cognome','$genere','$editore','');";

	
	// lancio la query
	$result = mysql_query($query);

	// controllo l'esito
	if (!$result) {
		die("Errore nella query $query: " . mysql_error());
		mysql_close();
		header("Location: index.php?page=amm&com=amm");
	}
		

	//elimino una copia del libro
	$query = "select copie from libri where titolo='$nome';";

	// controllo l'esito
	if (!$result) {
		die("Errore nella query $query: " . mysql_error());
		mysql_close();
		header("Location: index.php?page=amm&com=amm");
	}
	
	$result= mysql_query($query);

	$copie=mysql_result($result,0,"copie");

	$copie=$copie -1;	

	$query = "update libri SET copie=$copie where titolo='$nome';";

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

	header("Location: index.php?page=utente&com=carrello");

?>

