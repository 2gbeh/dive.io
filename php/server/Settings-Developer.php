<?PHP
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$table = 'dve_developers';
	$_POST = JRAD_VAL_TRIM($_POST);
	$execute = JRAD_CRUD_UNIQUE($table,$_POST,array('user_id',$USER->id));
	if ($execute) {JRAD_CTRL_GOTO('?err=Developer account updated.');}
	else {$err = "!Oops, something went wrong.";}

}
?>