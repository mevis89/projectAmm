<?php
	//ricerca avanzata
	echo 'Ricerca semplice</br>';
	
	include('model/ricercaAvanzata.php');
	
    $nome=mysql_result($result,0,"titolo");
    $cognome=mysql_result($result,0,"autore");
    $genere=mysql_result($result,0,"genere");
 	$editore=mysql_result($result,0,"editore");
	
	//visualizazione tabella    
	echo "<b>Titolo</b>:$nome</br><b>Autore</b>:$cognome</br><b>Genere</b>:$genere</br>";
	
	
	if ($_SESSION['username']=='utente')
		{echo "Comprare?";?>
			<form method="POST" action="index.php?page=utente&com=insertCarrello&titolo=<?echo $nome?>">
			<input type="Submit" action="">
			</form>
		<?}
	?>	
	
?>