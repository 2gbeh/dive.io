<?PHP
$table = "dve_materials";
$table_2 = "dve_audit";
$nav = "course_modules.php";
$nav_2 = "locked.php";
$base = "media/uploads/materials/";
$base_2 = "media/images/modules/";

if (!isset($_GET)) {JRAD_CTRL_GOTO($nav);}
else 
{
	$query = utmPure($_GET);
	foreach ($__Modules as $assoc)
	{
		if ($assoc["barcode"] == $query)
		{
			$c_meta = $assoc["title"].' (Download Materials)';
			$c_thumb = $base_2.$assoc["thumb"];			
			$c_title = $assoc["title"];
			$c_outline = $assoc["outline"];
		}
	}
	$array = JRAD_FETCH_CLAUSE($table,"barcode='".$query."' ORDER BY chapter");
	if (is_array($array))
	{
		$caption = count($array).' Total';		
		foreach ($array as $row)
		{
			$row = (object)$row;
			$chapter = $row->chapter;
			$title = $row->title;
			$size = toMoney($row->size).' KB';
			$file = $row->filename; $ext = getExt($file);
			$date = t_file($row->eta);
						
			$href = 'href="'.$base.$file.'"';			
			$download = 'download="DVE_Chapter_'.$chapter.$ext.'"';
			$sub = $href." ".$download." title='Click to Download Material'";
			$nosub = 'href="'.$nav_2.'"';
			if ($chapter > 1 && $row->status < 1)
			{
				if (subMaterial($table_2,$USER->id,$query)) {$action = $sub;}
				else {$action = $nosub;}
			}
			else {$action = $sub;}
			
			$output .= '<tr><td>
			<a '.$action.'>
				<div class="heading">'.$chapter.'. '.$title.'</div>
				<div class="footnote">
					<span class="date">'.$date.'</span>
					<span class="size">'.$size.'</span>
				</div>
			</a>
			</td></tr>';
		}
	}
	else 
	{
		$output = "<tr><td>
			<a><span class='date'>No materials found</span></a>
		</td></tr>";
	}
}
?>
