<?PHP
function JRAD_CTRL_GOTO ($dir) 
{
	echo '<script type="text/javascript">location.assign("'.$dir.'");</script>';
}
function JRAD_CTRL_RELOAD ($dir) 
{
	echo '<script type="text/javascript">location.reload();</script>';	
}
function JRAD_CTRL_HISTORY ($dir) 
{
	if (isset($_SESSION['history'])) {$dir = $_SESSION['history'];}
	JRAD_CTRL_GOTO($dir);
}
function JRAD_CTRL_BOUNCE ($dir, $history) 
{
	$appstate = $_SESSION['appstate'];
	if (!isset($_SESSION[$appstate])) 
	{
		if (!$history) $history = page();
		$_SESSION['history'] = $history; 
		JRAD_CTRL_GOTO($dir);
	}
}
function JRAD_CTRL_APPSTATE ($dir) 
{
	$appstate = $_SESSION['appstate'];
	if (!isset($_SESSION[$appstate])) {JRAD_CTRL_GOTO($dir);}
}
function JRAD_CTRL_LOGSTATE ($http) 
{
	if ($_REQUEST['logout'] == true)
	{
		session_unset(); 
		session_destroy(); 
		JRAD_CTRL_GOTO($http);	
	}
}
function JRAD_CTRL_ISSET ($args, $former, $latter) 
{
	if ($args) return $former; 
	else return $latter;
}

?>





