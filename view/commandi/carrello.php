<HTML>
	<head>
	
	</head>
<div id="content">
	<h2 class="icon-title" id="h-home">Home</h2>
    <p>

		<!---- Piccolo Script in javascript per confermare l'acquisto ---->
    	Il Tuo carrello

		<?php
			//controllo libri
			include('model/controlloLibri.php');
			//Richiamo la pagina in cui verrà mostrato il contenuto del carrello
			include('model/listaCarrello.php');
			
		
		// Controllo sul carrello
		if(isset($_SESSION['carrello']))
		{
			if ($_SESSION['carrello']=='pieno')
				{?>
					Acquistare?
					<form method="POST" action="index.php?page=utente&com=acquisto"> 
						<input type="Submit" onClick="window.alert('Acquisto effettuato')">
					</form>

					
				<?}
		}?>
	
    <p>     

	</p>
		
</div>
</HTML>
