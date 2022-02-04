<?PHP
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{	
	$table = 'dve_payment';		
	$_POST = JRAD_VAL_TRIM($_POST);
	$execute = JRAD_CRUD_CREATE($table,$_POST);
	if ($execute) 
	{
		$from = $MANIFEST->mailto['Info'];
		$to = $MANIFEST->client['Email'];
		$subject = 'Payment Ticket';
		$message = "Name of Depositor: ".$_POST['depositor']."\r\n".
		"Reason for Payment: ".$_POST['summary']."\r\n".
		"Date of Payment: ".$_POST['date'];
		$server = $MANIFEST->typeface;
		JRAD_MAIL_TEXT($from,$to,$subject,$message,$server);
#		var_dump(array($from,$to,$subject,$message,$server));
		$err = "Payment ticket sent";		
	}
	else {$err = "!Oops, something went wrong.";}
}
?>