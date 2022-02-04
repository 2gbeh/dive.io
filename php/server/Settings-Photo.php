<?PHP
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$table = 'dve_users';
	$base = 'media/uploads/profile/';
	$nav = 'settings_profile.php';
	
	$_POST = JRAD_VAL_TRIM($_POST);
	$_POST['photo'] = $USER->username.'.gif';
	$base = getBase($base);
#	var_dump(JRAD_FILE_UPLOAD($base,$_POST['photo'])); return 1;
	if (JRAD_FILE_UPLOAD($base,$_POST['photo']))
	{
		$where = array('id',$USER->id);
		$execute = JRAD_CRUD_UPDATE($table,$_POST,$where);
		if ($execute) {JRAD_CTRL_GOTO($nav.'?err=Profile photo updated.');}
		else {$err = "!Oops, something went wrong.";}
	}
	else {$err = "!Error uploading image.";}
}
?>