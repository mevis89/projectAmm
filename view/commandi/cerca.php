<div id="content">
	<h2 class="icon-title" id="h-home">Home</h2>
    <p>
    	Ricerca semplice
    </p>
    <p>     
		<form method='POST' action="index.php?page=<?php echo $_SESSION['username'];?>&com=ricercaSemplice&titolo">
  		<p>
   			<label>Cerca per Autore</label>
   			<input id="cerca" name="titolo" type="text" required="required" />
			</br>
			<a href="index.php?page=<?php echo $_SESSION['username'];?>&com=cercaAvanzata">Ricerca avanzata</a>
  		</p>
	</p>
		
</div>

