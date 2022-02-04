<?php
$beanPoll = new BeanPoll($appname,$poll_id,$list,$page2);
$beanMaster = new BeanMaster($beanPoll->TABLE);

function procForm ($USER)
{
	$super = $GLOBALS['beanMaster'];	
	$bean = $GLOBALS['beanPoll'];
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		if (!$_POST['q1'] && $_POST['q2'])
			$err = "!You can't vote in the coming election without a PVC.";
		else
		{
			$execute = $bean->toServer($USER);
			if ($execute) 
			{
				$appname = $bean->APPNAME;
				$nav = $bean->NAV;
				
				// Compose Email
				$message = '<tr><th>FAQ</th><th>ANS</th></tr>';
				$message .= '<tr><td>Registered Voter</td><td>'.zero($_POST["q1"]).'</td></tr>';
				$message .= '<tr><td>Potential Voter</td><td>'.zero($_POST["q2"]).'</td></tr>';
				$message .= '<tr><td>Voter Apathy</td><td>'.zero($_POST["q3"]).'</td></tr>';
				$message .= '<tr><td>Civic Duty</td><td>'.zero($_POST["q4"]).'</td></tr>';
				$message .= '<tr><td>Voting Process</td><td>'.zero($_POST["q5"]).'</td></tr>';
				$message .= '<tr><td>Personal Interest</td><td>'.zero($_POST["q6"]).'</td></tr>';
				$message .= '<tr><td>Electoral Process</td><td>'.zero($_POST["q7"]).'</td></tr>';
				$super->sendMail($appname,$message);
				
				// Goto Report			
				$err = "Data captured. Thank you."; 
				JRAD_CTRL_GOTO($nav.'?err='.$err);
			}
			else {$err = "!Oops, something went wrong.";}
		}
	}
	
	$output->err = $err;
	$output->form = $bean->getView();
	return $output;
}

function procReport ($keyPoints)
{
	$super = $GLOBALS['beanMaster'];	
	$bean = $GLOBALS['beanPoll'];
	
	$total = $bean->getTotal();
	$sumQ1 = $bean->getSum(1);
	$sumQ2 = $bean->getSum(2);
	$contrast = $super->getPerc($sumQ1,$sumQ2);
	
	$max = 0;
	foreach ($keyPoints as $key => $value)
	{
		$i = $key + 1;
		$sum = $bean->getSum($i);
		
		$dataset[$key][0] = $value;
		$dataset[$key][1] = $sum;
		
		// Derived
		if ($key == 2 || $key == 4 || $key == 6)
		{
			if ($sum >= $max)
			{
				$max = $sum; 
				$derived = $value;
			}
		}		
	}
	
	$output->total = '('.$total.')';
	$output->contrast = '('.$contrast.'%)';
	$output->derived = '<i>'.$derived.'</i>';
	$output->chart = $super->getReport($dataset,$total);
	return $output;
}

?>
