<html>
<?php
	//controllo libri
	include('model/controlloLibri.php');
	echo 'Lista dei libri</br>';
	// richiamo il file di configurazione
	require ('model/config.php');

	// richiamo lo script responsabile della connessione a MySQL
	require ('model/connect.php');	
	
	// preparo la query
	$queryNrighe = "select count(0) from libri;";

	// lancio la query
	$resultRighe = mysql_query($queryNrighe);
	$cont=mysql_result($resultRighe,0);
	$rows=$cont*4;

	//visualizzazione
	for ($mul = 0; $mul < $cont ; ++$mul) {
	
		$query = "select * from libri limit $mul,1;";
		
		$result = mysql_query($query);
		
		$nome=mysql_result($result,0,"titolo");
    	$cognome=mysql_result($result,0,"autore");
    	$genere=mysql_result($result,0,"genere");
 		$editore=mysql_result($result,0,"editore");
		
		//visualizazione tabella    
		echo "<b>Titolo</b>:$nome</br><b>Autore</b>:$cognome</br><b>Genere</b>:$genere</br><b>Editore</b>:$editore</br>";
		echo "</br>";
	}

	// controllo l'esito
	if (!$result) {
		die("Errore nella query $query: " . mysql_error());
		mysql_close();
		header("Location: index.php?page=amm&com=amm");
	}
	
	// chiudo la connessione a MySQL
	mysql_close();
?>
</html>
