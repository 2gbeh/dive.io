<?php
include_once("config/@config.php");
include_once("library/JRAD/PHP/@JRAD-PHP.php");
include_once("library/JRAD/SQL/@JRAD-SQL.php");
include_once("php/logic/Controller.php");
include_once("php/logic/Methods.php");
include_once("data/list/Docs.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = 'Documentation';
include_once("include/shared/Meta.php");
include_once("library/JRAD/CSS/@JRAD-CSS.php");
include_once("library/JRAD/JS/@JRAD-JS.php");
include_once("library/JRAD/CSS/SKINS/DRAGONFLY/@DRA.php");
include_once("include/shared/External.php");
?>
<link type="text/css" href="css/shared/Global.css" rel="stylesheet" /> 
<link type="text/css" href="css/shared/Viewport.css" rel="stylesheet" /> 
</head>
<body class="DRAGONFLY DRAGONFLY-SETTINGS docx">
<?php include_once("include/shared/Header.php"); ?>
<main>   
	<section>
    <table class="menu">
        <tr><th>Documentation</th></tr>
        <?php
			$buffer = "";
			foreach ($__Docs as $key => $value)
			{
				$dd = "dd_".$key;
				$buffer .= '<tr><td><a onClick=$_toggle("'.$dd.'")>'.$value.'</a></td></tr>';
				$buffer .= '<tr><td class="notice dd" id="'.$dd.'">No content at this time</td></tr>';
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

