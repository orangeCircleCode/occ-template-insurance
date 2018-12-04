<?php


if ($_POST["submit"]) {



	if (!$_POST['title']) {

		$error = "<br />Please select your Title";

	}

	if (!$_POST['initials']) {

		$error = "<br />Please enter your Initials";

	}

	if (!$_POST['company-name']) {

		$error = "<br />Please enter your Full Name/Name of Company";

	}

	if (!$_POST['id-number']) {

		$error = "<br />Please enter your Id Number/ Company Registration";

	}

	if (!$_POST['phone']) {

		$error = "<br />Please enter your Contact Number";

	}

	if (!$_POST['riskaddress']) {

		$error = "<br />Please enter your Risk Address";

	}
	if (!$_POST['postal-address']) {

		$error = "<br />Please enter your Postal Address";

	}

	$message = 'Get a Free Broker Form Submission';



	if ($error) {

		$result = '<div class="alert alert-danger"><strong>There were error(s)
in your form:</strong>' . $error . '</div>';

	} else {



		if (mail(
			"info@youremail.com",
			"Get an Insurance Broker request",
        /* ---- Email where you want to recieve the contact messages ---- */



			"Current Insurer: " . $_POST['current-insurance'] . "
Policy Number: " . $_POST['policy-number'] . "
Title: " . $_POST['title'] . "
Initials: " . $_POST['initials'] . "
Full Name/Name of Company: " . $_POST['company-name'] . "
Checkbox: " . $_POST['check'] . "
Id Number/ Company Registration: " . $_POST['id-number'] . "
Contact Number: " . $_POST['phone'] . "
Risk Address: " . $_POST['riskaddress'] . "
Postal Address: " . $_POST['postal-address']
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