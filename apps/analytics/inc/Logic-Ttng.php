<?php
$beanMaster = new BeanMaster();
$beanSurvey = new BeanSurvey($appname,$form_id,$list,$page2);

function procForm ($USER)
{
	$bean = $GLOBALS['beanSurvey'];	
	$output->err = $bean->toServer($USER);
	$output->form = $bean->getView();
	return $output;
}

function procReport ($keyPoints)
{
	$super = $GLOBALS['beanMaster'];		
	$bean = $GLOBALS['beanSurvey'];	
	
	$total = $bean->getTotal();
	$map = array 
	(
		array(3,"Yes"),
		array(4,"Family"),
		array(4,"Friends"),
		array(4,"Society/Economy"),
		array(4,"Media"),
		array(5,"Yes"),
		array(6,"Yes"),
		array(7,"Very optimistic")
	);
	$max = 0;
	foreach ($keyPoints as $key => $value)
	{
		$question = $map[$key][0];
		$option = $map[$key][1];
		$sum = $bean->scanEntry($question,$option);
		
		$dataset[$key][0] = $value;
		$dataset[$key][1] = $sum;
		
		// Contrast
		if ($key == 0 || $key == 5 || $key == 7)
			$frac += $sum;
		// Derived
		if ($key > 0 && $key < 5)
		{
			if ($sum >= $max)
			{
				$max = $sum; 
				$derived = $map[$key][1];
			}
		}
	}
	$output->total = '('.$total.')';
	$output->contrast = '('.$super->getPerc(($total*3),$frac).'%)';
	$output->derived = '<i>'.$derived.'</i>';
	$output->chart = $super->getReport($dataset,$total);	
	return $output;
}


?>
