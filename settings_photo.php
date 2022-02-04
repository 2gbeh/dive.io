<?php
include_once("config/@config.php");
include_once("library/JRAD/PHP/@JRAD-PHP.php");
include_once("library/JRAD/SQL/@JRAD-SQL.php");
include_once("php/logic/Controller.php");
include_once("php/logic/Methods.php");
include_once("php/server/Settings-Photo.php");
JRAD_CTRL_BOUNCE($login);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = 'Change Profile Photo';
include_once("include/shared/Meta.php");
include_once("library/JRAD/CSS/@JRAD-CSS.php");
include_once("library/JRAD/JS/@JRAD-JS.php");
include_once("library/JRAD/CSS/SKINS/DRAGONFLY/@DRA.php");
include_once("include/shared/External.php");
?>
<link type="text/css" href="css/shared/Global.css" rel="stylesheet" /> 
<link type="text/css" href="css/shared/Viewport.css" rel="stylesheet" /> 
</head>
<body class="DRAGONFLY DRAGONFLY-SETTINGS settings">
<?php include_once("include/shared/Header.php"); ?>
<main>
    <section class="">
    <form <?php echo JRAD_FORM_FILE(); ?>>
	<?php echo JRAD_DISPLAY_ERROR($err); ?>
    <table class="list">
    	<tr><th>Profile Photo</th></tr>
    	<tr><td class="notice">
        	Profile Photo should not be more than 20KB in size and 250x250 in resolution.
        </td></tr>
    	<tr><td><input type="file" name="photo" required /></td></tr>
        <tr><td><input type="submit" value="Upload" /></td></tr>
    </table>
    </form>
    </section>
        
    <section>
		<?php include_once("include/local/Settings-Footer.php"); ?>
    </section>
</main>
<?php include_once("include/shared/Footer.php"); ?>
</body>
</html>

