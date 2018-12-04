<?php



if ($_POST["submit"]) {





	if (!$_POST['phone']) {



		$error .= "<br /> Please enter your phone number";



	}





	if ($error) {



		$result = '<div class="alert alert-danger"><strong>There were error(s)

in your form:</strong>' . $error . '</div>';



	} else {



		if (mail(
			"info@youremail.com",
			" Call back request from Combined Insurance Page",
  /* ---- Email where you want to receive the contact messages ---- */



			"Phone: " . $_POST['phone']
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