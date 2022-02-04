<?PHP
function JRAD_CRUD_FIELDS ($array) 
{
	$buffer = "";
	foreach ($array as $key => $value) {$buffer .= $key.",";}
	return substr($buffer,0,-1);
}
function JRAD_CRUD_VALUES ($array) 
{
	$buffer = "";
	foreach ($array as $value) {$buffer .= "'".$value."',";}
	return substr($buffer,0,-1);
}
function JRAD_CRUD_SET ($array) 
{
	$buffer = "";
	foreach ($array as $key => $value) {$buffer .= $key."='".$value."', ";}
	return substr($buffer,0,-2);
}
function JRAD_CRUD_WHERE ($field, $value) 
{
	if (is_array($field) && is_array($value))
	{
		$buffer = "";
		for ($i = 0; $i < count($field); $i++)
			$buffer .= $field[$i]."='".$value[$i]."' AND ";
		$output = substr($buffer,0,-5);
	}
	else
		$output = $field."='".$value."'";
	return $output;
}


?>
