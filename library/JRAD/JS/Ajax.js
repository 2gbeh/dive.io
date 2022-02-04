// JavaScript Document
function $_dummy ($obj) {return true;}
function $_stream ($directory, $_callback) 
{
	var xhttp;
	if (window.XMLHttpRequest) {xhttp = new XMLHttpRequest();}
	else {xhttp = new ActiveXObject("Microsoft.XMLHTTP");}
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200)
			$_callback(this.responseText);
	};
	xhttp.open("GET",$directory,true);
	xhttp.send();
}
function $_get ($directory, $query, $_callback) 
{
	//JSON.stringify();
	var xhttp;
	if (window.XMLHttpRequest) {xhttp = new XMLHttpRequest();}
	else {xhttp = new ActiveXObject("Microsoft.XMLHTTP");}
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200)
			$_callback(this.responseText);
	};
	xhttp.open("GET",$directory+"?utm="+$query,true);
	xhttp.send();
}
function $_post ($directory, $query, $_callback) 
{
	//JSON.stringify();
	var xhttp;
	if (window.XMLHttpRequest) {xhttp = new XMLHttpRequest();}
	else {xhttp = new ActiveXObject("Microsoft.XMLHTTP");}
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200)
			$_callback(this.responseText);
	};
	xhttp.open("POST",$directory,true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send($query);
}
function $_liveSearch ($directory, $query, $target)
{
	//JSON.stringify();
	var xhttp;
	if (window.XMLHttpRequest) {xhttp = new XMLHttpRequest();}
	else {xhttp = new ActiveXObject("Microsoft.XMLHTTP");}
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200)
			document.getElementById($target).innerHTML = this.responseText;
	};
	xhttp.open("GET",$directory+"?utm="+$query,true);
	xhttp.send();
}
