<?php
include_once("../../config/@config.php");
include_once("../../library/JRAD/PHP/@JRAD-PHP.php");
include_once("../../library/JRAD/SQL/@JRAD-SQL.php");
include_once("../../php/logic/Controller.php");
include_once("../../php/logic/Methods.php");

include_once("inc/List-Master.php");
include_once("inc/List-Ttng.php");
include_once("inc/Bean-Master.php");

$SUPER = new DataAccessObject();
$BEAN = new BeanMaster();

var_dump
(
 	seed($list)
);

function out ($table)
{
	$super = $GLOBALS['SUPER'];		
	$super->Reset($table);
	$resultSet = $super->Read();
	return $resultSet;
}
function arrange ($list)
{
	foreach ($list as $index => $assoc)
	{
		$q[] = $assoc['question'];
		foreach ($assoc as $key => $value)
			if (substr($key,0,6) == 'option')
				$a[$index][] = $value;
	}
	return array($q,$a);
}
function seed ($list)
{
	$resultSet = out('dve_users');
	foreach ($resultSet as $object)
	{
		if ($object->id <= 26)
		{
			$table = 'dve_ana_form';
			$user_id = $object->id;
			$form_id = 'ttng';
			$eta = $object->eta;
		
			$map = arrange($list);
			for ($i = 0; $i < count($map[0]); $i++)
			{
				$rand = array_rand($map[1][$i]);
				$buffer[$i] = '{"question":"'.$map[0][$i].'","answer":"'.$map[1][$i][$rand].'"}';
			}
			$entry = implode(',',$buffer);
			$post = array('user_id'=>$user_id,'form_id'=>$form_id,'entry'=>$entry,'eta'=>$eta);
#			JRAD_CRUD_CREATE($table,$post);
		}
	}
	return out('dve_ana_form');

}
function ftp ()
{
	$resultSet = out('dve_ana_acute2');
	foreach ($resultSet as $object)
	{
		$array = (array)$object;
		array_pop($array);	
		array_pop($array);
		$csv = implode(',',$array);
		$entry = array('user_id'=>0,'poll_id'=>'acute2','entry'=>$csv);
#		JRAD_CRUD_CREATE('dve_ana_poll',$entry);
	}
	return out('dve_ana_poll');
}
?>
