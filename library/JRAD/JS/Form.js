// JavaScript Document
function $_keycode ($event, $code, $callback)
{
	var $key = $event.which || $event.keyCode;
	if ($key == $code) {$callback();}
	else {return false;}
}
function $_isEmpty ($args) {return !$args.replace(/\s+/,'');}
function $_reset ($args) {document.getElementById($args).value = "";}
function $_formManifest ($args)
{
	var $form = document.getElementById($args);
	var $ctrl = $form.querySelectorAll('[name]');
	var $buffer = "", $name, $value;
	for (var i = 0; i < $ctrl.length; i++)
	{
		$name = $ctrl[i].name;
		$value = $ctrl[i].value;
		$buffer += $name+":\t"+$value+"\n";
	}
	alert($buffer);
}
function $_formControl ($attrib)
{
	if (!$attrib) var $attrib = '[data-ajax]';
	var $formControl = document.querySelectorAll($attrib);
	var $each, $name, $value, $buffer = "";
	for (var i = 0; i < $formControl.length; i++)
	{
		$each = $formControl[i];
		$name = $each.name;
		$value = $_trim($each.value);
		$buffer += $name +"="+ $value +"&";
	}
	return $buffer = $buffer.slice(0,-1);
}
function $_itemControl ($attrib)
{
	if (!$attrib) var $attrib = '[data-ajax]';
	var $formControl = document.querySelectorAll($attrib);
	var $each, $name, $value, $buffer = "";
	for (var i = 0; i < $formControl.length; i++)
	{
		$each = $formControl[i];
		if ($each.checked)
		{
			$name = $each.name;
			$value = $_trim($each.value);
			$buffer += $name +"="+ $value +"&";
		}
	}
	return $buffer = $buffer.slice(0,-1);
}
function $_subscribe ($args, $server)
{
	var $target = document.getElementById($args);
	if ($target.checkValidity() == true)
	{
		var $query = "email="+$target.value;
		$_post($server,$query,$_dummy);
		alert("Thank you for subscribing to our Newsletter");
		$target.value = "";						
	}
	else 
	{
		alert("Enter a valid Email Address"); 
		$target.focus();
	}
}
function $_togglePassword ($args)
{
	if (!$args) $args = 'password';
	var $target = document.getElementById($args);
	if ($target.type == 'password') {$target.type = "text";}
	else {$target.type = "password";}
}
function $_confirmPassword ($args1, $args2)
{
	$target1 = document.getElementById($args1);
	$target2 = document.getElementById($args2);	
	if ($target2.value != $target1.value)
	{
		alert("Password does not match!");
		$target2.value = "";
	}

}
function $_confirmSubmit ($args)
{
	if (confirm('Are you sure?') == true)
		document.getElementById($args).submit();
}
function $_smartDelete ($this)
{
	if (confirm('Delete Record?') == true)
	{
		$table = $this.getAttribute('data-table');
		$id = $this.getAttribute('data-id');		
		$_goto("?table="+$table+"&id="+$id);
	}
}
function $_smartConfirm ($confirm, $request)
{
	if (confirm($confirm) == true) {$_goto($request);}
}
function $_smartReset ($args, $pattern) 
{
	var $target = document.getElementById($args);
	if ($target.value == $pattern)
		$target.value = "";
}
function $_upload ($formCtrl, $fileCtrl) 
{
	var $form = document.getElementById($formCtrl);
	var $file = document.getElementById($fileCtrl);
	$file.click();
	if (confirm('Upload File?') == true) {$form.submit();}
}