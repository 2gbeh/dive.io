<?PHP
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{	
	$table = 'dve_help';		
	$_POST = JRAD_VAL_TRIM($_POST);
	$execute = JRAD_CRUD_CREATE($table,$_POST);
	if ($execute) {$err = "Enquiry ticket sent";}
	else {$err = "!Oops, something went wrong.";}
}
?>