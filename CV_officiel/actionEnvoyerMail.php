<?php
	/*var_dump($_POST);*/
	//phpinfo();
	error_reporting(E_ALL);
 	ini_set("display_errors", 1);
	if ($_POST['g-recaptcha-response'] && $_POST["firstName"] && $_POST["lastName"] && $_POST["companyName"] && $_POST["referenceEmail"] && $_POST["object"] && $_POST["message"])
	{
		$url = "https://www.google.com/recaptcha/api/siteverify";
		//echo $_POST['g-recaptcha-response'];
		$ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_POST, true);
	    $datas = array("response"=>$_POST['g-recaptcha-response'],"secret"=>"6Ldr0y0hAAAAAGRxTj5j40KDeg847mS2KPJKHGce");
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
	    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	    $reponse=curl_exec($ch);

	    var_dump(json_decode($reponse)->success);
	    if(json_decode($reponse)->success)
	    {
	    	envoyerMail();

	    }
	    else
	    {
	    	header("Location:envoyerMail.php");
	    }
	}

	function envoyerMail()
	{
		if ($_POST['g-recaptcha-response'] && $_POST["firstName"] && $_POST["lastName"] && $_POST["companyName"] && $_POST["referenceEmail"] && $_POST["object"] && $_POST["message"])
		{
	        $body = $_POST["message"];
	        $body .="<br><br>Entreprise/société : ".$_POST["companyName"]."<br>";
	        $body .= "Pays de l'entrerpise : ".$_POST["country"]."<br>";
	        $body .="Nom référent : ".$_POST["firstName"]." ".$_POST["lastName"]."<br>";

		    require_once __DIR__ . '/PHPMailer/src/Exception.php';
		    require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
		    require_once __DIR__ . '/PHPMailer/src/SMTP.php';


		    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

		    //$mail->\PHPMailer\PHPMailer\SMTPDebug = 0;

		    $mail->isSMTP();

		    $mail->Host = 'smtp-mail.outlook.com';

		    $mail->SMTPAuth = true;

		    $mail->Username = "vincent.buniazet@outlook.fr";

		    $mail->Password = "Lelapin21!";

		    $mail->SMTPSecure = "ssl";

		    $mail->Port = 587;

		    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;

		    $mail->From = "vincent.buniazet@outlook.fr";

		    $mail->FromName = "Formulaire site web";


		    $mail->addAddress("vincet-buniazet-07@hotmail.fr", "Formulaire auto");

		    $mail->isHTML(true);

		    $mail->Subject =  $_POST["object"] ;

		    $mail->Body = utf8_decode($body);

		    //$mail->AltBody = "This is the plain text version of the email content";


		    try {

		        $mail->send();

		        echo "Message has been sent successfully";
		        header("Location:envoyerMail.php");

		    } catch (Exception $e) {

		        echo "Mailer Error: " . $mail->ErrorInfo;

		    }


	    }
	}
?>