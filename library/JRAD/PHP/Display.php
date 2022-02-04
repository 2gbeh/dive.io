<?PHP
function JRAD_DISPLAY_ERROR ($err)
{
	if ($err || $_GET['err'])
	{
		if ($_GET['err']) $err = $_GET['err'];
		$code = substr($err,0,1);
		$message = substr($err,1);
		if ($code == "!") $color = 'ERROR-DANGER';
		else if ($code == "@") $color = 'ERROR-WARNING';
		else if ($code == "#") $color = 'ERROR-INFO';
		else {$color = 'ERROR-SUCCESS'; $message = $err; $_POST = array();}
		$output = "<div class='ERROR ".$color."' id='ERROR'>
			<span class='ERROR-CANCEL' title='Close' onClick=document.getElementById('ERROR').style.display='none'>&times;</span>
			<b>".$message."</b>
		</div>";
		return $output;			
	}
}

?>