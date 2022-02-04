// JavaScript Document
function $_setSession ($obj)
{
	for (var $key in $obj)
	{
		if (typeof(Storage) !== "undefined")
			sessionStorage.setItem($key,$obj[$key]);
		else
			$_setCookie($key,$obj[$key]);
	}
}
function $_getSession ($key)
{
	if (typeof(Storage) !== "undefined")
		return sessionStorage.getItem($key);	
	else
		return $_getCookie($key);
}
function $_delSession ($key)
{
	if (typeof(Storage) !== "undefined")	
		return sessionStorage.removeItem($key);	
	else
		return $_delCookie($key);
}
function $_clearSession ()
{
	return sessionStorage.clear();
}
function $_setCookie ($key, $value)
{
	document.cookie = $key+"="+$value;
}
function $_getCookie ($key)
{
	var $each;	
	var c = document.cookie;
	var $array = c.split("; ");	
	for (var i = 0; i < $array.length; i++)
	{
		$each = $array[i].split("=");
		if ($each[0] == $key) return $each[1];
	}
}
function $_delCookie ($key)
{
	var $exp = "Mon, 14 Nov 2011 00:00:00 UTC";
	return document.cookie = $key+"=; expires="+$exp;
}
function $_clearCookie ()
{
	var $each;
	var c = document.cookie;
	var $array = c.split("; ");	
	for (var i = 0; i < $array.length; i++)
	{
		$each = $array[i].split("=");
		$_delCookie($each[0]);
	}
}
function $_setAppstate ($key, $value)
{
	if (!$key) $key = "appstate"
	if (!$value) $value = "true";
	sessionStorage.setItem($key,$value);
}
function $_checkAppstate ($goto, $key, $value)
{
	if (!$key) $key = "appstate"
	if (!$value) $value = "true";
	if (sessionStorage.getItem($key) != $value) 
		$_goto($goto);
}
