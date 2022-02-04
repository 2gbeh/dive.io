<?PHP
$table = "dve_codelib";
$base = "media/uploads/codelib/";

$array = JRAD_FETCH_CLAUSE($table,"id > 0 ORDER BY title");
#var_dump($array);
if (is_array($array))
{
	$caption = count($array).' Total';		
	foreach ($array as $row)
	{
		$row = (object)$row;
		$title = $row->title;
		$size = toMoney($row->size).' KB';
		$file = $row->filename; $ext = getExt($file);
		$date = t_file($row->eta);
		$id = $row->id;		
		
		if ($USER)			
		{
			$href = 'href="'.$base.$file.'"';			
			$download = 'download="DVE_Codelib_'.$id.$ext.'"';
			$action = $file ? $href." ".$download." title='Click to Project File'" : '';
		}
		else 
			$action = 'href="'.loginReq().'"';

		$output .= '<tr><td>
		<a '.$action.'>
			<div class="heading">'.$title.'</div>
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
		<a><span class='date'>No project files found</span></a>
	</td></tr>";
}

?>