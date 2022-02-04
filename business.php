<?php
include_once("config/@config.php");
include_once("library/JRAD/PHP/@JRAD-PHP.php");
include_once("library/JRAD/SQL/@JRAD-SQL.php");
include_once("php/logic/Controller.php");
include_once("php/logic/Methods.php");
include_once("data/list/Business.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = 'For Business';
include_once("include/shared/Meta.php");
include_once("library/JRAD/CSS/@JRAD-CSS.php");
include_once("library/JRAD/JS/@JRAD-JS.php");
include_once("library/JRAD/CSS/SKINS/DRAGONFLY/@DRA.php");
include_once("include/shared/External.php");
?>
<link type="text/css" href="css/shared/Global.css" rel="stylesheet" /> 
<link type="text/css" href="css/shared/Viewport.css" rel="stylesheet" /> 
</head>
<body class="DRAGONFLY DRAGONFLY-SETTINGS busines">
<?php include_once("include/shared/Header.php"); ?>
<main>   
	<section>
    <table class="menu">
        <tr><th>Dive for Business</th></tr>
        <tr><td class="notice">
        Get started with our streamlined catalogue of 
        solutions to help you achieve your business goals
        </td></tr>
        <?php
			$nav = "payment.php";
			$summary = "";#"No content at this time";
			foreach ($__Business as $key => $value)
			{
				$buffer .= '<tr><td>
					<a href="'.$nav.'">'.$value.'</a>
					<div class="summary">'.$summary.'</div>
				</td></tr>';
			}
			echo $buffer;
		?>
    </table>
    </section>
</main>
<?php include_once("include/shared/Footer.php"); ?>
</body>
</html>

