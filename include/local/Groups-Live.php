<div class="tags">Discover</div>
<table class="DRAGONFLY-LIVE"><tr><td>
<ul class="flex">
<?php
	$table = 'dve_users';
	$nav = "page.php";	
	$array = JRAD_FETCH_RAND($table);
	
	$buffer = '';
    foreach ($array as $row)
    {
		$row = (object)$row;
		$href = utmPure($nav,$row->username);
		$photo = getPhoto($row);
		$username = JRAD_STR_CROP($row->username,7);
		
        $buffer .= '<li>
            <div class="jacket">
				<a '.$href.'>
					<div class="photo" style="background-image:url('.$photo.');"></div>
				</a>
            </div>
            <div class="tag">'.$username.'</div>
        </li>';
    }
    echo $buffer;
?>
</ul>
</td></tr></table>
