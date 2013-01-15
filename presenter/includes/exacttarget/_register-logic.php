<?php

require('triggeredsend.php');

$fromAddress = 'info@hypoparathyroidism.com';

$firstName = (isset($_POST['txtFirstName'])) ? trim($_POST['txtFirstName']) : null;
$lastName = (isset($_POST['txtLastName'])) ? trim($_POST['txtLastName']) : null;
$email = (isset($_POST['txtEmail'])) ? trim($_POST['txtEmail']) : null;
$confirmEmail = (isset($_POST['txtConfirmEmail'])) ? trim($_POST['txtConfirmEmail']) : null;
$zip = (isset($_POST['txtZip'])) ? trim($_POST['txtZip']) : null;
$iAm = (isset($_POST['radIam'])) ? trim($_POST['radIam']) : null;
$cause = (isset($_POST['radCause'])) ? trim($_POST['radCause']) : null;
$other = (isset($_POST['txtOther']) && $cause == 'other') ? trim($_POST['txtOther']) : null;
$agree = (isset($_POST['chkAgree']) && $_POST['chkAgree']==1);

$errors = array('first-name' => null, 'last-name' => null, 'email' => null, 'confirm-email' => null, 'zip' => null, 'iam' => null, 'cause' => null, 'other' => null, 'agree' => null);
$pass = array(true);

if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(!$firstName || strlen($firstName)>50 || $firstName == 'First'){
		$errors['first-name'] = 'Invalid Name';
		$pass[] = false;
	}
	if(!$lastName || strlen($lastName)>50 || $lastName == 'Last'){
		$errors['last-name'] = 'Invalid Name';
		$pass[] = false;
	}
	if(!preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i",$email) ){
		$errors['email'] = 'Not a valid email address';
		$pass[] = false;
	}
	if($email != $confirmEmail || $confirmEmail == ""){
		$errors['confirm-email'] = 'Email addresses do not match';
		$pass[] = false;
	}
	if ($zip == '' || !preg_match('/^\d{5}(\-\d{4})?$/', $zip)) {
		$errors['zip'] = 'Invalid zip code';
		$pass[] = false;
	}
	if ($iAm == '') {
		$errors['iam'] = 'Please select an option';
		$pass[] = false;
	}
	if ($cause == '') {
		$errors['cause'] = 'Please select an option';
		$pass[] = false;
	}
	if ($cause == 'other' && $other == '') {
		$errors['other'] = 'Please enter a cause';
		$pass[] = false;
	}
	if (!$agree) {
		$errors['agree'] = 'Please check the box.';
		$pass[] = false;
	}
	
	if (!in_array(false, $pass)) {

		try	{
			triggerSend($fromAddress,$firstName,$lastName,$email,$zip,$iAm,$cause);
			if (!headers_sent()){
				header('Location: sign-up-hypoparathyroidism-updates-thanks.html');
			}
		} catch (Exception $e) {
			$errMsg = 'An unexpected error occured while processing the form. Please try again.';
			//$errMsg = $e->getMessage();
		}
	}
}

?>