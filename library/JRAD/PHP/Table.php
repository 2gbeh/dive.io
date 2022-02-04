<?PHP
function JRAD_TABLE_PAGER ($name, $limit)
{
	// get current request
	if (!isset($_GET['pager'])) {$page = 1;}
	else {$page = $_GET['pager'];}
	// get previous request
	$cname = "pager-".$name;
	if (!isset($_COOKIE[$cname])) {$last = 1;}
	else {$last = (int)$_COOKIE[$cname];}
	// compute prev and next
	if ($page == 'prev' && $last == 1) {$page = $last;}	
	if ($page == 'prev' && $last >= 2) {$page = $last - 1;}
	if ($page == 'next') {$page = $last + 1;}
	if ($page == 'end') {$page = $last;}
	// set new request
	setcookie($cname,$page);
	// set new offset
	$offset = ($page-1) * $limit;
	return "LIMIT ".$limit." OFFSET ".$offset;
}
?>