<?PHP
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$table = "dve_users";
	$table_2 = 'dve_proxy';	
	$nav = 'index.php';
	
	$_POST = JRAD_VAL_TRIM($_POST);	
	$JRAD_CRUD_SIGNIN = JRAD_ACCOUNT_SIGNIN($table);
	if ($JRAD_CRUD_SIGNIN == "#401") $err = "!Username not found";
	else if ($JRAD_CRUD_SIGNIN == "#402") $err = "!Incorrect password";	
	else 
	{
		// Save IP Address
		$post = array("proxy"=>getProxy(),"user_id"=>$JRAD_CRUD_SIGNIN);
		$where = array("proxy",getProxy());
		JRAD_CRUD_UNIQUE($table_2,$post,$where);
			
		// Goto Homepage
		$err = "Log in successfully";
		JRAD_CTRL_HISTORY($nav);
	}
}
?>