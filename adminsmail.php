<?php

if(isset($_POST['email'])) {
	
	$email_to="constructiveoutlets@gmail.com";
	$email_subject="HGL Admin Application";

	function died($error){
		echo "error";
		echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		die();
	}
	//data validation

	if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['skype']) || !isset($_POST['location']) || !isset($_POST['largebox'])) {
		died('error');
	}

	$name=$_POST['name'];
	$email_from=$_POST['email'];
	$skype=$_POST['skype'];
	$location=$_POST['location'];
	$largebox=$_POST['largebox'];

	$error_message="";

	$email_exp='/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	if (!preg_match($email_exp,$email_from)){
		$error_message .='Email address error.<br />';
	}

	$string_exp = "/^[A-Za-z .'-]+$/";

	if(!preg_match($string_exp,$name)){
		$error_message .='Name error.<br />';
	}

	if (!preg_match($string_exp,$location)){
		$error_message .='Location error.<br />';
	}

	if (strlen($error_message)>0) {
		died($error_message);
	}

	$email_message = "Admin Application Below.\n\n";

	function clean_string($string) {
		$bad = array("content-type","bcc:","to:","cc:","href");
		return str_replace($bad,"",$string);
	}

	$email_message .="Name: ".clean_string($name)."\n";
	$email_message .="Email: ".clean_string($email_from)."\n";
	$email_message .="Skype: ".clean_string($skype)."\n";
	$email_message .="Location: ".clean_string($location)."\n";
	$email_message .=clean_string($largebox)."\n";

	$headers='From: '.$email_from."\r\n".'Reply-To: '.$email_from."\r\n".'X-Mailer: PHP/'.phpversion();
	@mail($email_to,$email_subject,$email_message, $headers);
	?>

Thank you for contacting us, we hope to speak with you more soon.

<?php

}

?>