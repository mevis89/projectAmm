<div id="content">
	<h2 class="icon-title" id="h-home">Home</h2>
    <p>
    	Inserimento
    </p>
    <p>     
		<!--- qua carico i dati per inserire nuovi libri all'interno del database --->
		<form method="POST" action='index.php?page=amm&com=inserisciDati&titolo&autore&genere&editore&copie' >
  		<p>
   			<li><label>Inserisci Titolo</label>
   			<input id="cerca" name="titolo" type="text" required="required"/></li>
			</br>
			<li><label>Inserisci Autore</label>
   			<input id="cerca" name="autore" type="text" required="required"/></li>
			</br>
			<li><label>Inserisci Genere</label>
   			<input id="cerca" name="genere" type="text" required="required"/></li>
			</br>
			<li><label>Inserisci editore</label>
   			<input id="cerca" name="copie" type="text" required="required"/></li>
			</br>
			<li><label>Inserisci copie</label>
   			<input id="cerca" name="copie" type="text" required="required"/></li>
			</br>
			
			<input type="Submit" action='index.php?page=amm&com=inserisciDati&titolo&autore&genere&editore&copie'>

  		</p>
	</p>
		
</div>

