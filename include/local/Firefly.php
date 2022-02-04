<?php
include_once("data/list/Firefly.php");
$base = "media/images/firefly/";
$array = $__Firefly;

$row = JRAD_FRE_SELECT($array,1);
$thumb = $base.$row['thumb'];
$caption = $row['caption'];
$summary = JRAD_STR_CROP($row['summary'],'160');
$action = $row['action'];
$onClick = JRAD_FRE_ONCLICK($row['url']);
//dump(strlen($caption));
//dump($row);
?>
<table border="0" class="DRAGONFLY-FIREFLY-GO">
<tr class="firefly-header">
    <td><div class="firefly-thumb" style="background-image:url(<?php echo $thumb; ?>);">&nbsp;</div></td>
    <td>
        <div class="firefly-caption">
        	<var id="indicator" title="Advert Placement">Ad</var>
			<?php echo $caption; ?>
        </div>
        <div class="firefly-summary"><?php echo $summary; ?></div>            
    </td>            
</tr>            
<tr class="firefly-footer"> 
    <td colspan="2">
    <div class="firefly-action">
        <a <?php echo $onClick; ?>>
            <span class="arrow">&rsaquo;</span>        
        	<?php echo $action; ?>
        </a>
    </div>     
    </td>
</tr>
</table>          