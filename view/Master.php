<!DOCTYPE html >
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Portale del Libro</title>
        <meta name="keywords" content="AMM esami studente" />
        <meta name="description" content="Una pagina per gestire le funzioni degli studenti" />
        <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />
        <link href="css/responsive.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>
        <div id="pagina">
            <header>				
                <!--  header -->
                <div id="header">
				<!--- social --->
				<div class="social">
                    <ul>
                        <li id="facebook"><a href="https://facebook.com/">facebook</a></li>
                        <li id="twitter"><a href="https://twitter.com/">twitter</a></li>
                    </ul>
                </div>
					<div id="intestazione">                   
                    	<h1>Portale Del Libro</h1>
						
					</div>
                    <select class="menu">
                        <option></option>
                    </select>
                   <div id="menu">
                        <ul>
                            <li class="current_pagina_item"><a href="#">Home</a></li>
                            <li><?php require($logout); ?></li>
                        </ul>
                    </div> 
                </div>
            </header> 
            <!-- Inizio Pagina -->
            <!--  barra Sinistra -->
            <?php
				require($barraSinistra);
			?>
			<!--  barra Destra -->
            <?php
				require($barraDestra);
			?>
            <!-- Content -->
			<?php
				require($content);
			?>

            <!--  footer -->
            <footer>
                <div id="footer">
                </div>
                <div class="validator">
                    <p>
                        <a href="http://validator.w3.org/check/referer" class="xhtml" title="Questa pagina contiene HTML valido">
                            <abbr title="eXtensible HyperText Markup Language">HTML</abbr> Valido</a>
                        <a href="http://jigsaw.w3.org/css-validator/check/referer" class="css" title="Questa pagina ha CSS validi">
                            <abbr title="Cascading Style Sheets">CSS</abbr> Valido</a>
                    </p>
                </div>
            </footer>
        </div>
    </body>
</html>
