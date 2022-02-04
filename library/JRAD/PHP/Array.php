<?PHP
function JRAD_ARRAY_BUILD ($str, $delmt = ",") {return explode($delmt,$str);}
function JRAD_ARRAY_DROP ($array, $delmt = "") {return implode($delmt,$array);}
function JRAD_ARRAY_CASE ($array, $case = 'title') 
{
	if (!is_array($array)) {$array = implode(',',$array);}
	foreach ($array as $key => $value) 
	{
		if ($case == 'lower') {$newArray[$key] = strtolower($value);}
		else if ($case == 'upper') {$newArray[$key] = strtoupper($value);}
		else {$newArray[$key] = ucwords(strtolower($value));}
	}
	return $newArray;
}
function JRAD_ARRAY_INDEXOF ($array, $key = "end")
{
	if ($key == "cur")
		return current($array);
	else if ($key == "end")
		return end($array);
	else
	{
		if (array_key_exists($key,$array))
			return $array[$key];		
	}
}
function JRAD_ARRAY_RESET ($array) {return array_values($array);}
function JRAD_ARRAY_RAND ($array) {return shuffle($array);}
?>