<?php
      
     set_time_limit(0);
 
		include_once 'vendor/class.verifyEmail.php';

		$email = $_GET['email'];

		 $vmail = new verifyEmail();
		 $vmail->setStreamTimeoutWait(20);
		 $vmail->Debug= False;
		 $vmail->Debugoutput= 'html';

		$vmail->setEmailFrom('noreply@google.com');

		if($vmail->check($email)) {
			echo '<h1><b style="color:#05ca05;">Email Valid :</b>'.$email;
		}

		 elseif(verifyEmail::validate($email)){
			echo '<h1><b style="color:#05ca05;">Email Format Valid :</b>' . $email . ',<p style="color:#e21111;;">But email not exist!';
		} 

		else {
			echo '<h1><b style="color:#e21111;;">Email not valid and not exist! :</b>'.$email;
		}


?>

