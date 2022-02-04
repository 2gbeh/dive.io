<?PHP
$table = "dve_materials";
$table_2 = "dve_audit";
$base = "media/images/modules/";
$nav = "course_materials.php";

foreach ($__Modules as $key => $assoc)
{ 
	$thumb = $assoc['thumb'];
	$title = $assoc['title'];
	$outline = $assoc['outline'];
	$barcode = $assoc['barcode'];
	$action = oncPure($nav,$barcode);	
	$materials = JRAD_FETCH_NUMROWS($table,'barcode',$barcode);
	$students = $assoc['students']? $assoc['students']:JRAD_FETCH_NUMROWS($table_2,'barcode',$barcode);
	
	$output .= '<tr '.$action.'>
		<td class="thumb"><div class="profile" style="background-image:url('.$base.$thumb.');">&nbsp;</div></td>
		<td class="article">
			<div class="headline">'.$title.'</div>
			<div class="byline">'.$outline.'</div>
			<div class="meta">
				Materials ('.$materials.')
				&nbsp;&nbsp;
				Students ('.$students.') 
			</div>
		</td>
	</tr>';
}
?>