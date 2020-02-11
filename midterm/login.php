<?php // login.php

define('TITLE', 'Login');
include('templates/Header.html');

print '<h2> Login Form </h2>
<p> User info here.</p>';
	
	if ( (!empty($_POST['email'])) &&
	(!empty($_POST['password'])) ) {
		
		if ( (strtolower($_POST['email']) == 'me@example.com') && 
		($_POST['password'] =='testpass') ) { // Correct!
		
			print '<p class="text--sucess"> You are logged in. <br> Now go! </p>';
		} else { // incorrect			
			print '<p class="text--error">The email address and password do not match those on file.<br>Go back and try again.</p>';	
		}
		
	} else { // display
			
			print '<form action="login.php" method="post" class="form--inline">
		<p><label for="email">Email Address: </label>
		<input type="email" name="email" type="20">
		</p>
		<p>
			<label for="password">Password:</label>
			<input type="password" name="password" size="20">
			</p>
			<p>
				<input type="submit" name="submit" value="Login" class="button--pill">
				</p>
			</form>';
			
		}
		
include('templates/footer.html');
		?>
	