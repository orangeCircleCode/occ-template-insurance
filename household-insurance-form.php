<?php



if ($_POST["submit"]) {







	if (!$_POST['name']) {



		$error = "<br />Please enter your name";



	}



	if (!$_POST['email']) {



		$error .= "<br />Please enter your email address";



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
			"Household Insurance Full Form Submission",
  /* ---- Email where you want to recieve the contact messages ---- */



			"Name: " . $_POST['name'] . "

Email: " . $_POST['email'] . "

Title: " . $_POST['title'] . "

Marital Status: " . $_POST['marital-status'] . "

Employment Status: " . $_POST['employment-status'] . "

Work Phone: " . $_POST['workphone'] . "

Cell Number: " . $_POST['cellphone'] . "

Home Address: " . $_POST['home-address'] . "

Risk Address: " . $_POST['risk-address'] . "

Insured age: " . $_POST['insured-age'] . "

House Description: " . $_POST['house-description'] . "

Is this a holiday home: " . $_POST['holiday-home'] . "

Is theft cover included: " . $_POST['theft-cover'] . "

Type of Cover: " . $_POST['cover-type'] . "

Is the home near open fields?: " . $_POST['fields'] . "

Are you a pensioner: " . $_POST['pensioner'] . "

Is the home in secured complex?: " . $_POST['secure-complex'] . "

Does the home have an alarm: " . $_POST['alarm'] . "

Armed response?: " . $_POST['armed-response'] . "

Non-standard construction: " . $_POST['construction'] . "

Security Gates: " . $_POST['security-gates'] . "

Previous Insurance: " . $_POST['previous-insurance'] . "

Previous Insurance Companies: " . $_POST['company'] . "

Claimed Insurance: " . $_POST['claimed-insurance'] . "

Years Passed since last claim: " . $_POST['claimed-years']
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