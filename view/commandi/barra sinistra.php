<div id="sidebar1">
	<ul>
	<li id="categories">
    	<h2 class="icon-title">Navigazione</h2>
			<ul>
				<?php 
					if((isset($_SESSION['stato'])&&($_SESSION['stato']=='utente')))
					{
					?>
		            	<form name=”utente” action=”” method=”POST”>
							<a href='index.php?page=utente&com=utente'>Home</a>
						</form>
					<?}?>
            <li>
			</li>
                        </ul>
                    </li>
                    <li id="external">
                        <h2 class="icon-title">Link esterni</h2>
                        <ul>
                            <li><a href="http://www.google.it/">google</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
