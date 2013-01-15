<?php 

require('exacttarget_soap_client.php');

function triggerSend($_fromAdress,$_firstName,$_lastName,$_email,$_zip,$_iam,$_cause){

	$wsdl = 'https://webservice.exacttarget.com/etframework.wsdl';
	
	try	{
		/* Create the Soap Client */
		$client = new ExactTargetSoapClient($wsdl, array('trace'=>1));
	} catch (SoapFault $e) {
		throw new Exception($e->getMessage());
	}
	
	$client->username = 'hypoparaAPIUser';
	$client->password = 'hypoparaAPI4s1ren!';

	$tsd = new ExactTarget_TriggeredSendDefinition();
	$tsd->CustomerKey = ($_iam == 'Healthcare Professional' || $_iam == 'Researcher/Student') ? 'signup-hcp' : 'signup';

	$ts = new ExactTarget_TriggeredSend();
	$ts->TriggeredSendDefinition = new SoapVar($tsd, SOAP_ENC_OBJECT, 'TriggeredSendDefinition', "http://exacttarget.com/wsdl/partnerAPI");

	$ts->Subscribers = array();
	
	$fullName = new ExactTarget_Attribute();
	$fullName->Name = "Full Name";
	$fullName->Value = $_firstName.' '.$_lastName;
	
	$fName = new ExactTarget_Attribute();
	$fName->Name = "First Name";
	$fName->Value = $_firstName;
	
	$lName = new ExactTarget_Attribute();
	$lName->Name = "Last Name";
	$lName->Value = $_lastName;

	$zip = new ExactTarget_Attribute();
	$zip->Name = "Zip Code";
	$zip->Value = $_zip;

	$iam = new ExactTarget_Attribute();
	$iam->Name = "I am a";
	$iam->Value = $_iam;

	$cause = new ExactTarget_Attribute();
	$cause->Name = "Cause of Condition";
	$cause->Value = $_cause;
	
	$subscriber = new ExactTarget_Subscriber();
	$subscriber->EmailAddress = $_email;
	$subscriber->SubscriberKey = $_email;
	$subscriber->Attributes[] = $fullName;
	$subscriber->Attributes[] = $fName;
	$subscriber->Attributes[] = $lName;
	$subscriber->Attributes[] = $zip;
	$subscriber->Attributes[] = $iam;
	$subscriber->Attributes[] = $cause;
	
	$subscriber->Owner = new ExactTarget_Owner();
	$subscriber->Owner->FromAddress = $_fromAdress;
	//$subscriber->Owner->FromName = "";
	$ts->Subscribers[] = $subscriber;
	
	$object = new SoapVar($ts, SOAP_ENC_OBJECT, 'TriggeredSend', "http://exacttarget.com/wsdl/partnerAPI");

	$request = new ExactTarget_CreateRequest();
	$request->Options = NULL;
	$request->Objects = array($object);

	try{
		$results = $client->Create($request);
	} catch (SoapFault $e) {
		throw new Exception($e->getMessage());
	}
}
?>