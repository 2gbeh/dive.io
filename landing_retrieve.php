<?php
include_once("config/@config.php");
include_once("library/JRAD/PHP/@JRAD-PHP.php");
include_once("library/JRAD/SQL/@JRAD-SQL.php");
include_once("php/logic/Controller.php");
include_once("php/logic/Methods.php");
include_once("php/server/Landing-Retrieve.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = 'Retrieve Password';
include_once("include/shared/Meta.php");
include_once("library/JRAD/CSS/@JRAD-CSS.php");
include_once("library/JRAD/JS/@JRAD-JS.php");
include_once("library/JRAD/CSS/SKINS/DRAGONFLY/@DRA.php");
include_once("include/shared/External.php");
?>
<link type="text/css" href="css/shared/Global.css" rel="stylesheet" /> 
<link type="text/css" href="css/shared/Viewport.css" rel="stylesheet" /> 
</head>
<body class="DRAGONFLY DRAGONFLY-LANDING retrieve">
<?php include_once("include/local/Header.php"); ?>
<main>
	<h1>Retrieve Password</h1>
    <h2>Your Password will be sent to your Email Address</h2>
    <form <?php echo JRAD_FORM_POST(); ?>>
		<?php echo JRAD_DISPLAY_ERROR($err); ?>
        <input type="email" name="email" value="<?php echo $_POST['email']; ?>" placeholder="Enter your Email Address" required />
		<input type="submit" value="Send" />
		<input type="button" value="Back to Log in" onClick="$_goto('landing_login.php')" />
        <p></p>
        Don't have an Account? <a href="landing_register.php">Click here</a>
    </form>    
    <p>&nbsp;</p>
</main>
<?php include_once("include/shared/Footer.php"); ?>
</body>
</html>

