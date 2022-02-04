<?PHP
if ($_SERVER['REQUEST_METHOD'] === 'POST' || $sandbox == true)
{
	$table = "dve_users";
	$nav = "landing_login.php";
	$JRAD_CRUD_SIGNFOR = JRAD_ACCOUNT_RETRIEVE($table);
	if ($JRAD_CRUD_SIGNFOR)
	{	
		// Send Password to Email
		$from = $MANIFEST->mailto['Contact'];
		$to = $JRAD_CRUD_SIGNFOR->email;
		$subject = $MANIFEST->appname." - Retrieve Password";
		$message = $JRAD_CRUD_SIGNFOR->password;
		$server = $MANIFEST->typeface;
		smartMail($from,$to,$subject,$message,$server);

		// Goto Login
		$err = "Your password has been sent to your Email Address.";
		JRAD_CTRL_GOTO($nav.'?err='.$err);
	}
	else {$err = "!Email Addresss not found.";}
}

?>
