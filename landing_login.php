<?php
include_once("config/@config.php");
include_once("library/JRAD/PHP/@JRAD-PHP.php");
include_once("library/JRAD/SQL/@JRAD-SQL.php");
include_once("php/logic/Controller.php");
include_once("php/logic/Methods.php");
include_once("php/server/Landing-Login.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
$meta_page = 'Log in';
include_once("include/shared/Meta.php");
include_once("library/JRAD/CSS/@JRAD-CSS.php");
include_once("library/JRAD/JS/@JRAD-JS.php");
include_once("library/JRAD/CSS/SKINS/DRAGONFLY/@DRA.php");
include_once("include/shared/External.php");
?>
<link type="text/css" href="css/shared/Global.css" rel="stylesheet" /> 
<link type="text/css" href="css/shared/Viewport.css" rel="stylesheet" /> 
</head>
<body class="DRAGONFLY DRAGONFLY-LANDING login">
<main>
	<img src="media/icons/Logo-Blue.png" alt="" border="0" />
	<h1>Welcome to Dive</h1>
    <h2>HWP Labs's courseware repository for entry-level developers</h2>
    <form <?php echo JRAD_FORM_POST(); ?>>
		<?php echo JRAD_DISPLAY_ERROR($err); ?>
        <input type="search" name="username" value="<?php echo $_POST['username']; ?>" placeholder="Enter your Username" required />		
        <input type="password" name="password" id="password" value="<?php echo $_POST['password']; ?>" placeholder="Enter your Password" onDblClick="$_togglePassword()" required />
		<input type="submit" value="Log in" />
		<input type="button" value="Don't have an Account" onClick="$_goto('landing_register.php')" />
        <p></p>
        Forgot Password? <a href="landing_retrieve.php">Click here</a>        
    </form>    
    <p>&nbsp;</p>
</main>
<?php include_once("include/shared/Footer.php"); ?>
</body>
</html>

