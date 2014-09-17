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
				
					<div id="intestazione">                   
                    	<h1>Portale Del Libro</h1>
						
					</div>
                   <div id="menu">
                        <ul>
                            <li><a href="index.php?page=login">Home</a></li>
                            <li><?php require($logout); ?></li>
                        </ul>
                    </div> 
                </div>
            </header> 
            <!-- Inizio Pagina -->
			<!--  barra Destra -->
            <?php
				require($barraDestra);
			?>
            <!-- Content -->
			<content>
			<?php
				require($content);
			?>
			</content>

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
