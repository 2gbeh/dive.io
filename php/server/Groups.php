<?php
#var_dump($_GET);
if (isset($_GET['search']))
{	
	$table = 'dve_users';
	$table_2 = 'dve_developers';
	$nav = "page.php";
	$base = 'media/icons/Verified.png';
	
	$_GET = JRAD_VAL_TRIM($_GET);
	$group_id = array_search($_GET['search'],$__Groups);
	$array = JRAD_CRUD_READ($table,'groups',$group_id);
	$isSearch = true;
	
	if (is_numeric($group_id) && $array)
	{
		$sizeof = count($array);
		$total = toMoney($sizeof);
		foreach ($array as $row)
		{
			$row = (object)$row;
			$href = utmPure($nav,$row->username).'&history=true';
			$photo = getPhoto($row);
			$name = getName($row);
			$location = JRAD_ENUM_STATE($row->location);
			
			$dev = JRAD_FETCH_OBJECT($table_2,'user_id',$row->id);
			$domain = transEnum($__Domain,$dev->domain);
			if ($dev) {$verified = '<img class="verified" src="'.$base.'" alt="" border="0" />';}
			else {$verified = '';}		
			
			$result .= '<li>
				<a '.$href.'>
				<table class="list">
				<tr>
					<td><var class="profile" style="background-image:url('.$photo.');">&nbsp;</var></td>
					<td>
						<div class="title">'.$name.'</div>
						<div class="subtitle">'.$location.'</div> '.$verified.'
						<div class="meta">'.$domain.'</div>						
					</td>
				</tr>            
				</table>
				</a>
			</li>';
		}
		$display = '<section>
			<div class="tags">Search Results ('.$total.')</div>
			<ul id="output">'.$result.'</ul>    
		</section>';
		$isFound = true;
	}
	else 
	{
		$display = '<section>
			<div class="tags" style="padding:15px 10px;">No records found</div>
		</section>';
		$isFound = false;
	}	
}
?>
