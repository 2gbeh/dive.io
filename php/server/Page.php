<?PHP
$table = 'dve_users';
$table_2 = 'dve_developers';
$nav = 'groups.php';
$nav_2 = 'settings_profile.php';
$nav_3 = 'settings_developer.php';

if (!isset($_GET)) {JRAD_CTRL_GOTO($nav);}
else 
{
	$query = utmPure($_GET);
	$objuse = JRAD_FETCH_OBJECT($table,'username',$query);
	if (!is_object($objuse)) {JRAD_CTRL_GOTO($nav);}
	else
	{
		$objdev = JRAD_FETCH_OBJECT($table_2,'user_id',$objuse->id);
		#var_dump($utm,$USER->id,$objuse,$objdev);
		$photo = getPhoto($objuse);
		$fullname = getName($objuse);
		$domain = transEnum($__Domain,$objdev->domain);	
		$groups = transEnum($__Groups,$objuse->groups);	
		$location = JRAD_ENUM_STATE($objuse->location);
		if ($query == $USER->username) 
		{
			$action_btn = '<a href="'.$nav_2.'" class="button">Edit Profile</a>';
			$action_link_1 = '<a href="'.$nav_2.'" class="link">Edit</a>';
			$action_link_2 = '<a href="'.$nav_3.'" class="link">Edit</a>';
		}
		$gender = toGender($objuse->gender);	
		$username = toLower($objuse->username);	
		$phone = $objuse->phone;
		$email = $objuse->email;
		$project = $objdev->project;
		if (strlen($project) > 3)
		{
			 $project = '<tr>
				<td colspan="2" class="input">
					<div class="mark">Currently working on...</div>'.
					$project.'
				</td>
			</tr>';
		}
		if (isHref($objdev->linkedin)) {$linkedin = '<a href="'.$objdev->linkedin.'" target="_blank">'.$objdev->linkedin.'</a>';}
		else {$linkedin = $objdev->linkedin;}
		if (isHref($objdev->github)) {$github = '<a href="'.$objdev->github.'" target="_blank">'.$objdev->github.'</a>';}
		else {$github = $objdev->github;}
		$company = $objdev->company;
		if (isHref($objdev->website)) {$website = '<a href="'.$objdev->website.'" target="_blank">'.$objdev->website.'</a>';}
		else {$website = $objdev->website;}
		
		// Meta Ttitle
		$smartTitle = getName($objuse).' ('.$groups.')';
		
		// Groups Footer
		if ($_GET['history'] == true)
		{
			$backQuery = '<tr><td>
				<a href="'.$nav.'?search='.$groups.'">Search Results</a>
			</td></tr>';
		}
	}
}

?>