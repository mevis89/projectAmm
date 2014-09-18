<div id="content">
	<h2 class="icon-title" id="h-home">Ricerca Avanzata</h2>
    <p>
    	Ricerca Avanzata
    </p>
    <p>     
		
		<form method="POST" action="index.php?page=<?php echo $_SESSION['username'];?>&com=ricercaAvanzata&titolo&autore&genere" >
  		<p>
   			<li><label>Inserisci Titolo</label>
   			<input id="cerca" name="titolo" type="text" required="required" /></li>
			</br>
			<li><label>Inserisci Autore</label>
   			<input id="cerca" name="autore" type="text" required="required" /></li>
			</br>
			<li><label>Inserisci Genere</label>
   			<input id="cerca" name="genere" type="text" required="required" /></li>
			</br>
			
			<input type="Submit" action="">

  		</p>
	</p>
		
</div>

