
<div id="content">
	<h2 class="icon-title" id="h-home">Home</h2>
    <p>
    	Libro
    </p>
    <p>     
		
  		<p>
   			<?php
				//visualizzazione della ricerca semplice
				echo 'Ricerca semplice</br>';
	
				include('model/ricercaSemplice.php');
	
				$nome=mysql_result($result,0,"titolo");
				$cognome=mysql_result($result,0,"autore");
				$genere=mysql_result($result,0,"genere");
			 	$editore=mysql_result($result,0,"editore");
	
				//visualizazione tabella    
				echo "<b>Titolo</b>:$nome</br><b>Autore</b>:$cognome</br><b>Genere</b>:$genere</br><b>Editore</b>:$editore</br>";
				//richiesta di comprare questo elemento
	
				if ($_SESSION['username']=='utente')
					{
						echo "Comprare?";?>
						<form method="POST" action="index.php?page=utente&com=insertCarrello&titolo=<?echo $nome?>">
						<input type="Submit" action="">
						</form>
					<?}
			?>
  		</p>
	</p>
		
</div>
