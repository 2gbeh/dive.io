<?PHP
// Global Objects
$_SESSION['appstate'] = $appstate = 'user';
$landing = 'index.php';
$login = 'landing_login.php';
$table = 'dve_users';
$table_2 = 'dve_developers';
$table_3 = 'dve_proxy';
// Log in with IP
if (!isset($_SESSION[$appstate]))
{
	$proxy_row = JRAD_FETCH_OBJECT($table_3,"proxy",getProxy());
	if ($proxy_row) {$_SESSION[$appstate] = $proxy_row->user_id;}
}
// Get User Row
$USER = JRAD_FETCH_ID($table,$_SESSION[$appstate]);
// Get Developer Row
$DEV = JRAD_FETCH_OBJECT($table_2,'user_id',$USER->id);
// Log out when log out button clicked
if ($_REQUEST['logout'] == true)
{
	JRAD_CRUD_DELETE($table_3,"user_id",$USER->id);
	JRAD_CTRL_LOGSTATE($landing);
}
?>
