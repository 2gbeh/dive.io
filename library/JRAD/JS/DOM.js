// JavaScript Document
function $_console ($obj) {console.log($obj);}
function $_turbo ($obj) 
{
	var $turbo = document.getElementById('turbo');
	if ($obj)
		$turbo.innerHTML += $obj;
	else
		alert($turbo)
}
function $_print ($key, $value) {document.getElementById($key).innerHTML = $value;}
function $_style ($key, $value) {document.getElementById($key).style = $value;}
function $_head ($obj)
{
	var $append = document.head.innerHTML;
	if ($obj)
		document.head.innerHTML = $obj + $append;
	else
		return document.head.innerHTML;
}
function $_hide ($args) {document.getElementById($args).style.display = "none";}
function $_show ($args) {document.getElementById($args).style.display = "block";}
function $_inline ($args) {document.getElementById($args).style.display = "inline-block";}
function $_toggle ($args)
{
	var $status, $target = document.getElementById($args);
	if (!$target.style.display || $target.style.display == "none")
		$status = "block";
	else 
		$status = "none";
	$target.style.display = $status;
}
function $_slideshow ()
{
	var $target = document.getElementById('slideshow');
	var $base = $target.getAttribute('data-base');
	var $img = $target.getAttribute('data-img');
	var $timer = $target.getAttribute('data-timer');
	var $delay = parseInt($timer) * 1000;
	var $imgArray = $img.split(",");	
	var $rand = Math.floor(Math.random() * $imgArray.length); 
	var $selected = $imgArray[$rand];
	$target.style.backgroundImage = "url('"+ $base+$selected +"')";
	$target.style.transition = "all 2s";
//	alert("url('"+ $base+$selected +"')")	
	setTimeout($_slideshow,$delay);
}