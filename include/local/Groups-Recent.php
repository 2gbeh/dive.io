<div class="tags">Recent</div>    
<ul class="DRAGONFLY-SEARCH">
<?php
	$table = 'dve_users';
	$table_2 = 'dve_developers';
	$nav = "page.php";
	$base = 'media/icons/Verified.png';
    $array = JRAD_FETCH_RECENT($table);
	
	$buffer = '';	
    foreach ($array as $row)
    {
		$row = (object)$row;
		$href = utmPure($nav,$row->username);
		$photo = getPhoto($row);
		$name = getName($row);
		$groups = transEnum($__Groups,$row->groups);
		
		$dev = JRAD_FETCH_OBJECT($table_2,'user_id',$row->id);
		$domain = transEnum($__Domain,$dev->domain);
		if ($dev) {$verified = '<img class="verified" src="'.$base.'" alt="" border="0" />';}
		else {$verified = '';}		
		
        $buffer .= '<li>
            <a '.$href.'>
            <table class="list">
            <tr>
                <td><var class="profile" style="background-image:url('.$photo.');">&nbsp;</var></td>
                <td>
                    <div class="title">'.$name.'</div>
                    <div class="subtitle">'.$groups.'</div> '.$verified.'
                    <div class="meta">'.$domain.'</div>						
                </td>
            </tr>            
            </table>
            </a>
        </li>';
    }
    echo $buffer;
?>
</ul>    

	