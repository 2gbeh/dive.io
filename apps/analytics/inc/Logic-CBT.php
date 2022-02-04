<?php
$beanCBT = new BeanCBT($appname,$cbt_id,$list,$page2);

function procForm ($USER)
{
	$bean = $GLOBALS['beanCBT'];	
	$output->err = $bean->toServer($USER);
	$output->form = $bean->getView();
	return $output;
}

function procReport () 
{
	$bean = $GLOBALS['beanCBT'];
	$output = $bean->getReport();
	return $output;
}

?>
