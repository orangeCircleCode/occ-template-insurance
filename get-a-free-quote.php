<?php



if ($_POST["submit"]) {





	if (!$_POST['insurance-option']) {



		$error .= "<br /> Please select the type of insurance you need";





	}





	if (!$_POST['name']) {



		$error = "<br />Please enter your name";



	}



	if (!$_POST['email']) {



		$error .= "<br />Please enter your email address";



	}





	if (!$_POST['phone']) {



		$error .= "<br /> Please enter your phone number";



	}



	if (!$_POST['idnumber']) {



		$error .= "<br /> Please enter your ID Number";



	}



	if (!$_POST['message']) {



		$error .= "<br />Please enter a message";



	}



	if ($_POST['email'] != "" and !filter_var(
		$_POST['email'],

		FILTER_VALIDATE_EMAIL
	)) {



		$error .= "<br />Please enter a valid email address";



	}





	if ($error) {



		$result = '<div class="alert alert-danger"><strong>There were error(s)

in your form:</strong>' . $error . '</div>';



	} else {


		if (mail(
			"info@youremail.com",
			"Request to get a quote from Insurance Broker",
  /* ---- Email where you want to recieve the contact messages ---- */


			"Name: " . $_POST['name'] . "

Phone: " . $_POST['phone'] . "

Email: " . $_POST['email'] . "

Insurance Type: " . $_POST['insurance-option'] . "

ID Number: " . $_POST['idnumber'] . "

Message: " . $_POST['message']
		)) {

			$result = '<div class="alert alert-success"> <strong> Thank

you!</strong> We\'ll get back to you shortly.</div>';

		} else {

			$result = '<div class="alert alert-danger">Sorry, there was

an error sending your message. Please try again later.</div>';

		}

	}

}

?>