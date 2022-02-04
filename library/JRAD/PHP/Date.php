<?PHP
function PYF_SET_TIME () {}
function PYF_GET_TIME ()
{
	// 00:00:00
	$preset = date('H:i:s');
	if ($args == "feed") return date('H:i');
	else if ($args == "event") return date('g A');	
	else if ($args == "form") return date('h:i A');
	else return $preset;
}
function PYF_SET_DATE () {}
function PYF_GET_DATE ()
{
	// 1992-09-15
	$preset = date('Y-m-d');
	if ($args == "hwp") return strtoupper(substr(date('D'),0,2)).date('dmy');
	else if ($args == "feed") return date('M j');
	else if ($args == "report") return date('M j, Y');		
	else if ($args == "form") return date('d-m-Y');	
	else if ($args == "formal") return date('d/m/Y');
	else if ($args == "teller") return date('D, M j, Y');	
	else if ($args == "windows") return date('l, F j, Y');	
	else if ($args == "long") return date('Y/n/j/w/z');		
	else return $preset;
}
function PYF_SET_ETA ($timestamp, $return = "date") 
{
	$array = explode(" ",$timestamp);
	if ($return == "time")
	{
		$strtotime = strtotime($array[1]);
		return date("h:i A",$strtotime);
	}
	else 
	{
		$strtotime = strtotime($array[0]);
		return date("D, M j, Y",$strtotime);
	}
}
function PYF_GET_ETA ($args)
{
	// 1992-09-15 00:00:00
	$preset = date('Y-m-d H:i:s');
	if ($args == "stamp") return date('YmdHis');
	else if ($args == "file") return date('Y/n/j H:i');
	else if ($args == "teller") return date('D, M j, Y h:i A');
	else return $preset;
}

?>