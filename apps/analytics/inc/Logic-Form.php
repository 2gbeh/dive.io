<?php
$beanForm = new BeanForm($appname,$form_id,$list,$page2);

function procForm ($USER)
{
	$bean = $GLOBALS['beanForm'];	
	$output->err = $bean->toServer($USER);
	$output->form = $bean->getView();
	return $output;
}

function procReport () 
{
	$bean = $GLOBALS['beanForm'];
	$output = $bean->getReport();
	return $output;
}

?>
