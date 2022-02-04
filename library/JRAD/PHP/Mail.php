<?PHP
function JRAD_MAIL_TEXT ($from, $to, $subject, $message, $server)
{	
	$sender = $server ? $server." <".$from.">" : $from." <".$from.">";
	$message = wordwrap($message,70,"\r\n");
	$headers = "From: ".$sender."\r\n";
	$headers .= "X-Mailer: PHP/".phpversion();	
	if (mail($to,$subject,$message,$headers))
		return array($to,$subject,$message,$headers);
}
function JRAD_MAIL_HTML ($from, $to, $subject, $message, $server)
{
	$sender = $server ? $server." <".$from.">" : $from." <".$from.">";
	$headers = "MIME-Version: 1.0"."\r\n";
	$headers .= "Content-type:text/html; charset=UTF-8"."\r\n";
	$headers .= "From: ".$sender;
	if (mail($to,$subject,$message,$headers))
		return array($to,$subject,$message,$headers);
}

?>