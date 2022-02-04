<?PHP
function PYF_ARRAY_BUILD ($str, $delmt = ",") {return explode($delmt,$str);}
function PYF_ARRAY_DROP ($array, $delmt = "") {return implode($delmt,$array);}
function PYF_ARRAY_INDEXOF ($array, $key = "end")
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
function PYF_ARRAY_RESET ($array) {return array_values($array);}
function PYF_ARRAY_RAND ($array) {return shuffle($array);}
?>