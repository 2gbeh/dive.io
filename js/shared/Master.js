// JavaScript Document
function $_this_toggle ($args)
{
	if ($_isEmpty($args))
	{
		$_show('live');
		$_show('recent');
		$_hide('result');
	}
	else
	{
		$_hide('live');
		$_hide('recent');
//		$_show('result');
	}
}
function $_this_datalist ($args)
{
	if (!$_isEmpty($args))
	{
		$datalist = document.getElementById('list-groups');
		$option = $datalist.getElementsByTagName('option');
		for (var i = 0; i < $option.length; i++)
		{
			if ($args == $option[i].value)
				$_goto("?search="+$args);
		}
	}
}

