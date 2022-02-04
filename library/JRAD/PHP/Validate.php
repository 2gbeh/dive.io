<?PHP
function JRAD_VAL_TRIM ($post)
{
	foreach ($post as $name => $value)
	{
		if (substr($name,0,7) != 'submit-')
		{
			$value = trim($value);
			$value = stripslashes($value);
			$value = htmlspecialchars($value);
			$array[$name] = $value;
		}		
	}
	return $array;		
}
function JRAD_VAL_USERID ($args)
{
	if (strpos($args," ")) return 1;
}
function JRAD_VAL_EMAIL ($table)
{
	return JRAD_FETCH_EXIST($table,'email',$_POST['email']);
}
function JRAD_VAL_PHONE ($table)
{
	return JRAD_FETCH_EXIST($table,'phone',$_POST['phone']);	
}
function JRAD_VAL_USERNAME ($table)
{
	return JRAD_FETCH_EXIST($table,'username',$_POST['username']);	
}
function JRAD_VAL_FILE ($args, $rtype)
{
	$obj = JRAD_VAL_FILE(current($_FILES));
	if ($rtype == "type") {if ($obj->tmp_type != $args) return 1;}
	if ($rtype == "size") {if ($obj->tmp_size > $args) return 1;}	
}

?>