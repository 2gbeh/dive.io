<?PHP
// $hint === "" ? "no suggestion" : $hint;
function dump ($args) {var_dump($args);}
function toUpper ($args) {return strtoupper($args);}
function toLower ($args) {return strtolower($args);}
function toTitle ($args) {return ucwords(strtolower($args));}
function toNumber ($args) 
{
	$args = str_replace('.00','',$args);
	$args = str_replace(',','',$args);
	$args = str_replace(' ','',$args);	
	for ($i = 0; $i < strlen($args); $i++) {$array[] = (int)$args[$i];}
	$output = implode('',$array);
	return (int)$output;
}
function toMoney ($args) 
{
    if (is_double($args) || strlen($args) <= 3) {return $args;}
    else
    {
		$args = toNumber($args);
		return number_format($args);
    }
}
function toBadge ($args) {if ($args > 0) {return '<div class="badge">'.$args.'</div>';}}
function localhost () {if ($_SERVER['SERVER_NAME'] == 'localhost')	return 1;}
function site ()
{
	if (localhost()) 
	{
		$arr = explode('/',$_SERVER['PHP_SELF']); 
		$string = $arr[1].'/';
	}
	else {$string = '/';}
	return $string;
}
function timestamp () {return date("YmdHis");}
function t_time ($timestamp) 
{
	$array = explode(" ",$timestamp);
	$strtotime = strtotime($array[1]);
	return date("h:i A",$strtotime);
}
function t_date ($timestamp) 
{
	$array = explode(" ",$timestamp);
	$strtotime = strtotime($array[0]);
	return date("D, M j, Y",$strtotime);
}
function t_eta ($timestamp) 
{
	$array = explode(" ",$timestamp);
	$strtotime = strtotime($array[0]);
	$date = date("D, M j, Y",$strtotime);
	$strtotime = strtotime($array[1]);
	$time = date("h:i A",$strtotime);	
	return $date.' '.$time;
}
function t_file ($timestamp) 
{
	$array = explode(" ",$timestamp);
	$strtotime = strtotime($array[0]);
	$date = date("M j, Y",$strtotime);
	$strtotime = strtotime($array[1]);
	$time = date("h:i A",$strtotime);	
	return $date.' '.$time;
}
function f_date ($timestamp) 
{
	$array = explode(" ",$timestamp);
	$strtotime = strtotime($array[0]);
	return date("M j, Y",$strtotime);
}
function keygen ($args = 6)
{
	$buffer = "";
	for ($i = 0; $i < $args; $i++)
		$buffer .= mt_rand(0,9);
	return $buffer;
}
function toSex ($args)
{
	if ($args > 0) {return 'F';}
	else {return 'M';}	
}
function toGender ($args)
{
	if ($args > 0) {return 'Female';}
	else {return 'Male';}	
}
function isHref ($args) {if (substr($args,0,4) == 'http') {return 1;}}
function toMarital ($args)
{
	$array = PYF_ENUM('marital');
	return $array[$args];
}
function smartDate ($args)
{
	if (strpos($args,'/')) {$delmt = '/';}
	else if (strpos($args,'.')) {$delmt = '.';}	
	else {$delmt = '-';}
	$d = explode($delmt,$args);
	if (strlen($d[0]) == 4)	{$mktime = mktime(0,0,0,$d[1],$d[2],$d[0]);}
	else {$mktime = mktime(0,0,0,$d[1],$d[0],$d[2]);}
	return date("M j, Y",$mktime);
}
function smartMail ($from, $to, $subject, $message, $server)
{	
	$sender = $server ? $server." <".$from.">" : $from;	
	$message = wordwrap($message,70);
	$headers = "From: ".$sender;	
	if (mail($to,$subject,$message,$headers))
		return array($to,$subject,$message,$headers);
}
function toArray ($args) {return (array)$args;}
function toObject ($args) {return (object)$args;}
function jscape ($args) {return str_replace(' ','_',$args);}
function toBinary ($int, $len)
{
	$intlen = strlen($int);
	$diff = $len - $intlen;
	for ($i = 0; $i < $diff; $i++) {$zero .= '0';} 
	return $zero.$int;
}
function toMac ($date)
{
	$dash = str_replace('-',$to,$date);
	$space = str_replace(' ','',$dash);	
	$colon = str_replace(':','',$space);	
	return $colon;
}
function encrypt ($args) {return md5($args);}
function decrypt ($cryptograph, $md5)
{
	foreach ($cryptograph as $key) {if (md5($key) == $md5) return $key;}
}
function nbsp ($args) {if (!$args) return '&nbsp;'; else return $args;}
function dash ($args) {if (!$args) return '---'; else return $args;}
function dotted ($args) {if (!$args) return '...'; else return $args;}
function zero ($args) {if (!$args) return 0; else return $args;}
function transEnum ($array, $key)
{
	return $array[$key];
	if (array_key_exists($key,$array)) {return $array[$key];}
}
function page ($url)
{
	if (!$url) $url = $_SERVER['PHP_SELF'];
	$array = explode('/',$url);
	$array = explode('?',end($array));
	return current($array);
}
function getExt ($dir) {return '.'.array_pop(explode('.',$dir));}
function getProxy ()
{
	// Get IP
	if ($_SERVER['HTTP_CLIENT_IP'])
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	else if ($_SERVER['HTTP_X_FORWARDED_FOR'])
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else if ($_SERVER['HTTP_X_FORWARDED'])
		$ip = $_SERVER['HTTP_X_FORWARDED'];
	else if ($_SERVER['HTTP_FORWARDED_FOR'])
		$ip = $_SERVER['HTTP_FORWARDED_FOR'];
	else if ($_SERVER['HTTP_FORWARDED'])
		$ip = $_SERVER['HTTP_FORWARDED'];
	else if ($_SERVER['REMOTE_ADDR'])
		$ip = $_SERVER['REMOTE_ADDR'];
	else
		$ip = $_SERVER['SERVER_ADDR'];
	// Validate IPv4
	if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === false)
		return $ip;
	// Validate IPv6
	else if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false)
		return $ip;	
}
?>

