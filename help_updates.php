<?php
include_once("config/@config.php");
include_once("library/JRAD/PHP/@JRAD-PHP.php");
include_once("library/JRAD/SQL/@JRAD-SQL.php");
include_once("php/logic/Controller.php");
include_once("php/logic/Methods.php");
include_once("data/list/Updates.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = 'Platform Updates';
include_once("include/shared/Meta.php");
include_once("library/JRAD/CSS/@JRAD-CSS.php");
include_once("library/JRAD/JS/@JRAD-JS.php");
include_once("library/JRAD/CSS/SKINS/DRAGONFLY/@DRA.php");
include_once("include/shared/External.php");
?>
<link type="text/css" href="css/shared/Global.css" rel="stylesheet" /> 
<link type="text/css" href="css/shared/Viewport.css" rel="stylesheet" /> 
</head>
<body class="DRAGONFLY DRAGONFLY-SETTINGS updates">
<?php include_once("include/shared/Header.php"); ?>
<main>   
	<section>
    <table class="menu">
        <tr><th>Platform Updates</th></tr>
        <?php
			$date = "Aug 1, 2019";
			$summary = "Coming Soon";
			foreach ($__Updates as $key => $value)
			{
				$buffer .= '<tr><td>
					<a><span class="date">'.$date.'</span> '.$value.'</a>
					<div class="summary">'.$summary.'</div>
				</td></tr>';
			}
			echo $buffer;
		?>
    </table>
    </section>
    
    <section>
		<?php include_once("include/local/Help-Footer.php"); ?>
    </section>        
</main>
<?php include_once("include/shared/Footer.php"); ?>
</body>
</html>

