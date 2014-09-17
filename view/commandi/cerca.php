<div id="content">
	<h2 class="icon-title" id="h-home">Ricerca semplice per titolo</h2>
    <p>
    	
    </p>
    <p>     
		<form method='POST' action="index.php?page=<?php echo $_SESSION['username'];?>&com=ricercaSemplice&titolo">
  		<p>
   			<label>Cerca per titolo e premere invio</label>
   			<input id="cerca" name="titolo" type="text" required="required" />
			</br>
			
			<a href="index.php?page=<?php echo $_SESSION['username'];?>&com=cercaAvanzata">Ricerca avanzata</a>
			</p>
				<p>
				<label>Consultare prima la lista</label>
  		</p>
	</p>
		
</div>

