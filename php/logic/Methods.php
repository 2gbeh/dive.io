<?PHP
function setBadge ($args) 
{
	if (is_numeric($args) && $args > 0)	
		return '<var class="badge">'.$args.'</var>';
}
function setLabel ($args) {return '<var class="label">'.$args.'</var>';}
function getRow ($id) 
{
	$table = 'dve_users';
	$row = JRAD_FETCH_ID($table,$id);
	return $row;
}
function getName ($object) 
{
	$output = JRAD_CTRL_ISSET 
	(
		$object->fullname,
		toTitle($object->fullname),
		$object->username
	);
	return $output;
}
function getPhoto ($object) 
{
	$output = JRAD_CTRL_ISSET 
	(
		$object->photo,
		'media/uploads/profile/'.$object->photo,
		'media/icons/Glyph-User-Alt.png'
	);
	return $output;	
}
function getBase ($args) 
{
	if (!localhost()) {$args = '/Apps/Dive/'.$args;}
	return $args;	
}
function getHudname ($object) 
{
	$output = JRAD_CTRL_ISSET 
	(
		$object->fullname,
		toTitle($object->fullname),
		'Username: '.$object->username
	);
	return $output;
}
function utmPure ($nav, $query) 
{
	if ($nav && $query) {return "href=".$nav."?".$query;}
	else {$keys = array_keys($nav); return $keys[0];}
}
function oncPure ($nav, $query) 
{
	return 'onClick=$_goto("'.$nav.'?'.$query.'")';
}
function utmHref ($args) 
{
	$nav = "page.php";
	return "href=".$nav."?utm=".$args;
}
function md5Href ($args) 
{
	$nav = "page.php";
	return "href=".$nav."?utm=".md5($args);
}
function md5Page ($args) 
{
	$nav = "page.php";
	return $nav.'?utm='.md5($args);
}
function md5Query ($args) {return '?utm='.md5($args);}
function subMaterial ($table, $user_id, $barcode)
{
	$clause = "user_id='".$user_id."' AND barcode='".$barcode."'";
	$paid = JRAD_FETCH_CLAUSE($table,$clause);
	if ($user_id && $paid) {return 1;}
}
function getGroup ($array, $key)
{
	if (is_numeric($key) && array_key_exists($key,$array)) 
		return $array[$key];
}
function loginReq ($args)
{
	$nav = $args.'landing_login.php';
	return $nav.'?err=@Log in required';	
}
function pageLock ($appstate, $nav)
{
	$nav = 'landing_login.php';
	$alt = $nav.'?err=@Log in required';
	return $appstate ? $nav : $alt;
}
function getTimestamp () {return date("Y-m-d H:i:s");}
?>
