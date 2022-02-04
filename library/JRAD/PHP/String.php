<?PHP
function JRAD_STR_EXIST ($needle, $haystack)
{
	if (strpos($haystack,$needle)) return true;
	else return false;
}
function JRAD_STR_REPLACE ($from, $to, $in) {return str_replace($from,$to,$in);}
function JRAD_STR_DELIMIT ($var)
{
	if (JRAD_STR_EXIST("-",$var))
		return JRAD_STR_REPLACE("-","/",$var);
	else if (JRAD_STR_EXIST("/",$var))
		return JRAD_STR_REPLACE("/","-",$var);
	else
		return $var;
}
function JRAD_STR_CROP ($str, $crop = 160)
{
	if (strlen($str) > $crop) return '<var title="'.$str.'">'.substr($str,0,$crop).'...</var>';
	else return $str;
}
?>