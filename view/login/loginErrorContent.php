<div id="content">
	<h2 class="icon-title" id="h-home"><?php echo $_SESSION['page']; ?></h2>
	<p>
    	username e password errati
    </p>	    
	<p>
    	Prego inserire username e password
    </p>
    <p>     
		<form action="" method="POST">
  		<p>
   			<label>Username</label>
   			<input id="username" value="" name="username" type="text" required="required" /><br>
  		</p>

  		<p>
   			<label>Password</label>
   			<input id="password" name="password" type="password" required="required" />
  		</p>
   		<br/>
  		<p>
			<button type="submit" class="green big" name="submit">
				<span>Login</span>
			</button> 

			<button type="reset" class="grey big">
				<span>Cancel</span>
			</button>
  		</p>
 		</form>  
	</p>
</div>

