<?php
	echo 'Ricerca semplice</br>';
	
	include('model/lista.php');
	
    $nome=mysql_result($result,0,"titolo");
    $cognome=mysql_result($result,0,"autore");
    $genere=mysql_result($result,0,"genere");
 	$editore=mysql_result($result,0,"editore");
	
	//visualizazione tabella    
	echo "<b>Titolo</b>:$nome</br><b>Autore</b>:$cognome</br><b>Genere</b>:$genere</br><b>Editore</b>:$editore</br>";
?>
