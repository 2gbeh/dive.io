<?PHP
function JRAD_FORM_SELF () {return htmlspecialchars($_SERVER["PHP_SELF"]);}
function JRAD_FORM_POST () 
{
	$action = 'action="'.JRAD_FORM_SELF().'" ';
	$method = 'method="POST" ';
	$autoc = 'autocomplete="off"';
	return $action.$method.$autoc;
}
function JRAD_FORM_GET () 
{
	$action = 'action="'.JRAD_FORM_SELF().'" ';
	$method = 'method="GET" ';
	$autoc = 'autocomplete="off"';
	return $action.$method.$autoc;
}
function JRAD_FORM_FILE () 
{
	$action = 'action="'.JRAD_FORM_SELF().'" ';
	$method = 'method="POST" ';
	$enctype = 'enctype="multipart/form-data" ';
	$autoc = 'autocomplete="off"';
	return $action.$method.$enctype.$autoc;
}
function JRAD_FORM_SELECT ($array, $sel) 
{
	$buffer = "<option></option>";
	foreach ($array as $key => $value) 
	{
		if (isset($sel) && $sel == $key) $selected = 'selected';
		else if (isset($sel) && $sel == $value) $selected = 'selected';
		else $selected = '';		
		$buffer .= '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
	}
	return $buffer;	
}
function JRAD_FORM_OPTION ($type, $sel) 
{
	$array = JRAD_ENUM_FORM($type);
	$buffer = "<option></option>";
	foreach ($array as $key => $value) 
	{
		if (isset($sel) && $sel == $key) $selected = 'selected';
		else if (isset($sel) && $sel == $value) $selected = 'selected';
		else $selected = '';		
		$buffer .= '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
	}
	return $buffer;	
}
function JRAD_FORM_DATALIST ($type, $array)
{
	if (!is_array($array)) {$array = JRAD_ENUM_FORM($type);}
	$buffer = "";
	foreach ($array as $value)
		$buffer .= '<option value="'.$value.'" />';
	$output = '<datalist id="list-'.$type.'">'.$buffer.'</datalist>';
	return $output;
}

?>



