<?PHP
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$table = 'dve_users';
	$history = 'settings_profile.php';
	$nav = 'landing_login.php';
	
	$_POST = JRAD_VAL_TRIM($_POST);		
	if ($_POST['current'] != $USER->password)
		$err = "!Current password is incorrect.";
	else 
	{
		$execute = JRAD_ACCOUNT_PASSWORD($table);
		if ($execute) 
		{
			// Send Password to Email
			$from = $MANIFEST->mailto['Contact'];
			$to = $USER->email;
			$subject = $MANIFEST->appname." - Password Changed";
			$message = $_POST['password'];
			$server = $MANIFEST->typeface;
			smartMail($from,$to,$subject,$message,$server);				

			// Goto Login
			$_SESSION['history'] = $history;
			$err = "Log in with your new password.";
			JRAD_CTRL_GOTO($nav.'?err='.$err);
		}
		else {$err = "!Oops, something went wrong.";}
	}			
}
?>