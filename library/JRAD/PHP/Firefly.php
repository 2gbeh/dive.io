<?PHP
function JRAD_FRE_SELECT ($array, $predef)
{
	if (isset($_GET['fre']))
	{
		$fre = $_GET['fre'];
		foreach($array as $key => $assoc_array)
		{
			if (strpos($assoc_array['thumb'],$fre)) {$random = $key;}
		}
	}
	else {$random = array_rand($array,1);}
	if (array_key_exists($predef,$array)) {return $array[$predef];}
	else {return $array[$random];}
}

function JRAD_FRE_ONCLICK ($url)
{
	if (substr($url,0,4) == 'http') {$onClick = 'href="'.$url.'" target="_blank"';}
	else if (substr($url,0,1) == '/') {$onClick = 'href="'.substr($url,1).'" target="_blank"';}
	else if (substr($url,0,1) == '#') 
	{
		$url = str_replace(' ','_',$url);
		$onClick = 'onClick=alert("'.substr($url,1).'")';
	}
	else {$onClick = '';}
	return $onClick;
}

?>