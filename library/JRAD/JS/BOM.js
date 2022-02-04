// JavaScript Document
function $_clearRequest ()
{
	var $page = window.location.href;
	var $page = $page.split('#') && $page.split('?');	
	return $page[0];
}
function $_goto ($url)
{
	if ($url[0] == "?") {window.location.href = $_clearRequest() + $url;}
	else window.location.href = $url;	
}
function $_appendTo ($request) {window.location.href += $request;}
function $_toTop ()
{
	var $page = window.location.href;
	var $clear = $page.split('#');
	window.location.href = $clear[0]+'#';
}
function $_toBottom ($url)
{
	var $page = window.location.href;
	var $clear = $page.split('#');
	window.location.href = $clear[0]+'#bottom';
}
function $_pager ($args) {$_goto("?pager="+$args);}
