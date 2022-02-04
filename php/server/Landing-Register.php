<?PHP
if ($_SERVER['REQUEST_METHOD'] === 'POST' || $sandbox == true)
{
	$table = "dve_users";
	$table_2 = 'dve_proxy';	
	$nav = 'index.php';
	
	$_POST = JRAD_VAL_TRIM($_POST);
	if (JRAD_VAL_USERID($_POST['username']))
		$err .= "Username cannot contain space(s).<br/>";			
	if (JRAD_VAL_EMAIL($table)) 
		$err .= "Email Address already exist.<br/>";		
	if (JRAD_VAL_USERNAME($table)) 
		$err .= "Username already exist.<br/>";
	
	if ($err) {$err = '!'.$err;}
	else
	{
		$JRAD_CRUD_SIGNUP = JRAD_ACCOUNT_SIGNUP($table);
		if ($JRAD_CRUD_SIGNUP)
		{	
			// Save IP Address
			$post = array("proxy"=>getProxy(),"user_id"=>$JRAD_CRUD_SIGNUP);
			$where = array("proxy",getProxy());
			JRAD_CRUD_UNIQUE($table_2,$post,$where);		
			
			// Send welcome mail
			$from = $MANIFEST->mailto['Contact'];
			$to = $_POST['email'];
			$subject = "Welcome to ".$MANIFEST->appname;
			$message = "HWP Labs's courseware repository for entry-level developers.";
			$server = $MANIFEST->typeface;
			smartMail($from,$to,$subject,$message,$server);

			// Goto Homepage
			$err = "Account created successfully.";
			JRAD_CTRL_HISTORY($nav);
		}
		else {$err = "!Oops, something went wrong. Try again later.";}
	}
}

?>
